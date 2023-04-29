@extends('Candidate.layouts.master')
@section('style')
    <!-- Data table css -->
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}">
    <link href="{{ asset('assets/plugins/datatable/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <!-- CONTAINER -->
    <div class="app-content" style="margin-left: auto;">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h4 class="page-title">Candidate Details</h4>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row" id="user-profile">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if ($candidate->docs_status == 1)
                            <div class="alert alert-success">
                                {{ $candidate->docs_comments }}
                            </div>
                        @elseif($candidate->docs_status != null && $candidate->docs_status == 0)
                            <div class="alert alert-danger">
                                {{ $candidate->docs_comments }}
                            </div>
                        @endif
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="border-0">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tab-51">
                                    <div id="profile-log-switch">
                                        <div class="table-responsive ">
                                            <div class="col-md">
                                                <div class="media-heading">
                                                    <h5 class="text-uppercase"><strong>Upload Your Documents Here</strong>
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <form action="{{ route('candidate.upload.docs') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="alert alert-warning">
                                                                    Condition- Please make lantern abroad aware if you are selecting another imigration adviser or an agent.
                                                                </div>
                                                                <div class="alert alert-warning">
                                                                    Attach occupational health screening completed form as directed in the offer of place
                                                                </div>
                                                                <div class="alert alert-warning">
                                                                    Notify Lantern Abroad when the visa is ready and please send us a copy of your visa approval.
                                                                </div>
                                                                @foreach ($files as $file)
                                                                    <div class="form-group overflow-hidden">
                                                                        <div class="form-group">
                                                                            <h5>{{ $file->name }}</h3>
                                                                                <input type="hidden" name="name[]"
                                                                                    value="{{ $file->value }}" hidden>
                                                                                </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="file" name="docs[]"
                                                                                class="form-control"
                                                                                @if (!count($CandidateDocs)) required @endif>
                                                                        </div>
                                                                        {{-- <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            name="comment[]" placeholder="Comments (if any)">
                                                                    </div> --}}
                                                                    </div>
                                                                @endforeach

                                                                @if ($candidate->docs_status != 1)

                                                                <div class="form-group overflow-hidden">
                                                                    <div class="form-group">
                                                                        <h5>Others</h3>
                                                                            <input type="text" class="form-control"
                                                                                name="name[]" value="Others">
                                                                            </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="file" name="docs[]"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div id="new_chq"></div>

                                                                <div class="form-group overflow-hidden">
                                                                    <input type="button" class="btn btn-success"
                                                                        onclick="add()" Value="Add Others">
                                                                    <input type="button" class="btn btn-danger"
                                                                        onclick="remove()" Value="Remove Others">
                                                                    <input type="hidden" value="1" id="total_chq">
                                                                </div>
                                                                @endif
                                                                @if ($candidate->docs_status == 1)
                                                                    <h5>Immigration advise Yes/No. If yes adviser charges
                                                                        apply</h3>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                name="immigration_advise" value="{{ $candidate->immigration_advise }}"
                                                                                placeholder="Immigration Advise">

                                                                        </div>
                                                                        <h5>Need assistance with airport pick up
                                                                            /Accommodation?</h3>
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    name="airport_accommodation" value="{{ $candidate->airport_accommodation }}"
                                                                                    placeholder="Immigration Advise">

                                                                            </div>
                                                                            <h5>Feedback</h3>
                                                                                <div class="form-group">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="feedback" value="{{ $candidate->feedback }}"
                                                                                        placeholder="Feedback">
                                                                                </div>

                                                                @endif
                                                            </div>

                                                        </div>

                                                        <input type="hidden" name="candidate_id"
                                                            value="{{ $candidate->id }}" hidden>
                                                        <input class="btn btn-primary" type="submit" name="Upload">
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

                @if (count($CandidateDocs))
                    <div class="card">
                        <div class="card-body">
                            <div class="border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tab-51">
                                        <div id="profile-log-switch">

                                            <div class="table-responsive ">
                                                <div class="col-md">
                                                    <div class="media-heading">
                                                        <h5 class="text-uppercase"><strong>Your Uploaded Documents</strong>
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
                                                                                {{-- <a href="{{ route('candidate.docs.delete', $doc->id) }}"
                                                                                    onclick="return confirm(`Are you sure?`)">
                                                                                    DELETE</a> --}}
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
                @endif

            </div><!-- COL-END -->
        </div>
        <!-- CONTAINER CLOSED -->
    @endsection
    @section('script')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            function add() {
                var new_chq_no = parseInt($('#total_chq').val()) + 1;
                alert(new_chq_no);
                //   var new_input="<input type='text' id='new_"+new_chq_no+"'>";
                var new_input = `<div class="form-group overflow-hidden" id='new_` + new_chq_no + `'>
                                                                    <div class="form-group">
                                                                        <h5>Others ` + new_chq_no + `</h3>
                                                                        <input type="text" name="name[]"
                                                                        class="form-control"  value="Others ` +
                    new_chq_no + `">
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="file" name="other_docs[]"
                                                                            class="form-control" multiple>
                                                                    </div>
                                                                </div>`;

                $('#new_chq').append(new_input);
                $('#total_chq').val(new_chq_no)
            }

            function remove() {
                var last_chq_no = $('#total_chq').val();
                if (last_chq_no > 1) {
                    $('#new_' + last_chq_no).remove();
                    $('#total_chq').val(last_chq_no - 1);
                }
            }
        </script>
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
