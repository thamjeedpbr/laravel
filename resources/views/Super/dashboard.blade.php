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
            <h4 class="page-title">Dashboard </h4>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row">
            {{-- @can('dashboard')
                <div class="col-sm-6 col-lg-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="card-body pb-0">
                            <div class="text-center mb-5">
                                <h6 class="mb-2">New Appointments</h6>
                                <h2 class="mb-0 number-font display-4 font-weight-bold text-dark">{{ $appointment['today'] }}
                                </h2>
                            </div>
                            <div class="row mb-5">
                                <div class="col-6 text-center border-right">
                                    <p class="mb-1 text-muted">This Week</p>
                                    <h5 class="mb-0">{{ $appointment['week'] }}</h5>
                                </div>
                                <div class="col-6 text-center">
                                    <p class="mb-1 text-muted">This Month</p>
                                    <h5 class="mb-0">{{ $appointment['month'] }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="chart-wrapper">
                            <canvas id="total-sales" class=""></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="card-body pb-0">
                            <div class="text-center mb-5">
                                <h6 class="mb-2 ">New Customers</h6>
                                <h2 class="mb-0 number-font display-4 font-weight-bold text-dark">{{ $newcustomer['today'] }}
                                </h2>
                            </div>
                            <div class="row mb-5">
                                <div class="col-6 text-center border-right">
                                    <p class="mb-1  text-muted">This Week</p>
                                    <h5 class="mb-0">{{ $newcustomer['week'] }}</h5>
                                </div>
                                <div class="col-6 text-center">
                                    <p class="mb-1 text-muted">This Month</p>
                                    <h5 class="mb-0">{{ $newcustomer['month'] }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="chart-wrapper">
                            <canvas id="total-brands" class="h-150"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-4">
                    <div class="card ">
                        <div class="card-body pb-0">
                            <div class="text-center mb-5">
                                <h6 class="mb-2">New Enquiry </h6>
                                <h2 class="mb-0 number-font display-4 font-weight-bold text-dark">{{ $enquiry['today'] }}</h2>
                            </div>
                            <div class="row mb-5">
                                <div class="col-6 text-center border-right">
                                    <p class="mb-1 text-muted">This Week</p>
                                    <h5 class="mb-0">{{ $enquiry['week'] }}</h5>
                                </div>
                                <div class="col-6 text-center">
                                    <p class="mb-1 text-muted">This Month</p>
                                    <h5 class="mb-0">{{ $enquiry['month'] }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="chart-wrapper">
                            <canvas id="total-revenue" class=""></canvas>
                        </div>
                    </div>
                </div>
            @endcan --}}

            {{-- <div class="col-sm-6 col-lg-6 col-xl-3">
			<div class="card ">
				<div class="card-body pb-0">
					<div class="text-center mb-5">
						<h6 class="mb-2">Total Units Sold</h6>
						<h2 class="mb-0 number-font display-4 font-weight-bold text-dark">968</h2>
					</div>
					<div class="row mb-5">
						<div class="col-6 text-center border-right">
							<p class="mb-1 text-muted">Last Week</p>
							<h5 class="mb-0">124</h5>
						</div>
						<div class="col-6 text-center">
							<p class="mb-1 text-muted">Last Month</p>
							<h5 class="mb-0">457</h5>
						</div>
					</div>
				</div>
				<div class="chart-wrapper">
					<canvas id="total-unitsold" class="h-150"></canvas>
				</div>
			</div>
		</div> --}}
        </div>
        <!-- ROW-1 CLOSED -->

        <!-- ROW OPEN -->
        {{-- <div class="row">

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
        </div> --}}
        <!-- ROW CLOSED -->
        <!-- ROW-2 OPEN -->
        {{-- <div class="row">
		<div class="col-xl-9 col-md-12 col-lg-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Total Customers & Visitors</div>
				</div>
				<div class="card-body">
					<div id="chart" class="mb-0 chart-toolbar"></div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-12 col-lg-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Sales By Division</div>
				</div>
				<div class="row mr-0 ml-0">
					<div class="col-md-12 pr-0 pl-0">
						<div class="card-body">
							<div class="d-flex">
								<div>
									<h6 class="mb-2">Women</h6>
									<h2 class="mb-0 display-6 font-weight-bold">$5,893</h2>
								</div>
								<div class="ml-auto ">
									<div class="chart-circle chart-circle-sm mt-1" data-value="0.55" data-thickness="4" data-color="#564ec1">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 pr-0 pl-0 border-top">
						<div class="card-body">
							<div class="d-flex">
								<div>
									<h6 class="mb-2">Men</h6>
									<h2 class="mb-0 display-6 font-weight-bold">$3,412</h2>
								</div>
								<div class="ml-auto ">
									<div class="chart-circle chart-circle-sm mt-1" data-value="0.42" data-thickness="4" data-color="#04cad0">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 pr-0 pl-0 border-top">
						<div class="card-body">
							<div class="d-flex">
								<div>
									<h6 class="mb-2">Kids</h6>
									<h2 class="mb-0 display-6 font-weight-bold">$78.34</h2>
								</div>
								<div class="ml-auto ">
									<div class="chart-circle chart-circle-sm mt-1" data-value="0.76" data-thickness="4" data-color="#f5334f">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
        <!-- ROW-2 CLOSED -->

        <!-- ROW-3 OPEN -->
        {{-- <div class="row">
		<div class="col-sm-12 col-lg-12 col-xl-4">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Countrywise Sales</div>
				</div>
				<div class="card-body">
					<div id="echart-1" class="chart-pie"></div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-lg-12 col-xl-8">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Monthly  Orders Statistics</div>
				</div>
				<div class="card-body">
					<div class="row text-left mb-5">
						<div class="col-sm-6 dash-1">
							<div class="d-flex">
								<div class="feature mr-5">
									<div class="fa-stack fa-lg fa-2x brround bg-primary-transparent">
										<i class="fa fa-cart-plus fa-stack-1x text-primary"></i>
									</div>
								</div>
								<div class="mt-1">
									<h6>Total Orders</h6>
									<h2 class="mt-2 mb-0 display-6 font-weight-bold text-dark mb-0">578</h2>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="d-flex">
								<div class="feature mr-5">
									<div class="fa-stack fa-lg fa-2x brround bg-secondary-transparent">
										<i class="fa fa-dropbox fa-stack-1x text-secondary"></i>
									</div>
								</div>
								<div class="mt-1">
									<h6>Avg Orders per Customer</h6>
									<h1 class="mt-2 mb-0 display-6 font-weight-bold text-dark mb-0">5.79</h1>
								</div>
							</div>
						</div>
					</div>
					<div id="total-orders" class="chartsh"></div>
				</div>
			</div>
		</div>
	</div> --}}
        <!-- ROW-3 CLOSED -->

    </div>
@endsection
@section('script')
    <!-- FULL CALENDAR JS -->
    <script src="{{ asset('assets/plugins/fullcalendar/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/jquery-ui.min.js') }}"></script>
@endsection
