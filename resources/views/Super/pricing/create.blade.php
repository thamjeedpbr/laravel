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
            <h4 class="page-title">Add Price</h4>

        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-md">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Add Price</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pricing.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Name</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Pricing name" value="{{ old('name') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Issue</label>
                                        <select class="form-control select2-show-search" name="issue_id"
                                            data-placeholder="Select Issue">
                                            <option label="Select Issue"></option>
                                            @foreach ($issues as $issue)
                                                <option value="{{ $issue->id }}"> {{ $issue->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
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
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Brand</label>
                                        <select class="form-control select2-show-search" id="brand" name="brand_id"
                                            data-placeholder="Select Brand">
                                            <option label="Select Brand"></option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}"> {{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6" id="device_list">
                                    @include('Super.pricing.device')
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Quality</label>
                                        <select class="form-control select2-show-search" name="quality"
                                            data-placeholder="Select Quality" required>
                                            <option label="Select Quality"></option>
                                            <option value="OEM"> OEM</option>
                                            <option value="High Quality"> High Quality</option>
                                            <option value="Original Quality"> Original Quality</option>
                                            <option value="Null">Not Required</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" id="notes">
                                    <div class="form-group">
                                        <label>Notes</label>
                                        <select class="form-control show-search" name="note_id" id="device"
                                            data-placeholder="Select Note">
                                            <option label="Select Note"></option>
                                            <div>
                                                @isset($notes)
                                                    @foreach ($notes as $note)
                                                        <option value="{{ $note->id }}"
                                                            @isset($pricing)
                                                 @if ($pricing->note_id == $note->id) selected @endif
                                                 @endisset>
                                                            {{ $note->name }}</option>
                                                    @endforeach
                                                @endisset

                                            </div>

                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Warranty</label>
                                        <div class="form-group d-flex">
                                            <input type="text" class="form-control col-md-6" name="warranty"
                                                placeholder="Warrany Details" value="{{ old('warranty') }}">
                                            <select class="form-control show-search col-md-6" name="warranty_type"
                                                id="device" data-placeholder="Select Day/ Month/ Year">
                                                <option label="Select Day/ Month/ Year"></option>
                                                <option value="Day">Day</option>
                                                <option value="Month">Month</option>
                                                <option value="Year">Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group overflow-hidden">
                                        <label>Amount</label>
                                        <div class="form-group">
                                            <input type="number" step=".1" class="form-control" name="amount"
                                                placeholder="Enter Price" value="{{ old('amount') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group overflow-hidden d-flex">
                                        <label>Onsite </label>
                                        <input type="checkbox" class="form-control" id="demoCheckbox" name="onsite"
                                            value="true">
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
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $('#brand').change(function(e) {
            deviceName();
        });
        $('#devicetype').change(function(e) {
            deviceName();
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
    </script>
@endsection
