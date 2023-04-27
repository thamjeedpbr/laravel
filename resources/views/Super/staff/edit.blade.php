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
            <h4 class="page-title">Update Staff</h4>

        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-md">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Update Staff</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('staff.update', $staff->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group overflow-hidden">
                                        <label>Select Slot</label>
                                        <select class="form-control select2-show-search" name="slot[]" id="slot"
                                            data-placeholder="Select Slot" multiple>
                                            <option label="Select Slot"></option>
                                            @isset($slots)
                                                @foreach ($slots as $slot)
                                                    <option value="{{ $slot['id'] }}"
                                                        @isset($staff)
                                                    @foreach (explode(',', $staff->slots) as $staffslot)
                                                        @if ($staffslot == $slot['id'])
                                                            selected
                                                        @endif
                                                    @endforeach

                                                    @endisset>
                                                        {{ $slot['name'] }} </option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group overflow-hidden">
                                            <label>Select Appointment Types</label>
                                            <select class="form-control select2-show-search" name="type[]" id="type"
                                                data-placeholder="Select Appointment Type" multiple>
                                                <option label="Select Appointment Type"></option>
                                                @isset($AppointmentTypes)
                                                    @foreach ($AppointmentTypes as $type)
                                                        <option value="{{ $type['id'] }}"
                                                            @isset($staff)
                                                    @foreach (explode(',', $staff->label) as $stafflabel)
                                                        @if ($stafflabel == $type['id'])
                                                            selected
                                                        @endif
                                                    @endforeach

                                                    @endisset>
                                                            {{ $type['name'] }} </option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                        </div>
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
