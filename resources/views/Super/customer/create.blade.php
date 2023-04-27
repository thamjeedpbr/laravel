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
            <h4 class="page-title">Add Customer</h4>

        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-md">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Add Customer</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('customer.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden ">
                                        <label class="required">Name</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fullname"
                                                placeholder="Customer name" value="{{ old('fullname') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label class="required">Mobile</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="mobile" placeholder=""
                                                value="{{ old('mobile') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Phone</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder=""
                                                value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label class="required">Email</label>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder=""
                                                value="{{ old('email') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label class="required">Address</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address" placeholder=""
                                                value="{{ old('address') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Address Google link</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address_2"
                                                placeholder="google link" value="{{ old('address_2') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>City</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="city" placeholder=""
                                                value="{{ old('city') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>State</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="state" placeholder=""
                                                value="{{ old('state') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Zip</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="zip" placeholder=""
                                                value="{{ old('zip') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reference</label>
                                        <select class="form-control select2-show-search" name="referred_by"
                                            data-placeholder="Select Reference">
                                            <option label="Select Reference"></option>
                                            @foreach ($references as $reference)
                                                <option value="{{ $reference }}"> {{ $reference }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
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
