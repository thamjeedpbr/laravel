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
            <h4 class="page-title">Candidate Details</h4>
            <button id="pdfButton" class="btn btn-primary"><b>PDF</b></button>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row" id="generatePDF">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="wideget-user">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="wideget-user-desc d-flex">
                                        <div class="user-wrap">
                                            <h4>#Candidate Id : {{ $candidate->id }}</h4>
                                            <h6 class="text-muted mb-3">Name:{{ $candidate->fullname }}</h6>
                                            <h6 class="text-muted mb-3">Contact number: {{ $candidate->phone }}</h6>
                                            <h6 class="text-muted mb-3">Registered Date: {{ $candidate->created_at }}</h6>
                                            <h6 class="text-muted mb-3">Status: {{ $candidate->status_text }}</h6>
                                            <h6 class="text-muted mb-3">username: {{ $candidate->username }}</h6>
                                            <h6 class="text-muted mb-3">qualification: {{ $candidate->qualification }}</h6>
                                            <h6 class="text-muted mb-3">experience: {{ $candidate->experience }}</h6>
                                            <h6 class="text-muted mb-3">OET_or_IELTS_Score:
                                                {{ $candidate->OET_or_IELTS_Score }}</h6>
                                            <h6 class="text-muted mb-3">CGFNS_status: {{ $candidate->CGFNS_status }}</h6>
                                            <h6 class="text-muted mb-3">New_Zealand_nursing_council:
                                                {{ $candidate->New_Zealand_nursing_council }}</h6>
                                            <h6 class="text-muted mb-3">preferred_Campus:
                                                {{ $candidate->preferred_Campus }}</h6>
                                            <h6 class="text-muted mb-3">Preferred_intake:
                                                {{ $candidate->Preferred_intake }}</h6>
                                            <h6 class="text-muted mb-3">refereal_method: {{ $candidate->refereal_method }}
                                            </h6>
                                            <h6 class="text-muted mb-3">Friends_Family_NZ_status:
                                                {{ $candidate->Friends_Family_NZ_status }}</h6>
                                            <h6 class="text-muted mb-3">Friends_Family_NZ:
                                                {{ $candidate->Friends_Family_NZ }}</h6>
                                            <h6 class="text-muted mb-3">email: {{ $candidate->email }}</h6>
                                            <h6 class="text-muted mb-3">phone: {{ $candidate->phone }}</h6>
                                            <h6 class="text-muted mb-3">street_address: {{ $candidate->street_address }}
                                            </h6>
                                            <h6 class="text-muted mb-3">address_line: {{ $candidate->address_line }}</h6>
                                            <h6 class="text-muted mb-3">address_city: {{ $candidate->address_city }}</h6>
                                            <h6 class="text-muted mb-3">address_state: {{ $candidate->address_state }}</h6>
                                            <h6 class="text-muted mb-3">address_country: {{ $candidate->address_country }}
                                            </h6>
                                            <h6 class="text-muted mb-3">address_zip: {{ $candidate->address_zip }}</h6>
                                            <h6 class="text-muted mb-3">working: {{ $candidate->working }}</h6>
                                            <h6 class="text-muted mb-3">working_address_india:
                                                {{ $candidate->working_address_india }}</h6>
                                            <h6 class="text-muted mb-3">Cover_letter: {{ $candidate->Cover_letter }}</h6>
                                            @isset($candidate->immigration_advise)
                                                <h6 class="mb-3">Immigration Advise:
                                                    {{ $candidate->immigration_advise }}</h6>
                                            @endisset
                                            @isset($candidate->airport_accommodation)
                                                <h6 class="mb-3">Airport Accommodation:
                                                    {{ $candidate->airport_accommodation }}</h6>
                                            @endisset
                                            @isset($candidate->feedback)
                                                <h6 class="mb-3">Feedback:
                                                    {{ $candidate->feedback }}</h6>
                                            @endisset
                                        </div>
                                    </div>
                                    @if ($candidate->status == 0)
                                        <div class="wideget-user-desc d-flex">
                                            <a href="{{ route('candidate.status.approve', $candidate->id) }}">
                                                <button class="btn btn-success btn-gray-medium"
                                                    onclick="return confirm(`Are you sure?`)"
                                                    style="text-decoration:none; display: inline-block; width: 30px;">
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <a href="{{ route('candidate.status.reject', $candidate->id) }}">
                                                <button class="btn btn-warning btn-gray-medium"
                                                    onclick="return confirm(`Are you sure?`)"
                                                    style="text-decoration:none; display: inline-block; width: 30px;">
                                                    <i class="fa fa-close" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <a href="{{ route('candidate.delete', $candidate->id) }}">
                                                <button class="btn btn-danger btn-gray-medium"
                                                    onclick="return confirm(`Are you sure?`)"
                                                    style="text-decoration:none; display: inline-block; width: 30px;">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($candidate->status == 1)
                    <div class="card">
                        <div class="card-body">
                            <div class="border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tab-51">
                                        <div id="profile-log-switch">
                                            <div class="table-responsive ">
                                                <div class="table-responsive ">
                                                    <div class="col-md">
                                                        <div class="media-heading">
                                                            <h5 class="text-uppercase"><strong>Your Uploaded
                                                                    Documents</strong>
                                                            </h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table id="datable-1"
                                                                    class="table table-bordered key-buttons text-nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="border-bottom-0">Name</th>
                                                                            <th class="border-bottom-0">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($CandidateDocs as $doc)
                                                                            <tr>
                                                                                <td>{{ $doc->name }}</td>
                                                                                <td>
                                                                                    <a href="{{ $doc->url }}"
                                                                                        target="_blank">View </a>
                                                                                    <a href="{{ route('candidate.docs.delete', $doc->id) }}"
                                                                                        onclick="return confirm(`Are you sure?`)">
                                                                                        DELETE</a>
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
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-html2canvas-ignore="true">
                        <div class="card-body">
                            <div class="border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tab-51">
                                        <div id="profile-log-switch">
                                            <div class="table-responsive ">
                                                <div class="col-md">
                                                    <div class="media-heading">
                                                        <h5 class="text-uppercase"><strong>Update Documents Status</strong>
                                                        </h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <form action="{{ route('candidate.docs.status') }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('POST')
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group overflow-hidden">
                                                                        <div class="form-group">
                                                                            <label for="vehicle1">I have Approved all
                                                                                documents</label>
                                                                            <input type="checkbox" id="vehicle1"
                                                                                name="docs_status" value="1"
                                                                                @if ($candidate->docs_status == 1) checked @endif>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                name="docs_comments"
                                                                                value="{{ $candidate->docs_comments }}"
                                                                                placeholder="Comments (if any)">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="candidate_id"
                                                                value="{{ $candidate->id }}" hidden>
                                                            <input class="btn btn-primary" type="submit" value="Update"
                                                                name="Upload">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div><!-- COL-END -->
        </div>
        <!-- CONTAINER CLOSED -->
    @endsection
    @section('script')
    <script>
        var button = document.getElementById("pdfButton");
        var makepdf = document.getElementById("generatePDF");
        button.addEventListener("click", function () {
        window.print();

        //    var mywindow = window.print();
        // //    mywindow.document.write(makepdf.innerHTML);
        //    mywindow.document.close();
        //    mywindow.focus();
        //    mywindow.print();
        //    return true;
        });
     </script>
    @endsection
