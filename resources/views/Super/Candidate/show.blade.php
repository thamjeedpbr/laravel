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
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row" id="user-profile">
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
                                            <h6 class="text-muted mb-3">OET_or_IELTS_Score: {{ $candidate->OET_or_IELTS_Score }}</h6>
                                            <h6 class="text-muted mb-3">CGFNS_status: {{ $candidate->CGFNS_status }}</h6>
                                            <h6 class="text-muted mb-3">New_Zealand_nursing_council: {{ $candidate->New_Zealand_nursing_council }}</h6>
                                            <h6 class="text-muted mb-3">preferred_Campus: {{ $candidate->preferred_Campus }}</h6>
                                            <h6 class="text-muted mb-3">Preferred_intake: {{ $candidate->Preferred_intake }}</h6>
                                            <h6 class="text-muted mb-3">refereal_method: {{ $candidate->refereal_method }}</h6>
                                            <h6 class="text-muted mb-3">Friends_Family_NZ_status: {{ $candidate->Friends_Family_NZ_status }}</h6>
                                            <h6 class="text-muted mb-3">Friends_Family_NZ: {{ $candidate->Friends_Family_NZ }}</h6>
                                            <h6 class="text-muted mb-3">email: {{ $candidate->email }}</h6>
                                            <h6 class="text-muted mb-3">phone: {{ $candidate->phone }}</h6>
                                            <h6 class="text-muted mb-3">street_address: {{ $candidate->street_address }}</h6>
                                            <h6 class="text-muted mb-3">address_line: {{ $candidate->address_line }}</h6>
                                            <h6 class="text-muted mb-3">address_city: {{ $candidate->address_city }}</h6>
                                            <h6 class="text-muted mb-3">address_state: {{ $candidate->address_state }}</h6>
                                            <h6 class="text-muted mb-3">address_country: {{ $candidate->address_country }}</h6>
                                            <h6 class="text-muted mb-3">address_zip: {{ $candidate->address_zip }}</h6>
                                            <h6 class="text-muted mb-3">working: {{ $candidate->working }}</h6>
                                            <h6 class="text-muted mb-3">working_address_india: {{ $candidate->working_address_india }}</h6>
                                            <h6 class="text-muted mb-3">Cover_letter: {{ $candidate->Cover_letter }}</h6>
                                        </div>
                                    </div>
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
                                            <div class="col-md">
                                                <div class="media-heading">
                                                    <h5 class="text-uppercase"><strong>Candidate Datas</strong></h5>
                                                </div>
                                                <div class="table-responsive ">
                                                    <table class="table row table-bcandidateless">
                                                        {{-- <tbody class="col-lg-12 col-xl-12 p-0">
                                                            @foreach ($issues as $issue)
                                                                <tr>
                                                                    <td><strong>{{ $issue->name }}</strong>({{ $issue->quality }})
                                                                        @isset($issue->amount)
                                                                            {{ $issue->amount }} AED
                                                                        @endisset()
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            @foreach ($pricings as $pricing)
                                                                <tr>
                                                                    <td><strong>{{ $pricing->name }}</strong>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            @isset($candidate->issue_name)
                                                                @if ($candidate->issue_name != '' && $candidate->issue_name != null)
                                                                    <tr>
                                                                        <td><strong>{{ $candidate->issue_name }}</strong>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endisset

                                                        </tbody> --}}
                                                        {{-- <tbody class="col-lg-12 col-xl-6 p-0">

                                                            <tr>
                                                                <td><strong>Payment Status :</strong>
                                                                    @if ($candidate->payment_status)
                                                                        Paid
                                                                    @else
                                                                        Not paid
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            @if ($candidate->sheduled)
                                                                <tr>
                                                                    <td><strong>Sheduled at :</strong>
                                                                        {{ $candidate->sheduled_at }}</td>
                                                                </tr>
                                                            @endif
                                                        </tbody> --}}
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
                @endif

            </div><!-- COL-END -->
        </div>
        <!-- CONTAINER CLOSED -->
    @endsection
    @section('script')
    @endsection
