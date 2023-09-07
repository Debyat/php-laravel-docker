@extends('layouts.index')
@section('title', 'Form')

@section('content')
    <div class="container-fluid">
        <!-- Grid row -->
        <div class="row" style="justify-content: center">

            <!-- Grid column -->
            <div class="col-md-6 my-5">

                <div class="card card-signup z-depth-1">

                    <div class="card-body text-center">

                        <img src="{{ asset('img/Logo.png') }}" class="logo" />
                        <p class="slogan">Create Google Task</p>

                        <form action="{{ route('create-google') }}" method="POST">
                            @csrf
                            <div class="md-form md-outline">
                                <input type="text" id="username" name="username" class="form-control">
                                <label for="username">Username</label>
                            </div>

                            <div class="md-form md-outline">
                                <input type="password" id="password" name="password" class="form-control">
                                <label for="password">Password</label>
                            </div>

                            <div class="md-form md-outline">
                                <input type="text" id="email" name="location_name" class="form-control">
                                <label for="email">Location</label>
                            </div>

                            <div class="md-form md-outline">
                                <input type="text" id="password2" name="keyword" class="form-control">
                                <label for="password2">Keyword</label>
                            </div>

                            <div class="md-form md-outline">
                                <select class="mdb-select colorful-select dropdown-primary md-form" name="sort_by">
                                    <option value="highest_rating" disabled selected>Sort By</option>
                                    <option value="newest">Latest Reviews</option>
                                    <option value="highest_rating">Highest Ratings</option>
                                    <option value="lowest_rating">Lowest Ratings</option>
                                </select>
                            </div>

                            <div class="md-form md-outline">
                                <input type="number" id="password2" name="depth" class="form-control">
                                <label for="password2">Data To Retrieve</label>
                            </div>

                            <div class="card-foter text-right">
                                <a href="{{ route('tasks') }}" class="btn btn-secondary" style="width: 140px;">Cancel</a>
                                <button type="submit" class="btn blue-gradient" style="width: 140px;">Create</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->
    </div>
@endsection
@push('js')
    <script>
        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').materialSelect();
        });
    </script>
@endpush
