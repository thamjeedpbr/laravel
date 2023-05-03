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
            <h4 class="page-title">Rejected Enquiry</h4>
        </div>
        <!-- PAGE-HEADER END -->

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="enquirytable" class="table table-bordered key-buttons text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">ID</th>
                                        <th class="border-bottom-0">fullname</th>
                                        <th class="border-bottom-0">phone</th>
                                        <th class="border-bottom-0">email</th>
                                        <th class="border-bottom-0">Registered at</th>
                                        <th class="border-bottom-0">qualification</th>
                                        <th class="border-bottom-0">experience</th>
                                        <th class="border-bottom-0">OET_or_IELTS_Score</th>
                                        <th class="border-bottom-0">CGFNS_status</th>
                                        <th class="border-bottom-0">New_Zealand_nursing_council</th>
                                        <th class="border-bottom-0">preferred_Campus</th>
                                        <th class="border-bottom-0">Preferred_intake</th>
                                        <th class="border-bottom-0">refereal_method</th>
                                        <th class="border-bottom-0">Friends_Family_NZ_status</th>
                                        <th class="border-bottom-0">Friends_Family_NZ</th>
                                        <th class="border-bottom-0">Cover_letter</th>
                                        <th class="border-bottom-0">street_address</th>
                                        <th class="border-bottom-0">address_line</th>
                                        <th class="border-bottom-0">address_city</th>
                                        <th class="border-bottom-0">address_state</th>
                                        <th class="border-bottom-0">address_country</th>
                                        <th class="border-bottom-0">address_zip</th>
                                        <th class="border-bottom-0">working</th>
                                        <th class="border-bottom-0">working_address_india</th>
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

            $('#enquirytable').DataTable({
                "bDestroy": true,
                orderable: false,
                processing: true,
                serverSide: true,
                searching: true,
                scrollX: true,
                bScrollCollapse: true,
                responsive: true,
                lengthMenu: [
                    [10, 25, 50, 100, 500, 1000, 2000, -1],
                    [10, 25, 50, 100, 500, 1000, 2000, 'All']
                ],
                ajax: {
                    url: '{{ route('candidate.rejected') }}',
                    method: 'POST',

                },
                columns: [{
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'fullname',
                        name: 'fullname',
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                    },
                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                    },
                    {
                        data: 'qualification',
                        name: 'qualification',
                    },
                    {
                        data: 'experience',
                        name: 'experience',
                    },
                    {
                        data: 'OET_or_IELTS_Score',
                        name: 'OET_or_IELTS_Score',
                    },
                    {
                        data: 'CGFNS_status',
                        name: 'CGFNS_status',
                    },
                    {
                        data: 'New_Zealand_nursing_council',
                        name: 'New_Zealand_nursing_council',
                    },
                    {
                        data: 'preferred_Campus',
                        name: 'preferred_Campus',
                    },
                    {
                        data: 'Preferred_intake',
                        name: 'Preferred_intake',
                    },
                    {
                        data: 'refereal_method',
                        name: 'refereal_method',
                    },
                    {
                        data: 'Friends_Family_NZ_status',
                        name: 'Friends_Family_NZ_status',
                    }, {
                        data: 'Friends_Family_NZ',
                        name: 'Friends_Family_NZ',
                    }, {
                        data: 'Cover_letter',
                        name: 'Cover_letter',
                    }, {
                        data: 'street_address',
                        name: 'street_address',
                    }, {
                        data: 'address_line',
                        name: 'address_line',
                    }, {
                        data: 'address_city',
                        name: 'address_city',
                    }, {
                        data: 'address_state',
                        name: 'address_state',
                    }, {
                        data: 'address_country',
                        name: 'address_country',
                    }, {
                        data: 'address_zip',
                        name: 'address_zip',
                    }, {
                        data: 'working',
                        name: 'working',
                    }, {
                        data: 'working_address_india',
                        name: 'working_address_india',
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
