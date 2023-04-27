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
            <h4 class="page-title">Update Brand</h4>

        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-md">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Update Brand</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('device.update',$device->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group overflow-hidden">
                                    <label>Name</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter Device Name" value="{{$device->name }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Brand</label>
                                    <select class="form-control" name="brand_id" data-placeholder="Select Brand">
                                    <option label="Select Brand"></option>
                                         @foreach($brands as $brand)
									        <option value="{{$brand->id}}" @if($device->brand_id == $brand->id ) selected @endif> {{$brand->name}}</option>
                                        @endforeach
									</select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Device Type</label>
                                    <select class="form-control" name="devicetype_id" data-placeholder="Select devicetype">
                                    <option label="Select Device Type"></option>
                                         @foreach($devicetypes as $devicetype)
									        <option value="{{$devicetype->id}}" @if($device->devicetype_id == $devicetype->id ) selected @endif> {{$devicetype->name}}</option>
                                        @endforeach
									</select>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>

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
