@extends('Super.layouts.master')
@section('style')
    <!-- SELECT2 CSS -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <!-- CONTAINER -->
    <div class="app-content">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h4 class="page-title">Forms</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-md">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Select2</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="mb-5">Select2 Elements</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group overflow-hidden">
                                    <label>Minimal</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="input" placeholder="Enter Your Name" value="Enter Your Name">
                                    </div>
                                </div>
                     
                            </div>
                            <div class="col-md-6">
                                <div class="form-group overflow-hidden">
                                    <label>Multiple</label>
                                    <select class="form-control select2 w-100" multiple="multiple"
                                        data-placeholder="Select a State">
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                                <div class="form-group overflow-hidden">
                                    <label>Disabled</label>
                                    <select class="form-control select2 w-100">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option disabled="disabled">California (disabled)</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- COL END -->
        </div>
        <!-- ROW CLOSED -->


    </div>
    <!-- CONTAINER CLOSED -->
@endsection
@section('script')
    <!-- SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script src="{{ asset('assets/js/form-elements.js') }}"></script>
@endsection
