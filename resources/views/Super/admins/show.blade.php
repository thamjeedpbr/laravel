@extends('Super.layouts.master')
@section('style')
    <!-- SELECT2 CSS -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
				<!-- CONTAINER -->
				<div class="app-content">

					<!-- HEADER -->
					<div class="header app-header">
						<div class="container-fluid">
							<div class="d-flex">
								<a class="header-brand" href="index.html">
									<img src="../../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="Solic logo">
									<img src="../../assets/images/brand/logo-1.png" class="header-brand-img mobile-view-logo" alt="Solic logo">
								</a><!-- LOGO -->
								<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
								<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
									<a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="fa fa-search"></i></a>
									<div class="">
										<form class="form-inline">
											<div class="search-element">
												<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
												<button class="btn btn-primary-color" type="submit"><i class="fa fa-search"></i></button>
											</div>
										</form>
									</div><!-- SEARCH -->
									<div class="dropdown d-md-flex">
										<a class="nav-link icon full-screen-link nav-link-bg" id="fullscreen-button">
											<i class="fe fe-maximize-2" ></i>
										</a>
									</div><!-- FULL-SCREEN -->
									<div class="dropdown d-md-flex notifications">
										<a class="nav-link icon" data-toggle="dropdown">
											<i class="fe fe-bell"></i>
											<span class="pulse bg-warning"></span>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<div class="drop-heading">
												<div class="d-flex">
													<h5 class="mb-0 text-dark">Notifications</h5>
													<span class="badge badge-danger ml-auto  brround">4</span>
												</div>
											</div>
											<div class="dropdown-divider mt-0"></div>
											<a href="#" class="dropdown-item mt-2 d-flex pb-3">
												<div class="notifyimg bg-success-transparent">
													<i class="fa fa-thumbs-o-up text-success"></i>
												</div>
												<div>
													<strong>Someone likes our posts.</strong>
													<div class="small text-muted">3 hours ago</div>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex pb-3">
												<div class="notifyimg bg-primary-transparent">
													<i class="fa fa-exclamation-triangle text-primary"></i>
												</div>
												<div>
													<strong> Issues Fixed</strong>
													<div class="small text-muted">30 mins ago</div>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex pb-3">
												<div class="notifyimg bg-warning-transparent">
													<i class="fa fa-commenting-o text-warning"></i>
												</div>
												<div>
													<strong> 3 New Comments</strong>
													<div class="small text-muted">5  hour ago</div>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex pb-3">
												<div class="notifyimg bg-danger-transparent">
													<i class="fa fa-cogs text-danger"></i>
												</div>
												<div>
													<strong> Server Rebooted.</strong>
													<div class="small text-muted">45 mintues ago</div>
												</div>
											</a>
											<div class="dropdown-divider mb-0"></div>
											<div class=" text-center p-2">
												<a href="#" class="text-dark pt-0">View All Notifications</a>
											</div>
										</div>
									</div><!-- NOTIFICATIONS -->
									<div class="dropdown d-md-flex message">
										<a class="nav-link icon text-center" data-toggle="dropdown">
											<i class="fe fe-mail "></i>
											<span class="badge badge-danger">3</span>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<div class="drop-heading">
												<div class="d-flex">
													<h5 class="mb-0 text-dark">Messages</h5>
													<span class="badge badge-danger ml-auto  brround">3</span>
												</div>
											</div>
											<div class="dropdown-divider mt-0"></div>
											<a href="#" class="dropdown-item d-flex mt-2 pb-3">
												<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="../../assets/images/users/male/41.jpg">
													<span class="avatar-status bg-green"></span>
												</div>
												<div>
													<strong>Madeleine</strong>
													<p class="mb-0 fs-13 text-muted ">Hey! there I' am available</p>
													<div class="small text-muted">3 hours ago</div>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex pb-3">
												<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="../../assets/images/users/female/1.jpg">
													<span class="avatar-status bg-red"></span>
												</div>
												<div>
													<strong>Anthony</strong>
													<p class="mb-0 fs-13 text-muted ">New product Launching</p>
													<div class="small text-muted">5  hour ago</div>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex pb-3">
												<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="../../assets/images/users/female/18.jpg">
													<span class="avatar-status bg-yellow"></span>
												</div>
												<div>
													<strong>Olivia</strong>
													<p class="mb-0 fs-13 text-muted ">New Schedule Realease</p>
													<div class="small text-muted">45 mintues ago</div>
												</div>
											</a>
											<div class="dropdown-divider mb-0"></div>
											<div class=" text-center p-2">
												<a href="#" class="text-dark pt-0">View All Messages</a>
											</div>
										</div>
									</div><!-- MESSAGE-BOX -->
									<div class="dropdown d-md-flex header-settings">
										<a href="#" class="nav-link " data-toggle="dropdown">
											<span><img src="../../assets/images/users/male/32.jpg" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<div class="drop-heading  text-center border-bottom pb-3">
												<h5 class="text-dark mb-1">Jonathan	Mills</h5>
												<small class="text-muted">App Developer</small>
											</div>
											<a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
											<a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
											<a class="dropdown-item" href="#"><i class="fe fe-calendar mr-2"></i> <span>Activity</span></a>
											<a class="dropdown-item" href="#"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
											<a class="dropdown-item" href="login.html"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
										</div>
									</div>
									<div class="dropdown d-md-flex sidebar-link">
										<a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
											<i class="fe fe-align-right"></i>
										</a>
									</div><!-- SIDE-BAR-->
								</div>
							</div>
						</div>
					</div>
					<!-- HEADER END -->

					<div class="container-fluid main-content">

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<h4 class="page-title">Profile</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Profile</li>
							</ol>
						</div>
						<!-- PAGE-HEADER END -->

						<!-- ROW-1 OPEN -->
					<div class="row" id="user-profile">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<div class="wideget-user">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wideget-user-desc d-flex">
													<div class="wideget-user-img">
														<img class="" src="../../assets/images/users/male/32.jpg" alt="img">
													</div>
													<div class="user-wrap">
														<h4>Jonathan Mills</h4>
														<h6 class="text-muted mb-3">Member Since: November 2017</h6>
														<a href="#" class="btn btn-primary mt-1 mb-1"><i class="fa fa-rss"></i> Follow</a>
														<a href="#" class="btn btn-secondary mt-1 mb-1"><i class="fa fa-envelope"></i> E-mail</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="border-top">
									<div class="wideget-user-tab">
										<div class="tab-menu-heading">
											<div class="tabs-menu1">
												<ul class="nav">
													<li class=""><a href="#tab-51" class="active show" data-toggle="tab">Profile</a></li>
													<li><a href="#tab-61" data-toggle="tab" class="">Friends</a></li>
													<li><a href="#tab-71" data-toggle="tab" class="">Gallery</a></li>
													<li><a href="#tab-81" data-toggle="tab" class="">Followers</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="border-0">
										<div class="tab-content">
											<div class="tab-pane active show" id="tab-51">
												<div id="profile-log-switch">
													<div class="media-heading">
														<h5 class="text-uppercase"><strong>Personal Information</strong></h5>
													</div>
													<hr class="m-0">
													<div class="table-responsive ">
														<table class="table row table-borderless">
															<tbody class="col-lg-12 col-xl-6 p-0">
																<tr>
																	<td><strong>Full Name :</strong> Jonathan Mills</td>
																</tr>
																<tr>
																	<td><strong>Location :</strong> USA</td>
																</tr>
																<tr>
																	<td><strong>Languages :</strong> English, German, Spanish.</td>
																</tr>
															</tbody>
															<tbody class="col-lg-12 col-xl-6 p-0">
																<tr>
																	<td><strong>Website :</strong> dashr.com</td>
																</tr>
																<tr>
																	<td><strong>Email :</strong> georgemestayer@dashr.com</td>
																</tr>
																<tr>
																	<td><strong>Phone :</strong> +125 254 3562 </td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="media-heading mt-3">
														<h5 class="text-uppercase"><strong>Business Contact Information</strong></h5>
													</div>
													<hr class="m-0">
													<div class="table-responsive ">
														<table class="table row table-borderless">
															<tbody class="col-lg-12 col-xl-6 p-0">
																<tr>
																	<td><strong>Business Telephone:</strong> +245 256 2458 5586</td>
																</tr>
																<tr>
																	<td><strong>Business Mobile :</strong> +63 548 874 9658</td>
																</tr>
															</tbody>
															<tbody class="col-lg-12 col-xl-6 p-0">
																<tr>
																	<td><strong>Business Fax :</strong> +63 548 874 9658</td>
																</tr>
																<tr>
																	<td><strong>Managers Name :</strong> Daniell Marget</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="media-heading mt-3">
														<h5 class="text-uppercase"><strong>Business Location Information</strong></h5>
													</div>
													<hr class="m-0">
													<div class="table-responsive ">
														<table class="table row table-borderless">
															<tbody class="col-lg-12 col-xl-6 p-0">
																<tr>
																	<td><strong>Streen Name:</strong> 45 welete Streen</td>
																</tr>
																<tr>
																	<td><strong>City :</strong> USA</td>
																</tr>
															</tbody>
															<tbody class="col-lg-12 col-xl-6 p-0">
																<tr>
																	<td><strong>Country :</strong> USA</td>
																</tr>
																<tr>
																	<td><strong>Postal Code :</strong> 658965</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="row profie-img">
														<div class="col-md-12">
															<div class="media-heading">
																<h5 class="text-uppercase"><strong>Biography</strong></h5>
															</div>
															<hr class="m-0 mb-3">
															<p>Omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
															<p class="mb-0">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection</p>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab-61">
												<ul class="widget-users row">
													<li class="col-lg-3  col-md-6 col-sm-12 col-12">
														<div class="card">
															<div class="card-body text-center">
																<span class="avatar avatar-xxl brround cover-image" data-image-src="../../assets/images/users/male/25.jpg"></span>
																<h4 class="h4 mb-0 mt-3">James Thomas</h4>
																<p class="card-text">Web designer</p>
																<div class="socials text-center mt-3">
																	<a href="" class="btn btn-circle btn-primary "><i class="fa fa-facebook text-white"></i></a>
																	<a href="" class="btn btn-circle btn-danger "><i class="fa fa-google-plus text-white"></i></a>
																	<a href="" class="btn btn-circle btn-info "><i class="fa fa-twitter text-white"></i></a>
																	<a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope text-white"></i></a>
																</div>
															</div>
														</div>
													</li>
													<li class="col-lg-3 col-md-6 col-sm-12 col-12">
														<div class="card">
															<div class="card-body text-center">
																<span class="avatar avatar-xxl brround cover-image" data-image-src="../../assets/images/users/female/19.jpg"></span>
																<h4 class="h4 mb-0 mt-3">George Clooney</h4>
																<p class="card-text">Web designer</p>
																<div class="socials text-center mt-3">
																	<a href="" class="btn btn-circle btn-primary "><i class="fa fa-facebook text-white"></i></a>
																	<a href="" class="btn btn-circle btn-danger "><i class="fa fa-google-plus text-white"></i></a>
																	<a href="" class="btn btn-circle btn-info "><i class="fa fa-twitter text-white"></i></a>
																	<a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope text-white"></i></a>
																</div>
															</div>
														</div>
													</li>
													<li class="col-lg-3 col-md-6 col-sm-12 col-12">
														<div class="card">
															<div class="card-body text-center">
																<span class="avatar avatar-xxl brround cover-image" data-image-src="../../assets/images/users/male/20.jpg"></span>
																<h4 class="h4 mb-0 mt-3">Robert Downey Jr.</h4>
																<p class="card-text">Web designer</p>
																<div class="socials text-center mt-3">
																	<a href="" class="btn btn-circle btn-primary "><i class="fa fa-facebook text-white"></i></a>
																	<a href="" class="btn btn-circle btn-danger "><i class="fa fa-google-plus text-white"></i></a>
																	<a href="" class="btn btn-circle btn-info "><i class="fa fa-twitter text-white"></i></a>
																	<a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope text-white"></i></a>
																</div>
															</div>
														</div>
													</li>
													<li class="col-lg-3 col-md-6 col-sm-12 col-12">
														<div class="card mb-lg-0">
															<div class="card-body text-center">
																<span class="avatar avatar-xxl brround cover-image" data-image-src="../../assets/images/users/female/12.jpg"></span>
																<h4 class="h4 mb-0 mt-3">Emma Watson</h4>
																<p class="card-text">Web designer</p>
																<div class="socials text-center mt-3">
																	<a href="" class="btn btn-circle btn-primary "><i class="fa fa-facebook text-white"></i></a>
																	<a href="" class="btn btn-circle btn-danger "><i class="fa fa-google-plus text-white"></i></a>
																	<a href="" class="btn btn-circle btn-info "><i class="fa fa-twitter text-white"></i></a>
																	<a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope text-white"></i></a>
																</div>
															</div>
														</div>
													</li>
													<li class="col-lg-3 col-md-6 col-sm-12 col-12">
														<div class="card mb-lg-0">
															<div class="card-body text-center">
																<span class="avatar avatar-xxl brround cover-image" data-image-src="../../assets/images/users/male/24.jpg"></span>
																<h4 class="h4 mb-0 mt-3">Mila Kunis</h4>
																<p class="card-text">Web designer</p>
																<div class="socials text-center mt-3">
																	<a href="" class="btn btn-circle btn-primary "><i class="fa fa-facebook text-white"></i></a>
																	<a href="" class="btn btn-circle btn-danger "><i class="fa fa-google-plus text-white"></i></a>
																	<a href="" class="btn btn-circle btn-info "><i class="fa fa-twitter text-white"></i></a>
																	<a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope text-white"></i></a>
																</div>
															</div>
														</div>
													</li>
													<li class="col-lg-3 col-md-6 col-sm-12 col-12">
														<div class="card mb-0">
															<div class="card-body text-center">
																<span class="avatar avatar-xxl brround cover-image" data-image-src="../../assets/images/users/male/26.jpg"></span>
																<h4 class="h4 mb-0 mt-3">Ryan Gossling</h4>
																<p class="card-text">Web designer</p>
																<div class="socials text-center mt-3">
																	<a href="" class="btn btn-circle btn-primary "><i class="fa fa-facebook text-white"></i></a>
																	<a href="" class="btn btn-circle btn-danger "><i class="fa fa-google-plus text-white"></i></a>
																	<a href="" class="btn btn-circle btn-info "><i class="fa fa-twitter text-white"></i></a>
																	<a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope text-white"></i></a>
																</div>
															</div>
														</div>
													</li>
													<li class="col-lg-3  col-md-6 col-sm-12 col-12">
														<div class="card">
															<div class="card-body text-center">
																<span class="avatar avatar-xxl brround cover-image" data-image-src="../../assets/images/users/male/2.jpg"></span>
																<h4 class="h4 mb-0 mt-3">Dannie Plotkin</h4>
																<p class="card-text">Web designer</p>
																<div class="socials text-center mt-3">
																	<a href="" class="btn btn-circle btn-primary "><i class="fa fa-facebook text-white"></i></a>
																	<a href="" class="btn btn-circle btn-danger "><i class="fa fa-google-plus text-white"></i></a>
																	<a href="" class="btn btn-circle btn-info "><i class="fa fa-twitter text-white"></i></a>
																	<a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope text-white"></i></a>
																</div>
															</div>
														</div>
													</li>
													<li class="col-lg-3 col-md-6 col-sm-12 col-12">
														<div class="card">
															<div class="card-body text-center">
																<span class="avatar avatar-xxl brround cover-image" data-image-src="../../assets/images/users/female/1.jpg"></span>
																<h4 class="h4 mb-0 mt-3">Jesica Benford</h4>
																<p class="card-text">Web designer</p>
																<div class="socials text-center mt-3">
																	<a href="" class="btn btn-circle btn-primary "><i class="fa fa-facebook text-white"></i></a>
																	<a href="" class="btn btn-circle btn-danger "><i class="fa fa-google-plus text-white"></i></a>
																	<a href="" class="btn btn-circle btn-info "><i class="fa fa-twitter text-white"></i></a>
																	<a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope text-white"></i></a>
																</div>
															</div>
														</div>
													</li>
													<li class="col-lg-3 col-md-6 col-sm-12 col-12">
														<div class="card">
															<div class="card-body text-center">
																<span class="avatar avatar-xxl brround cover-image" data-image-src="../../assets/images/users/male/3.jpg"></span>
																<h4 class="h4 mb-0 mt-3">Sonny Dewolf</h4>
																<p class="card-text">Web designer</p>
																<div class="socials text-center mt-3">
																	<a href="" class="btn btn-circle btn-primary "><i class="fa fa-facebook text-white"></i></a>
																	<a href="" class="btn btn-circle btn-danger "><i class="fa fa-google-plus text-white"></i></a>
																	<a href="" class="btn btn-circle btn-info "><i class="fa fa-twitter text-white"></i></a>
																	<a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope text-white"></i></a>
																</div>
															</div>
														</div>
													</li>
													<li class="col-lg-3 col-md-6 col-sm-12 col-12">
														<div class="card mb-lg-0">
															<div class="card-body text-center">
																<span class="avatar avatar-xxl brround cover-image" data-image-src="../../assets/images/users/female/2.jpg"></span>
																<h4 class="h4 mb-0 mt-3">Inge Coulter</h4>
																<p class="card-text">Web designer</p>
																<div class="socials text-center mt-3">
																	<a href="" class="btn btn-circle btn-primary "><i class="fa fa-facebook text-white"></i></a>
																	<a href="" class="btn btn-circle btn-danger "><i class="fa fa-google-plus text-white"></i></a>
																	<a href="" class="btn btn-circle btn-info "><i class="fa fa-twitter text-white"></i></a>
																	<a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope text-white"></i></a>
																</div>
															</div>
														</div>
													</li>
													<li class="col-lg-3 col-md-6 col-sm-12 col-12">
														<div class="card mb-lg-0">
															<div class="card-body text-center">
																<span class="avatar avatar-xxl brround cover-image" data-image-src="../../assets/images/users/male/4.jpg"></span>
																<h4 class="h4 mb-0 mt-3">Jae Durazo</h4>
																<p class="card-text">Web designer</p>
																<div class="socials text-center mt-3">
																	<a href="" class="btn btn-circle btn-primary "><i class="fa fa-facebook text-white"></i></a>
																	<a href="" class="btn btn-circle btn-danger "><i class="fa fa-google-plus text-white"></i></a>
																	<a href="" class="btn btn-circle btn-info "><i class="fa fa-twitter text-white"></i></a>
																	<a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope text-white"></i></a>
																</div>
															</div>
														</div>
													</li>
													<li class="col-lg-3 col-md-6 col-sm-12 col-12">
														<div class="card mb-0">
															<div class="card-body text-center">
																<span class="avatar avatar-xxl brround cover-image" data-image-src="../../assets/images/users/male/6.jpg"></span>
																<h4 class="h4 mb-0 mt-3">Noel Aguilar</h4>
																<p class="card-text">Web designer</p>
																<div class="socials text-center mt-3">
																	<a href="" class="btn btn-circle btn-primary "><i class="fa fa-facebook text-white"></i></a>
																	<a href="" class="btn btn-circle btn-danger "><i class="fa fa-google-plus text-white"></i></a>
																	<a href="" class="btn btn-circle btn-info "><i class="fa fa-twitter text-white"></i></a>
																	<a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope text-white"></i></a>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<div class="tab-pane" id="tab-71">
												<div class="row gallery">
													<div class="col-lg-3 col-md-6">
														<a href="../../assets/images/photos/8.jpg" class="big">
															<img class="img-fluid rounded mb-5" src="../../assets/images/photos/8.jpg " alt="banner image" title="Image 01">
														</a>
													</div>
													<div class="col-lg-3 col-md-6">
														<a href="../../assets/images/photos/10.jpg" class="big">
															<img class="img-fluid rounded mb-5" src="../../assets/images/photos/10.jpg" alt="banner image" title="Image 02">
														</a>
													</div>
													<div class="col-lg-3 col-md-6">
														<a href="../../assets/images/photos/11.jpg" class="big">
															<img class="img-fluid rounded mb-5" src="../../assets/images/photos/11.jpg" alt="banner image" title="Image 03">
														</a>
													</div>
													<div class="col-lg-3 col-md-6">
														<a href="../../assets/images/photos/12.jpg" class="big">
															<img class="img-fluid rounded mb-5 " src="../../assets/images/photos/12.jpg" alt="banner image" title="Image 04">
														</a>
													</div>
													<div class="col-lg-3 col-md-6">
														<a href="../../assets/images/photos/13.jpg" class="big">
															<img class="img-fluid rounded mb-5" src="../../assets/images/photos/13.jpg " alt="banner image" title="Image 05">
														</a>
													</div>
													<div class="col-lg-3 col-md-6">
														<a href="../../assets/images/photos/14.jpg" class="big">
															<img class="img-fluid rounded mb-5" src="../../assets/images/photos/14.jpg " alt="banner image" title="Image 06">
														</a>
													</div>
													<div class="col-lg-3 col-md-6">
														<a href="../../assets/images/photos/15.jpg" class="big">
															<img class="img-fluid rounded mb-5" src="../../assets/images/photos/15.jpg " alt="banner image" title="Image 07">
														</a>
													</div>
													<div class="col-lg-3 col-md-6">
														<a href="../../assets/images/photos/16.jpg" class="big">
															<img class="img-fluid rounded mb-0" src="../../assets/images/photos/16.jpg " alt="banner image" title="Image 08">
														</a>
													</div>
													<div class="col-lg-3 col-md-6">
														<a href="../../assets/images/photos/17.jpg" class="big">
															<img class="img-fluid rounded mb-0" src="../../assets/images/photos/17.jpg " alt="banner image" title="Image 09">
														</a>
													</div>
													<div class="col-lg-3 col-md-6">
														<a href="../../assets/images/photos/18.jpg" class="big">
															<img class="img-fluid rounded mb-0" src="../../assets/images/photos/18.jpg " alt="banner image" title="Image 10">
														</a>
													</div>
													<div class="col-lg-3 col-md-6">
														<a href="../../assets/images/photos/19.jpg" class="big">
															<img class="img-fluid rounded mb-0" src="../../assets/images/photos/19.jpg " alt="banner image" title="Image 11">
														</a>
													</div>
													<div class="col-lg-3 col-md-6">
														<a href="../../assets/images/photos/20.jpg" class="big">
															<img class="img-fluid rounded" src="../../assets/images/photos/20.jpg " alt="banner image" title="Image 12">
														</a>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab-81">
												<div class="wideget-user-followers mb-0">
													<div class="row">
														<div class="col-md-3">
															<div class="card">
																<div class="card-body">
																	<div class="media  m-0 mt-0">
																		<img class="avatar brround avatar-md mr-3" src="../../assets/images/users/male/18.jpg" alt="avatar-img">
																		<div class="media-body">
																			<a href="" class="text-dark font-weight-semibold">John Paige</a>
																			<p class="text-muted mb-0">johan@gmail.com</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-3 col-lg-6 col-md-12">
															<div class="card">
																<div class="card-body">
																	<div class="media m-0 mt-0">
																		<span class="avatar cover-image avatar-md brround bg-pink mr-3">LQ</span>
																		<div class="media-body">
																			<a href="" class="text-dark font-weight-semibold">Lillian Quinn</a>
																			<p class="text-muted mb-0">lilliangore@gmail.com</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-3 col-lg-6 col-md-12">
															<div class="card">
																<div class="card-body">
																	<div class="media m-0 mt-0">
																		<span class="avatar cover-image avatar-md brround mr-3">IH</span>
																		<div class="media-body">
																			<a href="" class="text-dark font-weight-semibold">Irene Harris</a>
																			<p class="text-muted mb-0">ireneharris@gmail.com</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-3 col-lg-6 col-md-12">
															<div class="card">
																<div class="card-body">
																	<div class="media m-0 mt-0">
																		<img class="avatar brround avatar-md mr-3" src="../../assets/images/users/female/22.jpg" alt="avatar-img">
																		<div class="media-body">
																			<a href="" class="text-dark font-weight-semibold">Harry Fisher</a>
																			<p class="text-muted mb-0">harryuqt@gmail.com</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-3 col-lg-6 col-md-12">
															<div class="card">
																<div class="card-body">
																	<div class="media m-0 mt-0">
																		<img class="avatar brround avatar-md mr-3" src="../../assets/images/users/male/8.jpg" alt="avatar-img">
																		<div class="media-body">
																			<a href="" class="text-dark font-weight-semibold">Eloy Tune</a>
																			<p class="text-muted mb-0">eloytune@gmail.com</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-3 col-lg-6 col-md-12">
															<div class="card">
																<div class="card-body">
																	<div class="media m-0 mt-0">
																		<span class="avatar cover-image avatar-md brround bg-pink mr-3">CA</span>
																		<div class="media-body">
																			<a href="" class="text-dark font-weight-semibold">Charlott Asher</a>
																			<p class="text-muted mb-0">charlottasher@gmail.com</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-3 col-lg-6 col-md-12">
															<div class="card">
																<div class="card-body">
																	<div class="media m-0 mt-0">
																		<span class="avatar cover-image avatar-md brround mr-3">MP</span>
																		<div class="media-body">
																			<a href="" class="text-dark font-weight-semibold">Mora Purser</a>
																			<p class="text-muted mb-0">morapurser@gmail.com</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-3 col-lg-6 col-md-12">
															<div class="card">
																<div class="card-body">
																	<div class="media m-0 mt-0">
																		<img class="avatar brround avatar-md mr-3" src="../../assets/images/users/female/2.jpg" alt="avatar-img">
																		<div class="media-body">
																			<a href="" class="text-dark font-weight-semibold">Marna Berney</a>
																			<p class="text-muted mb-0">marnaberney@gmail.com</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- COL-END -->
					</div>
					<!-- ROW-1 CLOSED -->
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection