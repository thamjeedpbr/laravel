@extends('Super.layouts.master')
@section('style')
    <!-- SELECT2 CSS -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <!-- CONTAINER -->
    <div class="app-content">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h4 class="page-title">Update Enquiry Label</h4>

        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-md">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Update Enquiry Label</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('EnquiryLabel.update', $EnquiryLabel->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Name</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter EnquiryLabel Name" value="{{ $EnquiryLabel->name }}"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Type</label>
                                        <select class="form-control select2-show-search" name="type"
                                            data-placeholder="Select Type" required>
                                            <option label="Select Type"></option>
                                            <option value="win" @if ($EnquiryLabel->type == 'win') selected @endif> Win
                                            </option>
                                            <option value="loss" @if ($EnquiryLabel->type == 'loss') selected @endif> Loss
                                            </option>
                                            <option value="pending" @if ($EnquiryLabel->type == 'pending') selected @endif>
                                                Pending</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>

                    </div>
                </div>
            </div><!-- COL END -->
        </div>
        <!-- ROW CLOSED -->


    </div>
    <!-- CONTAINER CLOSED -->
@endsection
@section('script')
    <!-- SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script src="{{ asset('assets/js/form-elements.js') }}"></script>
@endsection
