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
            <h4 class="page-title">Add Users</h4>

        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-md">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Add User</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Name</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name"
                                                value="{{ $user->name }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Email</label>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="email id for login" value="{{ $user->email }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Repairshopr Api Token</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="repairshopr_api_token"
                                                placeholder="Repairshopr Api Token"
                                                value="{{ $user->repairshopr_api_token }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Password</label>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="New Password(if password change required)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Confirm Password</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="password_confirmation"
                                                placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control select2-show-search" name="role" id="role"
                                            data-placeholder="Select Role" required>
                                            <option label="Select Role"></option>
                                            <div>
                                                @isset($roles)
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->name }}"
                                                            @isset($user)
                                                            @if ($user['roles'][0]->name == $role->name) selected @endif
                                                            @endisset>

                                                            {{ $role->name }}</option>
                                                    @endforeach
                                                @endisset

                                            </div>

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
