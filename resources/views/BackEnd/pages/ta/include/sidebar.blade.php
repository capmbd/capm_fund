				<div class="pcoded-main-container">
					<div class="pcoded-wrapper">
						<nav class="pcoded-navbar">
							<div class="nav-list">
								<div class="pcoded-inner-navbar main-menu" id="my_bg_three">
									<ul class="pcoded-item pcoded-left-item">
										<li class="@yield('class1')">
											<a href=" {{ url('/ta') }} " class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="feather icon-home"></i></span>
												<span class="pcoded-mtext">Dashboard</span>
											</a>
										</li>

										<li class="pcoded-hasmenu @yield('classact')">
											<a href="#" class="waves-effect waves-dark">
												<span class="pcoded-micon">
													<i class="feather icon-users"></i>
												</span>
												<span class="pcoded-mtext">Investor Registration</span>
											</a>
											<ul class="pcoded-submenu">
												<li class="@yield('class2')">
													<a href=" {{ url('ta/indv') }} " class="waves-effect waves-dark">
														<span class="pcoded-mtext">Individual</span>
													</a>
												</li>
												<li class="@yield('class9')">
													<a href=" {{ url('ta/inst') }} " class="waves-effect waves-dark">
														<span class="pcoded-mtext">Institutional</span>
													</a>
												</li>
											</ul>
										</li>

										<li class="@yield('class3')">
											<a href=" {{ url('/ta/buy') }} " class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
												<span class="pcoded-mtext">Unit Subscription</span>
											</a>
										</li>

										<li class="@yield('class4')">
											<a href=" {{ url('/ta/sell') }} " class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
												<span class="pcoded-mtext">Unit Surrender</span>
											</a>
										</li>

										<li class="pcoded-hasmenu">
											<a href="#" class="waves-effect waves-dark">
												<span class="pcoded-micon">
													<i class="feather icon-download"></i>
												</span>
												<span class="pcoded-mtext">Downloads XLS Forms</span>
											</a>
											<ul class="pcoded-submenu">
												<li class="">
													<a href=" {{ url('file/CAPMUF Individual Form.xlsx') }} " class="waves-effect waves-dark">
														<span class="pcoded-mtext">Individual</span>
													</a>
												</li>
												<li class="">
													<a href=" {{ url('file/CAPMUF Institution Form.xlsm') }} " class="waves-effect waves-dark">
														<span class="pcoded-mtext">Institutional</span>
													</a>
												</li>
											</ul>
										</li>

										<li class="pcoded-hasmenu @yield('report')">
											<a href="#" class="waves-effect waves-dark">
												<span class="pcoded-micon">
													<i class="feather icon-info"></i>
												</span>
												<span class="pcoded-mtext">TA Report</span>
											</a>
											<ul class="pcoded-submenu">
												<li class="@yield('class5')">
													<a href=" {{ url('ta/app_list') }} " class="waves-effect waves-dark">
														<span class="pcoded-mtext">Applicant List</span>
													</a>
												</li>
												<li class="@yield('class6')">
													<a href=" {{ url('ta/unit_sub_list') }} " class="waves-effect waves-dark">
														<span class="pcoded-mtext">Unit Subscription list</span>
													</a>
												</li>

												<li class="@yield('class7')">
													<a href=" {{ url('ta/unit_sur_list') }} " class="waves-effect waves-dark">
														<span class="pcoded-mtext">Unit Surrender list</span>
													</a>
												</li>
												
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</nav>