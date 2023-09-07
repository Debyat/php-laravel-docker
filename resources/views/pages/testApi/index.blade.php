@extends('layout.index')
@section('title', 'Test API')

@section('content')
    <div class="container-fluid">
        <!-- Section: Intro -->
        <section class="mt-md-4 pt-md-2 mb-5 pb-4">
            <div class="section card mb-5 p-4">
                <div class="row" style="align-items:center">
                    <div class="col-md-2">
                        <select class="mdb-select colorful-select dropdown-primary md-form">
                            <option value="" disabled selected>METHOD</option>
                            <option value="1">POST</option>
                            <option value="2">GET</option>
                            <option value="3">PUT</option>
                            <option value="3">DELETE</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Url">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn blue-gradient">Send</button>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12">

                        <ul class="nav md-pills nav-justified pills-deep-orange">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#parameter" role="tab">Parameter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#authorization" role="tab">Authorization</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#header" role="tab">Header</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#body" role="tab">Body</a>
                            </li>
                        </ul>

                        <!-- Tab panels -->
                        <div class="tab-content">
                            <!-- Panel 1 -->
                            <div class="tab-pane fade in show active" id="parameter" role="tabpanel">
                                <div id="parameter-content">
                                    <div class="row" style="align-items:center">
                                        <div class="col-md-5">
                                            <div class="md-form md-outline">
                                                <input type="text" class="form-control parameter-key">
                                                <label for="f2" class="">Key</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="md-form md-outline">
                                                <input type="text" class="form-control parameter-value">
                                                <label for="f2" class="">Value</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn peach-gradient remove-parameter"><i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm blue-gradient add-param">Add Parameter</button>
                            </div>
                            <!-- Panel 1 -->

                            <!-- Panel 2 -->
                            <div class="tab-pane fade" id="authorization" role="tabpanel">
                                <div class="row" style="align-items:center">
                                    <div class="col-md-6">
                                        <select
                                            class="mdb-select colorful-select dropdown-primary md-formv authorization-type">
                                            <option value="" disabled selected>Authorization Type</option>
                                            <option value="auth-token">Authorization Token</option>
                                            <option value="bearer">Bearer Token</option>
                                            <option value="basic">Basic Auth</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 auth-input-key">
                                        <div class="md-form md-outline">
                                            <input type="text" id="f2" class="form-control">
                                            <label for="f2" class="">Authorization Key</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel 2 -->

                            <!-- Panel 3 -->
                            <div class="tab-pane fade" id="header" role="tabpanel">
                                <div id="header-content">
                                    <div class="row" style="align-items:center">
                                        <div class="col-md-5">
                                            <div class="md-form md-outline">
                                                <input type="text" class="form-control header-key">
                                                <label for="f2" class="">Key</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="md-form md-outline">
                                                <input type="text" class="form-control header-value">
                                                <label for="f2" class="">Value</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn peach-gradient remove-header"><i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-sm blue-gradient add-header">Add Header</button>
                            </div>
                            <!-- Panel 3 -->

                            <!-- Panel 4 -->
                            <div class="tab-pane fade" id="body" role="tabpanel">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="md-form mb-0 mt-2">
                                            <textarea type="text" id="form7" class="md-textarea form-control" rows="10" name="html"></textarea>
                                            <label class="form-check-label" for="form7">JSON</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel 4 -->
                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->
            </div>

            <!-- Results -->
        </section>
    </div>
@endsection
@push('js')
    <script>
        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').materialSelect();

            $('.add-param').on('click', () => {
                var html = `<div class="row" style="align-items:center">
                            <div class="col-md-5">
                                <div class="md-form md-outline">
                                    <input type="text" class="form-control parameter-key">
                                    <label for="f2" class="">Key</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="md-form md-outline">
                                    <input type="text" class="form-control parameter-value">
                                    <label for="f2" class="">Value</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn peach-gradient remove-parameter"><i class="fas fa-trash"></i> </button>
                            </div>
                        </div>`;

                $('#parameter-content').append(html)
            });

            $('.add-header').on('click', () => {
                var html = `<div class="row" style="align-items:center">
                            <div class="col-md-5">
                                <div class="md-form md-outline">
                                    <input type="text" class="form-control header-key">
                                    <label for="f2" class="">Key</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="md-form md-outline">
                                    <input type="text" class="form-control header-value">
                                    <label for="f2" class="">Value</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn peach-gradient remove-header"><i class="fas fa-trash"></i> </button>
                            </div>
                        </div>`;

                $('#header-content').append(html)
            });

            $(document).on('click', '.remove-parameter', (e) => {
                $(e.target).parent().parent().remove()
            });

            $(document).on('click', '.remove-header', (e) => {
                $(e.target).parent().parent().remove()
            });

            $(document).on('change', '.authorization-type', (e) => {
                var type = $(e.target).val();
                var col = $(e.target).parents('#authorization').children().children(
                    '.col-md-6.auth-input-key');

                var html = `<div class="md-form md-outline">
                                <input type="text" class="form-control">
                                <label for="f2" class="">Authorization Key</label>
                            </div>`;

                col.children().remove();

                if (type == 'basic') {
                    html = `<div class="md-form md-outline">
                                <input type="text" class="form-control">
                                <label for="f2" class="">Username</label>
                            </div>
                            <div class="md-form md-outline">
                                <input type="password" class="form-control">
                                <label for="f2" class="">Password</label>
                            </div>`;
                }

                col.append(html);
            })

        });
    </script>
@endpush
