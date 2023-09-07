@extends('layout.index')
@section('title', 'Code')

@section('content')
    <style>
        pre {
            height: 600px;
            background: black;
            color: white;
        }

        .html-entity {
            color: red;
            /* Set the color you want for the HTML entities */
            font-weight: bold;
            /* Optional: Add bold style to the HTML entities */
            /* Add any additional styles as desired */
        }
    </style>
    <section class="mt-md-4 pt-md-2 mb-5 pb-4">
        <h1>{{ $widget->title }}</h1>
        <p>{{ $widget->description }}</p>
        <div class="html mt-md-4 pt-md-2 mb-5 pb-4">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4>HTML</h4>
                    </div>
                    <div class="col">
                        <button class="btn blue-gradient waves-effect waves-light float-right"><i
                                class="fas fa-clone left"></i> Copy Code</button>
                    </div>
                </div>
            </div>
            <pre>
            <code>
                {{ $widget->html }}
            </code>
        </pre>
        </div>

        <div class="html mt-md-4 pt-md-2 mb-5 pb-4">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4>CSS</h4>
                    </div>
                    <div class="col">
                        <button class="btn blue-gradient waves-effect waves-light float-right"><i
                                class="fas fa-clone left"></i> Copy Code</button>
                    </div>
                </div>
            </div>
            <pre>
            <code>
                {{ $widget->css }}
            </code>
        </pre>
        </div>

        <div class="html mt-md-4 pt-md-2 mb-5 pb-4">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4>Javascript / JQuery</h4>
                    </div>
                    <div class="col">
                        <button class="btn blue-gradient waves-effect waves-light float-right"><i
                                class="fas fa-clone left"></i> Copy Code</button>
                    </div>
                </div>
            </div>
            <pre>
            <code>
                {{ $widget->javascript }}
            </code>
        </pre>
        </div>

        <a href="{{ route('widgets') }}" class="btn peach-gradient waves-effect waves-light float-right">Go
            Back</a>

    </section>
@endsection
