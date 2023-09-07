@extends('layout.index')
@section('title', 'Add Widget')

@section('content')
    <section class="mt-md-4 pt-md-2 mb-5 pb-4">
        <!-- Section: Create Page -->
        <section class="my-5">
            <h4 id="" class="font-weight-bold mb-4 dark-grey-text">Add New Widget</h4>
            <!-- Grid row -->
            <form action="{{ route('widgets-store') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-lg-8">

                        <!-- First card -->
                        <div class="card mb-4 post-title-panel">
                            <div class="card-body">
                                <div class="md-form mt-1 mb-0">
                                    <input type="text" id="form1" class="form-control" value="" name="title">
                                    <label class="form-check-label" for="form1" class="">Widget Name</label>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4 post-title-panel">
                            <div class="card-body">
                                <div class="md-form mt-1 mb-0">
                                    <input type="text" id="form1" class="form-control" value=""
                                        name="description">
                                    <label class="form-check-label" for="form1" class="">Description</label>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4 post-title-panel">
                            <div class="card-body">
                                <div class="file-field">
                                    <div class="btn btn-primary btn-sm float-left">
                                        <span>Upload Image</span>
                                        <input type="file" name="image" class="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- First card -->

                        <!-- Second card -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="md-form mb-0 mt-2">
                                    <textarea type="text" id="form7" class="md-textarea form-control" rows="10" name="html"></textarea>
                                    <label class="form-check-label" for="form7">Custom HTML Code</label>
                                </div>
                            </div>
                        </div>
                        <!-- Second card -->

                        <!-- Third Card -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="md-form mb-0 mt-2">
                                    <textarea type="text" id="form7" class="md-textarea form-control" rows="10" name="css"></textarea>
                                    <label class="form-check-label" for="form7">Custom CSS Code</label>
                                </div>
                            </div>
                        </div>
                        <!-- Third Card -->

                        <!-- Third Card -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="md-form mb-0 mt-2">
                                    <textarea type="text" id="form7" class="md-textarea form-control" rows="10" name="javascript"></textarea>
                                    <label class="form-check-label" for="form7">Custom Javascript/JQuery Code</label>
                                </div>
                            </div>
                        </div>
                        <!-- Third Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4">

                        <!-- Card -->
                        <div class="card card-cascade narrower mb-5">

                            <!-- Card image -->
                            <div class="view view-cascade gradient-card-header blue-gradient">
                                <h4 class="font-weight-500 mb-0">Publish</h4>
                            </div>
                            <!-- Card image -->

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">

                                <p><i class="fas fa-flag mr-1" aria-hidden="true"></i> Status: <strong>Draft</strong></p>
                                <p><i class="far fa-eye mr-1" aria-hidden="true"></i> Visibility <strong>Public</strong></p>
                                <p><i class="fas fa-archive mr-1 mr-1" aria-hidden="true"></i> Revisions: <strong>2</strong>
                                </p>
                                <p><i class="far fa-calendar-alt mr-1" aria-hidden="true"></i> Publish:
                                    <strong>Immediately</strong>
                                </p>

                                <div class="text-right">
                                    <a href="{{ route('widgets') }}" class="btn btn-flat waves-effect">Discard</a>
                                    <button class="btn blue-gradient">Publish</button>
                                </div>

                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->


                    </div>
                    <!-- Grid column -->
                </div>
            </form>
            <!-- Grid row -->

        </section>
        <!-- Section: Create Page -->
    </section>

@endsection
@push('js')
    <script>
        $('.image').on('change', (e) => {
            console.log(e)
        })
    </script>
@endpush
