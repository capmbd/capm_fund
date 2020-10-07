				<div class="pcoded-main-container">
					<div class="pcoded-wrapper">
						<nav class="pcoded-navbar">
							<div class="nav-list">
								<div class="pcoded-inner-navbar main-menu">
									<ul class="pcoded-item pcoded-left-item">
										<li class="@yield('class1')">
											<a href=" {{ url('/home') }} " class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="feather icon-home"></i></span>
												<span class="pcoded-mtext">Dashboard</span>
											</a>
										</li>

										<li class="@yield('class2')">
											<a href=" {{ url('/control-panel') }} " class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="feather icon-layers"></i></span>
												<span class="pcoded-mtext">Control Panel</span>
											</a>
										</li>

										<li class="@yield('class3')">
											<a href=" {{ url('/subscription-redumption') }} " class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
												<span class="pcoded-mtext">Subscription Redumption</span>
											</a>
										</li>

										<li class="@yield('class4')">
											<a href=" {{ url('/trading') }} " class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="feather icon-menu"></i></span>
												<span class="pcoded-mtext">Listed Securities Trading</span>
											</a>
										</li>

										<li class="@yield('class5')">
											<a href=" {{ url('/instruments-investment') }} " class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="feather icon-star"></i></span>
												<span class="pcoded-mtext">Instruments Investment</span>
											</a>
										</li>

										<li class="@yield('class6')">
											<a href=" {{ url('/portfolio-accounts') }} " class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
												<span class="pcoded-mtext">Portfolio Accounts</span>
											</a>
										</li>

										<li class="@yield('class7')">
											<a href=" {{ url('/corporate-action') }} " class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="feather icon-link"></i></span>
												<span class="pcoded-mtext">Corporate Action</span>
											</a>
										</li>

										

										
										<li class="@yield('class8')">
											<a href=" {{ url('/parameters-setup') }} " class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="feather icon-settings"></i></span>
												<span class="pcoded-mtext">Parameters Setup</span>
											</a>
										</li>
										

										<li class="@yield('class9')">
											<a href=" {{ url('/register') }} " class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="feather icon-users"></i></span>
												<span class="pcoded-mtext">Employee Setup</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>