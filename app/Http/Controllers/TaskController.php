<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Task;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = Task::orderBy('id', 'desc')->paginate(10);

        return view('pages.dataForSEO.task_list', compact('tasks'));
    }

    public function googleForm()
    {
        return view('pages.dataForSEO.google_form');
    }

    public function yelpForm()
    {
        return view('pages.dataForSEO.yelp_form');
    }

    public function sendGoogleReviews(Request $request)
    {
        $data = $request->all();
        $username = $data['username'];
        $password = $data['password'];

        $apiUrl = 'https://api.dataforseo.com/';
        $client = new Client(['base_uri' => $apiUrl]);

        $postArray = [];

        // Example #1 - a simple way to set a task
        $postArray[] = [
            "location_name" => $data['location_name'],
            "language_name" => "English",
            "keyword" => mb_convert_encoding($data['keyword'], "UTF-8"),
            "depth" => $data['depth'],
            "sort_by" => $data['sort_by'],
        ];

        $taskId = $this->createTask($data, $postArray, '/v3/business_data/google/reviews/task_post');

        if ($taskId) {
            $getHost = request()->getHost();

            $task = Task::create([
                'name' => $data['keyword'],
                'access_token' => $taskId,
                'provider' => $username,
                'type' => 'google',
                'location' => $data['location_name'],
                'depth' => $data['depth'],
                'sort_by' => $data['sort_by'],
            ]);

            $task->update([
                'publish' => 'https://'.$getHost.'/api/task/google/'.$task->id
            ]);
        }

        return redirect()->route('tasks');

    }

    public function sendYelpReviews(Request $request)
    {
        $data = $request->all();
        $username = $data['username'];
        $password = $data['password'];

        $apiUrl = 'https://api.dataforseo.com/';
        $client = new Client(['base_uri' => $apiUrl]);

        $postArray = [];

        // Example #1 - a simple way to set a task
        $postArray[] = [
            "alias" => mb_convert_encoding($data['alias'], "UTF-8"),
            "language_name" => "English",
            "depth" => $data['depth'],
            "sort_by" => $data['sort_by'],
        ];

        $taskId = $this->createTask($data, $postArray, '/v3/business_data/yelp/reviews/task_post');

        if ($taskId) {
            $getHost = request()->getHost();

            $task = Task::create([
                'name' => $data['alias'],
                'access_token' => $taskId,
                'provider' => $username,
                'type' => 'yelp',
                'depth' => $data['depth'],
                'sort_by' => $data['sort_by'],
            ]);

            $task->update([
                'publish' => 'https://'.$getHost.'/api/task/yelp/'.$task->id
            ]);

        }

        return redirect()->route('tasks');
    }

    public function searchTasks(Request $request)
    {
        $data = $request->all();

        $tasks = Task::where('name', 'LIKE', '%'.$data['keyword'].'%')
            ->orWhere('id', 'LIKE', '%'.$data['keyword'].'%')
            ->orWhere('provider', 'LIKE', '%'.$data['keyword'].'%')
            ->orWhere('type', 'LIKE', '%'.$data['keyword'].'%')
            ->orWhere('access_token', 'LIKE', '%'.$data['keyword'].'%')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('pages.dataForSEO.task_list', compact('tasks'));
    }

    public function delete(Task $task)
    {
        $task->delete();

        return redirect()->back();
    }

    public function show($type, Task $task)
    {
        return view('pages.dataForSEO.edit_form', compact('type', 'task'));
    }

    public function update(Request $request, $type, Task $task)
    {
        $postArray = [];
        $data = $request->all();

        if ($task) {
            $url = '/v3/business_data/yelp/reviews/task_post';

            if ($type == 'google') {
                $postArray[] = [
                    "location_name" => $task['location_name'],
                    "language_name" => "English",
                    "keyword" => mb_convert_encoding($task['name'], "UTF-8"),
                    "depth" => $task['depth'],
                    "sort_by" => $data['sort_by'],
                ];

                $url = '/v3/business_data/google/reviews/task_post';
            } else{
                $postArray[] = [
                    "alias" => mb_convert_encoding($task['name'], "UTF-8"),
                    "language_name" => "English",
                    "depth" => $task['depth'],
                    "sort_by" => $data['sort_by'],
                ];
            }

            $data['username'] = $task['provider'];
            $data['password'] = $data['password'];

            $taskId = $this->createTask($data, $postArray, $url);

            $task->update([
                'access_token' => $taskId
            ]);

            return redirect()->route('tasks');
        }

        return redirect()->back();
    }

    public function createTask($data, $postArray, $url)
    {
        $apiUrl = 'https://api.dataforseo.com/';
        $client = new Client(['base_uri' => $apiUrl]);

        $username = $data['username'];
        $password = $data['password'];

        if (count($postArray) > 0) {
            try {
                $response = $client->post($url, [
                    'json' => $postArray,
                    'auth' => [$username, $password]
                ]);

                $result = json_decode($response->getBody(), true);
                $result = $result['tasks'][0]['id'];

                return $result;
            } catch (Exception $e) {
                \Log::info('Error: ', $e->getMessage());
                return $e->getMessage();
            }
        }
    }
}
