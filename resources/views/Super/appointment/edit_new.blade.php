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
            <h4 class="page-title">Edit Appointment</h4>

        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-md">
                <div class="card overflow-hidden">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <form action="{{ route('appointment.update.new', $appointment->id)  }}" method="POST">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="onsite" id="onsite">
                            <input type="hidden" value="{{ $appointment->start_at }}" name="start_at" id="start_at">
                            <input type="hidden" value="{{ $appointment->end_at }}" name="end_at" id="end_at">

                            <div class="row">

                                <div class="col-md-6" id="appointment_types_list">
                                    @include('Super.appointment.appointment_types')
                                </div>

                                <div class="col-md-6" id="slot_list">
                                    @include('Super.appointment.slot')
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Date</label>
                                        <div class="form-group">
                                            <input type="date" {{-- min="{{ date('Y-m-d') }}"  --}} class="form-control" id="date"
                                                name="date" value="{{ date('Y-m-d', strtotime($appointment->start_at)) }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" id="staff_list">
                                    @include('Super.appointment.staff')
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Select Time Range</label>
                                        <input  class="form-control" type="number" min="0.5" step="0.5" max="3" value="{{ $timeperiod }}" class="form-control" id="timeperiod" name="timeperiod">

                                        {{-- <select class="form-control select2-show-search" name="timeperiod" id="timeperiod"
                                            data-placeholder="Select Time Range" required>
                                            <option label="Select Time range"></option>
                                            <option value=".5" @isset($timeperiod)
                                            @if ($timeperiod == 0.5)
                                                selected
                                            @endif
                                            @endisset> Half Hour</option>
                                            <option value="1"
                                            @isset($timeperiod)
                                            @if ($timeperiod == 1)
                                                selected
                                            @endif
                                            @endisset
                                            > One Hour</option>

                                        </select> --}}
                                    </div>
                                </div>
                                <div class="col-md-6" id="time_list">
                                    @include('Super.appointment.timelist')
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Summary</label>
                                        <div class="form-group">
                                            <textarea class="form-control  col-md-12" name="summary" id="summary" required>{{ $appointment->summary }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Description</label>
                                        <div class="form-group">
                                            <textarea class="form-control  col-md-12" name="description" id="description" required>{{ $appointment->description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group overflow-hidden">
                                        <label>Location</label>
                                        <div class="form-group">
                                            <textarea class="form-control  col-md-12" name="location" id="location">{{ $appointment->location }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                        <a href="{{ route('appointment.delete', $appointment->id) }}" class="btn btn-danger btn-gray-medium " onclick="return confirm(`Are you sure?`)" style="text-decoration:none; display: inline-block; width: 30px;">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div><!-- COL END -->
        </div>

        <!-- ROW CLOSED -->

        <!-- CONTAINER CLOSED -->
    @endsection
    @section('script')
        <!-- SELECT2 JS -->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>
        <script src="{{ asset('assets/js/form-elements.js') }}"></script>
        <script>
            $('#brand').change(function(e) {
                deviceName();
            });
            $('#devicetype').change(function(e) {
                deviceName();
            });
            $(document).on('change', '#slot', function(e) {
                staffList();
                timeList();
            });
            $('#date').change(function(e) {
                var date = $('#date').val();
                $.ajax({
                    url: "{{ route('appointment.slot') }}",
                    method: 'POST',
                    data: {
                        _token: '{!! csrf_token() !!}',
                        date: date,
                    },
                    success: function(list) {
                        $('#slot_list').html(list.view);
                        $('.select2-show-search').select2();
                    }
                });
                staffList();
                timeList();
            });

            $(document).on("change", '#device', function(e) {
                priceList();
            });

            function deviceName() {
                var brand = $('#brand').val();
                var devicetype = $('#devicetype').val();
                $.ajax({
                    url: "{{ route('pricing.device') }}",
                    method: 'POST',
                    data: {
                        _token: '{!! csrf_token() !!}',
                        brand_id: brand,
                        devicetype_id: devicetype,
                    },
                    success: function(list) {
                        $('#device_list').html(list.view);
                        $('.select2-show-search').select2();
                    }
                });
            }

            function priceList() {
                var brand = $('#brand').val();
                var devicetype = $('#devicetype').val();
                var device = $('#device').val();
                $.ajax({
                    url: "{{ route('pricing.list') }}",
                    method: 'POST',
                    data: {
                        _token: '{!! csrf_token() !!}',
                        brand_id: brand,
                        devicetype_id: devicetype,
                        device_id: device,
                    },
                    success: function(list) {
                        $('#price_list').html(list.view);
                        $('.select2-show-search').select2();
                    }
                });
            }

            $(document).on('change', '#pricing_id', function(e) {
                var pricing_id = $('#pricing_id').val();
                $.ajax({
                    url: "{{ route('appointment.type') }}",
                    method: 'POST',
                    data: {
                        _token: '{!! csrf_token() !!}',
                        pricing_id: pricing_id,
                    },
                    success: function(list) {
                        $('#appointment_types_list').html(list.view);
                        $('#onsite').val(list.onsite);
                        $('.select2-show-search').select2();
                    }
                });
            });

            function staffList() {
                var timeperiod = $('#timeperiod').val();
                var date = $('#date').val();
                var slot = $('#slot').val();
                $.ajax({
                    url: "{{ route('appointment.staff') }}",
                    method: 'POST',
                    data: {
                        _token: '{!! csrf_token() !!}',
                        date: date,
                        timeperiod: timeperiod,
                        slot: slot,
                    },
                    success: function(list) {
                        $('#staff_list').html(list.view);
                        $('.select2-show-search').select2();
                    }
                });
            }

            $(document).on('change', '#staff_id', function(e) {
                timeList();
            });
            $(document).on('keyup', '#timeperiod', function(e) {
                staffList();
                timeList();
            });
            function timeList() {
                var timeperiod = $('#timeperiod').val();
                var date = $('#date').val();
                var slot = $('#slot').val();
                var staff_id = $('#staff_id').val();

                $.ajax({
                    url: "{{ route('appointment.time') }}",
                    method: 'POST',
                    data: {
                        _token: '{!! csrf_token() !!}',
                        date: date,
                        slot: slot,
                        staff_id: staff_id,
                        timeperiod: timeperiod,
                    },
                    success: function(list) {
                        $('#start_at').val("");
                        $('#end_at').val("");
                        $('#time_list').html(list.view);
                        $('.select2-show-search').select2();
                    }
                });
            }
            $(document).on('change', '#timelist_id', function(e) {
                var start_at = $(this).val();
                var end_at = $('#timelist_id').find('option:selected').attr('end_at');
                console.log(start_at);
                console.log(end_at);
                $('#start_at').val(start_at);
                $('#end_at').val(end_at);
            });
        </script>
    @endsection
