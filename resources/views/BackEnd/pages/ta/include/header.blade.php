<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title') | TA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<link rel="icon" href=" {{ asset('BackEnd/files/assets/images/capm.ico') }} " type="image/x-icon">
		<script type="text/javascript" src=" {{ asset('BackEnd/files/bower_components/jquery/js/jquery.min.js') }} "></script>
		<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/pace.min.js') }} "></script>
		<link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/bower_components/bootstrap/css/bootstrap.min.css') }} ">
		<link rel="stylesheet" href=" {{ asset('BackEnd/files/assets/pages/waves/css/waves.min.css') }} " type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/assets/icon/feather/css/feather.css') }} ">
		<link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/assets/css/font-awesome-n.min.css') }} ">
		@stack('css')

		<style type="text/css">
		    label.error {
		    	color: #CC0000;
		    	font-weight: 300;
		    }
		    #msg {
				    color: #f35626;
				    background-image: -webkit-linear-gradient(92deg, maroon, red, yellow);
				    -webkit-background-clip: text;
				    -webkit-text-fill-color: transparent;
				    -webkit-animation: hue 1s infinite linear;
				}

				@-webkit-keyframes hue {
				    from {
				      -webkit-filter: hue-rotate(0deg);
				    }

				    to {
				      -webkit-filter: hue-rotate(360deg);
				    }
				}
		</style>
		
		<link rel="stylesheet" href=" {{ asset('BackEnd/files/assets/pages/chart/radial/css/radial.css') }} " type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/assets/css/style.css') }} ">
		<link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/assets/css/widget.css') }} ">
	</head>
	<body>
<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
				<nav class="navbar header-navbar pcoded-header">
					<div class="navbar-wrapper">
						<div class="navbar-logo">
							<a href=" {{ url('/ta') }} ">
								<img class="img-fluid" src=" {{ asset('BackEnd/files/assets/images/unitfundlogo.jpg') }} " alt="Theme-Logo" />
							</a>
							<a class="mobile-menu" id="mobile-collapse" href="#!">
								<i class="feather icon-menu"></i>
							</a>
							<a class="mobile-options waves-effect waves-light">
								<i class="feather icon-more-horizontal"></i>
							</a>
						</div>
						<div class="navbar-container container-fluid">

							<ul class="nav-right">

								<li class="header-search">
									<div class="main-search morphsearch-search">
										<div class="input-group">
											<?php
												$pass = Session::get('ta_pass');
												$ck_pass = md5(123456);
											?>

											@if($pass == $ck_pass)
											<span class="input-group-append search-btn">
												<i class="feather input-group-text" id="msg">Please Change Your Password For Security Issue</i>
											</span>
											@endif
										</div>
									</div>
								</li>

								<li class="user-profile header-notification">
									<div class="dropdown-primary dropdown">
										<div class="dropdown-toggle" data-toggle="dropdown">
											<img src=" {{ asset('BackEnd/files/assets/images/ta.jpg') }} " class="img-radius img-50" alt="User-Profile-Image">
										</div>
										<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
											<li class="drp-u-details" id="dru_det">
												<img src=" {{ asset('BackEnd/files/assets/images/ta.jpg') }} " class="img-radius" alt="User-Profile-Image">

												<?php
													$userName = Session::get('ta_un');
													$userId = Session::get('ta_id');
												?>

												<span>{{ $userName }}</span>
												
												<p class="user-department">
													
												</p>
												<a href="{{ url('/ta-logout') }}" class="dud-logout" data-placement="left" data-trigger="hover" data-toggle="tooltip" title="Logout">
													<i class="feather icon-log-out"></i>
												</a>
											</li>
											<li>
												<span data-toggle="tooltip" data-original-title="Reset Your Password" data-placement="bottom">
												<a href="#" id="reset_btn" href="#" data-toggle="modal" data-target="#resetModal">
													<i class="feather icon-settings"></i> Reset Password
												</a>
												</span>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</nav>

				<div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <p class="text-center modal_head">Reset Password</p>
                    <div class="modal-body">
                       <form id="pass_res_form" action="{{ url('/ta/ta-reset') }}" method="POST">

                        @csrf
                            <div class="form-group pass_res">
                                <input type="text" class="form-control" value="{{$userName}}" disabled>
                                <input type="hidden" class="form-control" name="user_id" value="{{$userName}}">
                            </div>
                            <div class="form-group pass_res">
                                <input type="password" class="form-control" placeholder="Old Password" name="old_password">
                            </div>
                            <div class="form-group pass_res">
                                <input type="password" id="new_password" class="form-control" placeholder="New Password" name="new_password">
                            </div>
                            <div class="form-group pass_res">
                                <input type="password" class="form-control" placeholder="Confirm Password" name="conf_password">
                            </div>
                            <div class="right-w3l">
                                <input type="submit" id="reset_button" class="btn my_bg_one btn-sm" value="Reset">
                                <input type="submit" id="close_button" value="x" class="close btn btn-sm" data-dismiss="modal" aria-label="Close">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>