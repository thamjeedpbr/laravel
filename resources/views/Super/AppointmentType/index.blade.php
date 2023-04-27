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
            <h4 class="page-title">Appointment Type</h4>
        </div>
        <!-- PAGE-HEADER END -->

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('Appointmenttype.api') }}" class="btn btn-primary">Update AppointmentType (RS)</a>
                        <a href="{{ route('AppointmentType.create') }}" class="btn btn-primary">Create AppointmentType</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datable-1" class="table table-bordered key-buttons text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">Name</th>
                                        <th class="border-bottom-0">Appointment Type Id</th>
                                        <th class="border-bottom-0">Account id</th>
                                        <th class="border-bottom-0">Status</th>
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($AppointmentTypes as $AppointmentType)
                                    <tr>
                                        <td>{{ $AppointmentType->name }}</td>
                                        <td>{{ $AppointmentType->appointment_type_id }}</td>
                                        <td>{{ $AppointmentType->account_id }}</td>
                                        <td>@if($AppointmentType->status)
                                        <a href="{{ route('AppointmentType.statuschange', $AppointmentType->id) }}">Active</a>
                                        @else
                                        <a href="{{ route('AppointmentType.statuschange', $AppointmentType->id) }}">Inactive</a>
                                        @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('AppointmentType.edit', $AppointmentType->id) }}">Edit</a>
                                            <a href="{{ route('AppointmentType.delete', $AppointmentType->id) }}" onclick="return confirm(`Are you sure?`)">DELETE</a>
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
    <script src="{{ asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/datatable.js') }}"></script>


@endsection
