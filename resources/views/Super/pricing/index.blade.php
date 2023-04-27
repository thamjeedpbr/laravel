@extends('Super.layouts.master')
@section('style')
    <!-- Data table css -->
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}">
    <link href="{{ asset('assets/plugins/datatable/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <!-- CONTAINER -->
    <div class="app-content">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h4 class="page-title">Pricing</h4>
        </div>
        <!-- PAGE-HEADER END -->

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('pricing.create') }}" class="btn btn-primary">Add New</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datable-1" class="table table-bordered key-buttons text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">Name</th>
                                        <th class="border-bottom-0">Brand</th>
                                        <th class="border-bottom-0">Type</th>
                                        <th class="border-bottom-0">Device</th>
                                        <th class="border-bottom-0">Issue</th>
                                        <th class="border-bottom-0">Warranty</th>
                                        <th class="border-bottom-0">Quality</th>
                                        <th class="border-bottom-0">Amount</th>
                                        <th class="border-bottom-0">Status</th>
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pricings as $pricing)
                                    <tr>
                                        <td>{{ $pricing->name }}</td>
                                        <td>{{ $pricing->brand }}</td>
                                        <td>{{ $pricing->devicetype }}</td>
                                        <td>{{ $pricing->device }}</td>
                                        <td>{{ $pricing->issue }}</td>
                                        <td>{{ $pricing->warranty }} {{ $pricing->warranty_type }}</td>
                                        <td>{{ $pricing->quality }}</td>
                                        <td>{{ $pricing->amount }}</td>
                                        <td>@if($pricing->status)
                                        <a href="{{ route('pricing.statuschange', $pricing->id) }}">Active</a>
                                        @else
                                        <a href="{{ route('pricing.statuschange', $pricing->id) }}">Inactive</a>
                                        @endif
                                        </td>
                                        <td>
                                            <a  class="btn btn-primary btn-gray-medium" href="{{ route('pricing.edit', $pricing->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <a  class="btn btn-danger btn-gray-medium" href="{{ route('pricing.delete', $pricing->id) }}" onclick="return confirm(`Are you sure?`)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection
@section('script')
    <!-- DATA TABLE -->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/datatable.js') }}"></script>


@endsection
