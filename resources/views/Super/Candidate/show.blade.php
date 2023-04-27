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
            <h4 class="page-title">Enquiry Details</h4>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row" id="user-profile">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="wideget-user">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="wideget-user-desc d-flex">
                                        <div class="user-wrap">
                                            <h4>#EnquiryId-{{ $enquiry->id }}</h4>
                                            <h6 class="text-muted mb-3">enquiryed By:
                                                {{ \App\Models\Customer::getName($enquiry->customer_id) }}</h6>
                                            <h6 class="text-muted mb-3">Contact number:
                                                {{ \App\Models\Customer::getPhone($enquiry->customer_id) }}</h6>
                                            <h6 class="text-muted mb-3">enquiry Date: {{ $enquiry->created_at }}</h6>
                                            <h6 class="text-muted mb-3">enquiry Status:
                                                {{ $enquiry->label }}</h6>

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
                                                    <h5 class="text-uppercase"><strong>enquiry Information</strong></h5>
                                                </div>
                                                <div class="table-responsive ">
                                                    <table class="table row table-benquiryless">
                                                        <tbody class="col-lg-12 col-xl-12 p-0">
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
                                                            @isset($enquiry->issue_name)
                                                                @if ($enquiry->issue_name != '' && $enquiry->issue_name != null)
                                                                    <tr>
                                                                        <td><strong>{{ $enquiry->issue_name }}</strong>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endisset

                                                        </tbody>
                                                        {{-- <tbody class="col-lg-12 col-xl-6 p-0">

                                                            <tr>
                                                                <td><strong>Payment Status :</strong>
                                                                    @if ($enquiry->payment_status)
                                                                        Paid
                                                                    @else
                                                                        Not paid
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            @if ($enquiry->sheduled)
                                                                <tr>
                                                                    <td><strong>Sheduled at :</strong>
                                                                        {{ $enquiry->sheduled_at }}</td>
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
            </div><!-- COL-END -->
        </div>
        <!-- CONTAINER CLOSED -->
    @endsection
    @section('script')
    @endsection
