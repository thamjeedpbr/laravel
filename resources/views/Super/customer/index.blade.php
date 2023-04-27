@extends('Super.layouts.master')
@section('style')
    <!-- Data table css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}">

    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <!-- CONTAINER -->
    <div class="app-content">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h4 class="page-title">Customer</h4>
        </div>
        <!-- PAGE-HEADER END -->

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('customer.create') }}" class="btn btn-primary">Add New</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="customertable" class="table table-bordered key-buttons text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">Customer ID</th>
                                        <th class="border-bottom-0">Name</th>
                                        <th class="border-bottom-0">Email</th>
                                        <th class="border-bottom-0">Phone</th>
                                        <th class="border-bottom-0">Mobile</th>
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

            $('#customertable').DataTable({
                // "dom": '<"top"f>t<"bottom"lp><"clear">',
                "bDestroy": true,
                orderable: false,
                processing: true,
                serverSide: true,
                searching: true,
                responsive: true,
                minifiedAjax :true,
                lengthMenu: [
                    [10, 25, 50, 100, 500, 1000, 2000, -1],
                    [10, 25, 50, 100, 500, 1000, 2000, 'All']
                ],
                ajax: {
                    url: '{{ route('customer.alldata') }}',
                    method: 'POST',

                },
                columns: [
                    {
                        data: 'customer_id',
                        name: 'customer_id',
                        // searchable: false
                    },
                    {
                        data: 'fullname',
                        name: 'fullname',
                        // searchable: false
                    },
                    {
                        data: 'email',
                        name: 'email',
                        // searchable: false
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                        // searchable: false
                    },
                    {
                        data: 'mobile',
                        name: 'mobile',
                        // orderable: false,
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
