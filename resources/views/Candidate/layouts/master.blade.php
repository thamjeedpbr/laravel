<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Lantern Abroad – Candidate Pannel" name="description">

    <!--favicon -->
    <link rel="icon" href="../../assets/images/brand/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="../../assets/images/brand/favicon.ico" type="image/x-icon" />

    <!-- TITLE -->
    <title>Lantern Abroad – Candidate Pannel</title>

    <!-- DASHBOARD CSS -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet" />

    <!-- LEFT-MENU CSS -->
    <link href="{{ asset('assets/plugins/sidemenu-toggle/sidemenu-toggle.css') }}" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!-- Skin css-->
    <link href="{{ asset('assets/skins/skins-modes/color19.css') }}" id="theme" rel="stylesheet" type="text/css"
        media="all" />

    <!-- SIDEBAR CSS -->
    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <style>
        .required:after {
            content: " *";
            color: red;
        }
    </style>
    @yield('style')

</head>

<body class="app sidebar-mini default-header">

    <div class="page">
        <div class="page-main">
            <!-- HEADER -->
            @include('Candidate.layouts.header')
            <!-- HEADER END -->

               <!-- CONTAINER -->
            @yield('content')

            <!-- CONTAINER CLOSED -->
        </div>

        <!-- FOOTER -->
        @include('Candidate.layouts.footer')

        <!-- FOOTER END -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('assets/js/vendors/jquery-3.2.1.min.js') }}"></script>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('assets/js/vendors/bootstrap.bundle.js') }}"></script>
    <!-- INDEX-SCRIPTS -->
    <script src="{{ asset('assets/js/index5.js') }}"></script>

    <!--CUSTOM JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- SPARKLINE -->
    @yield('script')

    <!-- LEFT-MENU -->
    <script src="{{ asset('assets/plugins/sidemenu-toggle/sidemenu-toggle.js') }}"></script>
    <!-- SIDEBAR JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script>
        $('.form-prevent-multiple-submits').on('submit', function() {
            $('.button-prevent-multiple-submits').attr('disabled', true);
            $('.button-prevent-multiple-submits .spinner').show();
        });
        toastr.options = {
            "closeButton": true,
        };
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
            @php
                Session::forget('success');
            @endphp
        @endif

        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
            @php
                Session::forget('error');
            @endphp
        @endif
        @if (Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
            @php
                Session::forget('warning');
            @endphp
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>

</body>

</html>
