@extends('layout.index')
@section('title', 'Widgets')

@section('content')
    <div class="container-fluid">

        <!-- Section: Additional cards -->
        <section class="mt-md-4 pt-md-2 mb-5 pb-4">
            <div class="row">
                <div class="col">
                    <h4 id="" class="font-weight-bold mb-4 dark-grey-text"><strong>Lists Of Custom Widgets</strong>
                    </h4>
                </div>
                <div class="col">
                    <a href="{{ route('widgets-add') }}" class="btn blue-gradient float-right">New Widget</a>
                </div>
            </div>
            <div class="row">
                <!-- Subheading -->
                @if (count($widgets) <= 0)
                    <div class="text-center">
                        <p>No Widgets Found.</p>
                    </div>
                @endif
                @foreach ($widgets as $widget)
                    <div class="col-md-4 mb-4">
                        <!-- Section: Live preview -->
                        <section>
                            <!-- Card -->
                            <div class="card">
                                <!-- Card image -->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Others/food.jpg" class="card-img-top"
                                        alt="sample">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Card image -->
                                <!-- Button -->
                                <a class="btn-floating btn-action ml-auto mr-4 peach-gradient lighten-3"
                                    data-toggle="tooltip" data-placement="bottom" title="View Live"><i
                                        class="fas fa-chevron-right pl-1"></i></a>
                                <!-- Card content -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h4 class="card-title">{{ $widget->title }}</h4>
                                    <hr>
                                    <!-- Text -->
                                    <p class="card-text mb-2">
                                        {{ $widget->description }}
                                    </p>

                                    <a href="{{ route('widget-view', ['widget' => $widget]) }}"
                                        class="btn blue-gradient btn-rounded waves-effect waves-light"><i
                                            class="fas fa-clone left"></i>
                                        View Code
                                    </a>

                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->

                        </section>
                        <!-- Section: Live preview -->
                    </div>
                @endforeach

            </div>

        </section>
        <!-- Section: Additional cards -->
    </div>
@endsection
