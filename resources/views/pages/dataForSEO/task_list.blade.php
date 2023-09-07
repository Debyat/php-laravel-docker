@extends('layouts.index')
@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

    <!-- Section: Basic examples -->
    <section>
        <div class="row">
            <div class="col">
                <a href="{{route('google')}}" type="button" class="btn blue-gradient btn-primary">Add Google Task</a>
                <a href="{{route('yelp')}}" type="button" class="btn peach-gradient btn-secondary">Add Yelp Task</a>
            </div>
            <div class="col">
                <form class="form-inline mt-2 float-right" action="{{route('search')}}" method="POST">
                    @csrf
                    <div class="form-group md-form mt-2">
                    <input name="keyword" class="form-control w-100" type="text" placeholder="Search">
                    </div>
                    <button type="submit" class="btn blue-gradient ml-2 mr-0 mb-md-0 mb-4 px-3"><i
                        class="fas fa-search"></i> Search</button>
                    <a href="{{route('tasks')}}" class="btn peach-gradient ml-2 mr-0 mb-md-0 mb-4 px-3"><i
                        class="fas fa-trash"></i> Clear</a>
                </form>
            </div>
        </div>


      <div class="card card-cascade narrower z-depth-1">
        <div class="px-4">

          <div class="table-responsive">
            <!-- Table -->
            <table class="table table-hover mb-0">

              <!-- Table head -->
              <thead>
                <tr>
                  <th class="th-lg">Publish Url</th>
                  <th class="th-lg">Task ID</th>
                  <th class="th-lg">Location</th>
                  <th class="th-lg">Provider</th>
                  <th class="th-lg">Type</th>
                  <th class="th-lg">Updated</th>
                  <th class="th-lg"> Action </th>
                </tr>
              </thead>
              <!-- Table head -->

              <!-- Table body -->
              <tbody>
                @if(count($tasks) <= 0)
                    <tr>
                        <td>
                            <p>No Data Found</p>
                        </td>
                    </tr>
                @endif

                @foreach ($tasks as $task)
                    <tr>
                        <td title="Copy ID" class="token" style="cursor: copy">{{ $task->publish }}</td>
                        <td>{{ $task->access_token }}</td>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->provider }}</td>
                        <td>{{ $task->type }}</td>
                        <td>{{ $task->updated_at }}</td>
                        <td>
                            <a href="{{ route('task.update', ['task' => $task->id, 'type' => $task->type]) }}" class="btn blue-gradient ml-2 mr-0 mb-md-0 mb-4 px-3" title="Edit">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="{{ route('task.delete', ['task' => $task->id]) }}" class="btn peach-gradient ml-2 mr-0 mb-md-0 mb-4 px-3" title="Delete">
                                <i class="fas fa-trash"></i>
                            </a>
                        <td>
                    </tr>
                @endforeach

              </tbody>
              <!-- Table body -->
            </table>
            {{ $tasks->links() }}
            <!-- Table -->
          </div>

          <hr class="my-0">

          <!-- Bottom Table UI -->
          <div class="d-flex justify-content-between">

            <!-- Name -->
            <select class="mdb-select colorful-select dropdown-primary mt-2">
              <option value="" disabled>Rows number</option>
              <option value="1" selected>5 rows</option>
              <option value="2">25 rows</option>
              <option value="3">50 rows</option>
              <option value="4">100 rows</option>
            </select>
          </div>
          <!-- Bottom Table UI -->

        </div>
      </div>

    </section>
    <!-- Section: Basic examples -->

  </div>
@endsection
