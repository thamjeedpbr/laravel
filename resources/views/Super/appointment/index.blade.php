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
            <h4 class="page-title">Appointments</h4>
        </div>
        <!-- PAGE-HEADER END -->

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('appointment.new') }}" class="btn btn-primary">Create Appointment</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="appointmenttable" class="table table-bordered key-buttons text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">Created At</th>
                                        <th class="border-bottom-0">Appointment ID</th>
                                        <th class="border-bottom-0">Customer Name</th>
                                        <th class="border-bottom-0">Staff Name</th>
                                        <th class="border-bottom-0">Phone</th>
                                        <th class="border-bottom-0">Type</th>
                                        <th class="border-bottom-0">Emirate</th>
                                        <th class="border-bottom-0">Summary</th>
                                        <th class="border-bottom-0">Start At</th>
                                        <th class="border-bottom-0">End At</th>
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
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
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/datatable.js') }}"></script>
    <script>

        $(document).ready(function() {
            datatable();
        });

        function datatable() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });

            $('#appointmenttable').DataTable({
                // "dom": '<"top"f>t<"bottom"lp><"clear">',
                "bDestroy": true,
                orderable: false,
                processing: true,
                serverSide: true,
                searching: true,
                responsive: true,

                lengthMenu: [
                    [10, 25, 50, 100, 500, 1000, 2000, -1],
                    [10, 25, 50, 100, 500, 1000, 2000, 'All']
                ],
                ajax: {
                    url: '{{ route('appointment.alldata') }}',
                    method: 'POST',

                },
                columns: [
                    {
                        data: 'created_at',
                        name: 'created_at',
                    },
                    {
                        data: 'appointment_id',
                        name: 'appointment_id',
                    },
                    {
                        data: 'customer',
                        name: 'customer',
                    },
                    {
                        data: 'staff',
                        name: 'staff',
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                    },
                    {
                        data: 'type',
                        name: 'type',
                    },
                    {
                        data: 'emirate',
                        name: 'emirate',
                    },
                    {
                        data: 'summary',
                        name: 'summary',
                    },
                    {
                        data: 'start_at',
                        name: 'start_at',
                    },
                    {
                        data: 'end_at',
                        name: 'end_at',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                order: [
                    [0, 'desc']
                ]
            });
        }
    </script>

@endsection
