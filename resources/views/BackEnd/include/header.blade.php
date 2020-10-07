<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title') | CAPM Fund Manager</title>
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
		<style>
			label.error {
		    	color: #CC0000;
		    	font-weight: 300;
		    }
		    .user_img{
		    	height: 40px;
		    	width: 50px;
		    }
		    .user_img_top{
		    	height: 50px;
		    }

		    .cng{
		    	font-size: 11px;
    			color: #2a8a78;
		    }

		    .cng:hover{
    			color: maroon;
		    }
		</style>
		<link rel="stylesheet" href=" {{ asset('BackEnd/files/assets/pages/chart/radial/css/radial.css') }} " type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/assets/css/style.css') }} ">
		<link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/assets/css/widget.css') }} ">
		@stack('css1')
	</head>
	<body>
<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
				<nav class="navbar header-navbar pcoded-header">
					<div class="navbar-wrapper">
						<div class="navbar-logo">
							<a href=" {{ url('/home') }} ">
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
								<li class="user-profile header-notification">
									<div class="dropdown-primary dropdown">
										<div class="dropdown-toggle" data-toggle="dropdown">
											<img src="{{ asset('user_photo/'.Auth::user()->photo) }}" class="img-radius img-50 user_img_top" alt="Insert Your Photo">
										</div>
										<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
											<li class="drp-u-details">
												<img src="{{ asset('user_photo/'.Auth::user()->photo) }}" class="img-radius user_img" alt="Insert Your Photo">
												<span class="auth_user_name">{{ Auth::user()->name }}</span>
												
												<p class="user-department">
													
												</p>
												<a href="{{ route('logout') }}" class="dud-logout" data-placement="left" data-trigger="hover" data-toggle="tooltip" title="Logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
													<i class="feather icon-log-out"></i>
												</a>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        			@csrf
                                    			</form>
											</li>
											<li>
												<a href="#" data-toggle="modal" data-target="#profileModal">
													<i class="feather icon-user"></i> Profile
												</a>
											</li>
											<li>
												<a href="#" id="reset_btn" data-toggle="modal" data-target="#resetModal">
													<i class="feather icon-settings"></i> Reset Password
												</a>
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
                       <form id="employee_pas_res_form" action="{{ url('/employee_reset') }}" method="POST">

                        @csrf
                            <div class="form-group pass_res">
                                <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                            </div>
                            <div class="form-group pass_res">
                                <input type="text" class="form-control" value="{{Auth::user()->email}}" readonly>
                            </div>
                            <div class="form-group pass_res">
                                <input type="password" id="password" class="form-control" placeholder="Password" name="password">
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


        <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <p class="text-center modal_head" style="border-bottom: 1px solid #2b8a78;">User Info</p>
                    <div class="modal-body">
                    	<div class="container">
                    		<div class="row">
                    			<div class="col-md-8 col-sm-8">
		                    		<div class="admin_user">
		                    			<table>
		                    				<tr>
		                    					<th>Name:</th>
		                    					<td> {{Auth::user()->name}}</td>
		                    				</tr>
		                    				<tr>
		                    					<th>Email:</th>
		                    					<td> {{Auth::user()->email}}</td>
		                    				</tr>
		                    				<tr>
		                    					<th>Role:</th>
		                    					<td> {{Auth::user()->roles()->pluck('name')->implode(', ')}}</td>
		                    				</tr>
		                    			</table>
		                    		</div>
		                    	</div>
		                    	<div class="col-md-4 col-sm-4">
		                    		<img class="admin_img float-right" src="{{ asset('user_photo/'.Auth::user()->photo) }}">
		                    		<a class="cng float-right" href="#" data-toggle="modal" data-target="#cngModal">Change Photo</a>
		                    	</div>
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="cngModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <p class="text-center modal_head" style="border-bottom: 1px solid #2b8a78;">Change Photo</p>
                    <div class="modal-body">
                    	<div class="container">
                    		<div class="row">
                    			<div class="col-md-12 col-sm-12">
		                    		<div class="admin_user">
		                    			<form action=" {{ url('user/photo/cng') }} " method="post" enctype="multipart/form-data">

										@csrf

										<input name="id" value="{{Auth::user()->id}}" type="hidden">
										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label float-right">Upload Photo</label>
											</div>
											<div class="col-sm-8">
												<input type="file" name="photo" class="form-control autonumber" required>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label"></label>
											</div>
											<div class="col-sm-8">
												<button type="submit" class="btn btn-sm btn-primary m-b-0">Update</button>
											</div>
										</div>

									</form>
		                    		</div>
		                    	</div>
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>