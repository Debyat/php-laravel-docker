<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;

class ApiController extends Controller
{
    // API
    public function retain($type, Task $task)
    {
        return $this->getReviews($type, $task);
    }

    public function getReviews($type, $task)
    {
        // Replace these variables with your actual credentials
        $login = env('DATAFORSEO_USERNAME', 'myportal.marketing@gmail.com');
        $password = env('DATAFORSEO_PASSWORD', '779591ba0986a51c');

        // Send a GET request to the API
        $client = new Client();

        // Define your headers
        $headers = [
            'Authorization' => 'Basic ' . base64_encode($login . ':' . $password),
            'Content-Type' => 'application/json',
        ];

        // Define the URL
        $url = "https://api.dataforseo.com/v3/business_data/{$type}/reviews/task_get/{$task->access_token}";

        // Make the GET request
        $response = $client->get($url, [
            'headers' => $headers,
        ]);

        // Get the response body as a string
        $body = $response->getBody()->getContents();

        // You can parse the JSON response if it's JSON
        $result = json_decode($response->getBody(), true);
        // $result = $result['tasks'];

        return response()->json($result);
    }
}
