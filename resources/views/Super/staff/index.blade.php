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
            <h4 class="page-title">Staffs</h4>
        </div>
        <!-- PAGE-HEADER END -->

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('staff.create') }}" class="btn btn-primary">Update staff</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="databl" class="table table-bordered key-buttons text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">Name</th>
                                        <th class="border-bottom-0">Staff Id</th>
                                        <th class="border-bottom-0">Email</th>
                                        <th class="border-bottom-0">Role</th>
                                        <th class="border-bottom-0">Status</th>
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($staffs as $staff)
                                        <tr>
                                            <td>{{ $staff->full_name }}</td>
                                            <td>{{ $staff->staff_id }}</td>
                                            <td>{{ $staff->email }}</td>
                                            <td>{{ $staff->group }}</td>
                                            <td>
                                                @if ($staff->status)
                                                    <a href="{{ route('staff.statuschange', $staff->id) }}">Active</a>
                                                @else
                                                    <a href="{{ route('staff.statuschange', $staff->id) }}">Inactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('staff.edit', $staff->id) }}"
                                                    class="btn btn-primary btn-gray-medium"
                                                    style="text-decoration:none; display: inline-block; width: 30px;">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </a>

                                                <a href="{{ route('staff.delete', $staff->id) }}"
                                                    class="btn btn-danger btn-gray-medium"
                                                    onclick="return confirm(`Are you sure?`)"
                                                    style="text-decoration:none; display: inline-block; width: 30px;">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
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
