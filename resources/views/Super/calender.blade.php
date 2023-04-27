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
            <h4 class="page-title">Calender </h4>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW OPEN -->
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 card-title">Appointment Calender</h3>
                    </div>
                    <div class="card-body">
                        <div id='calendar2'></div>
                    </div>
                </div>
            </div>
        </div>


        <input type="hidden" value="{{ $appointment_list }}" id="appointment_list">
    </div>
@endsection
@section('script')
    <!-- FULL CALENDAR JS -->
    <script src="{{ asset('assets/plugins/fullcalendar/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
    <script>
        $(function() {
            // "use strict";
            var appointment_list = $('#appointment_list').val();
            console.log(jQuery.parseJSON(appointment_list));
            var now = new Date();

            var month = (now.getMonth() + 1);

            var day = now.getDate();

            if (month < 10)

                month = "0" + month;

            if (day < 10)

                day = "0" + day;

            var today = now.getFullYear() + '-' + month + '-' + day;
            console.log(today)
            $('#calendar2').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                },
                defaultDate: today,
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
                eventLimit: true,
                defaultView: "agendaDay",
                events: jQuery.parseJSON(appointment_list),
            });

        });
    </script>
@endsection
