@extends('Super.layouts.master')
@section('style')
    <!-- FULL CALENDAR CSS -->
    <link href="{{ asset('assets/plugins/fullcalendar/fullcalendar.css') }}" rel='stylesheet' />
    <link href="{{ asset('assets/plugins/fullcalendar/fullcalendar.print.min.css') }}" rel='stylesheet' media='print' />
@endsection
@section('content')
    <div class="app-content">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h4 class="page-title">Change Password </h4>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-md">
                <div class="card overflow-hidden">

                    <div class="card-body">
                <form id="ModelsForms" enctype="multipart/form-data" class="card" method="post"
                    action="{{ route('update_password') }}">
                    @csrf
                    <div class="card-body">


                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4 pr-0">
                                            <span class="grpspn">Old Password</span>
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <input type="text" id="old_Password" name="old_Password"
                                                class="form-control">

                                            <span style="color: red">
                                                @error('old_Password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4 pr-0">
                                            <span class="grpspn">Password</span>
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <input type="text" id="password" name="password"
                                                class="form-control">

                                            <span style="color: red">
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4 pr-0">
                                            <span class="grpspn">Confirm Password</span>
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <input type="text" id="confirm_Password" name="password_confirmation"
                                                class="form-control">
                                            {{-- <span style="color: red">@error('confirm_Password'){{ $message }}@enderror</span> --}}
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-radius btn-primary">Change
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div><!-- COL END -->
</div>
    </div>
@endsection
@section('script')
    <!-- FULL CALENDAR JS -->

@endsection
