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
            <h4 class="page-title">Add Appointment</h4>

        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-md">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Create Appointment for {{ $customer->fullname }} ({{ $customer->mobile }}) -
                            {{ $customer->email }}</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('appointment.store') }}" method="POST" class="form-prevent-multiple-submits">
                            @csrf
                            @method('POST')

                            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                            <input type="hidden" name="onsite" id="onsite">
                            <input type="hidden" name="start_at" id="start_at">
                            <input type="hidden" name="end_at" id="end_at">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Device Type</label>
                                        <select class="form-control select2-show-search" name="devicetype_id"
                                            id="devicetype" data-placeholder="Select devicetype">
                                            <option label="Select Device Type"></option>
                                            @foreach ($devicetypes as $devicetype)
                                                <option value="{{ $devicetype->id }}"> {{ $devicetype->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Date</label>
                                        <div class="form-group">
                                            <input type="date"
                                            {{-- min="{{ date('Y-m-d') }}"  --}}
                                            class="form-control"
                                                id="date" name="date" value="{{ old('date') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" id="brand_list">
                                    @include('Super.appointment.brand')
                                </div>

                                <div class="col-md-6" id="appointment_types_list">
                                    @include('Super.appointment.appointment_types')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" id="device_list">
                                    @include('Super.pricing.device')
                                </div>
                                <div class="col-md-6" id="slot_list">
                                    @include('Super.appointment.slot')
                                </div>


                            </div>
                            <div class="row">

                                <div class="col-md-6" id="price_list">
                                    @include('Super.appointment.priceing')
                                </div>
                                <div class="col-md-6" id="staff_list">
                                    @include('Super.appointment.staff')
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Select Time Range</label>
                                        <input  class="form-control" type="number" min="0.5" step="0.5" max="3" value="0" class="form-control" id="timeperiod" name="timeperiod">
                                    </div>
                                </div>
                                <div class="col-md-6" id="time_list">
                                    @include('Super.appointment.timelist')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group overflow-hidden">
                                        <label>Description</label>
                                        <div class="form-group">
                                            <textarea class="form-control  col-md-12" name="description" id="description" required>{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group overflow-hidden">
                                        <label>Location</label>
                                        <div class="form-group">
                                            <textarea class="form-control" name="location" id="location">{{ $customer->address ."\n". $customer->address_2. "\n".$customer->state }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary button-prevent-multiple-submits" type="submit">Submit</button>
                        </form>

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
            $(document).on('change', '#brand', function(e) {
                deviceName();
            });
            $('#devicetype').change(function(e) {
                deviceName();
                brandList();
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
            function brandList() {
                var devicetype = $('#devicetype').val();
                $.ajax({
                    url: "{{ route('appointment.brand') }}",
                    method: 'POST',
                    data: {
                        _token: '{!! csrf_token() !!}',
                        devicetype_id: devicetype,
                    },
                    success: function(list) {
                        $('#brand_list').html(list.view);
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
                        $('#onsite').val(list.onsite);
                        $('.select2-show-search').select2();
                    }
                });
            });
            $(document).on('change', '#appointmentType', function(e) {
                staffList();
                timeList();
            });

            function staffList() {
                var appointmentType = $('#appointmentType').val();
                var date = $('#date').val();
                var slot = $('#slot').val();
                var timeperiod = $('#timeperiod').val();

                $.ajax({
                    url: "{{ route('appointment.staff') }}",
                    method: 'POST',
                    data: {
                        _token: '{!! csrf_token() !!}',
                        date: date,
                        slot: slot,
                        appointmentType: appointmentType,
                        timeperiod:timeperiod,
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

            function timeList() {
                var appointmentType = $('#appointmentType').val();
                var date = $('#date').val();
                var slot = $('#slot').val();
                var staff_id = $('#staff_id').val();
                var timeperiod = $('#timeperiod').val();

                $.ajax({
                    url: "{{ route('appointment.time') }}",
                    method: 'POST',
                    data: {
                        _token: '{!! csrf_token() !!}',
                        date: date,
                        slot: slot,
                        staff_id: staff_id,
                        appointmentType: appointmentType,
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
                var start_at =  $(this).val();
                var end_at =  $('#timelist_id').find('option:selected').attr('end_at');
                console.log(start_at);
                console.log(end_at);
                $('#start_at').val(start_at);
                $('#end_at').val(end_at);
            });
            $(document).on('keyup', '#timeperiod', function(e) {
                staffList();
                timeList();
            });
        </script>
    @endsection
