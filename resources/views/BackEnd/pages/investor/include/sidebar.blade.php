<div class="pcoded-main-container">
	<div class="pcoded-wrapper">
		<nav class="pcoded-navbar">
			<div class="nav-list">
				<div class="pcoded-inner-navbar main-menu" id="my_bg_three">
					<ul class="pcoded-item pcoded-left-item">
						<li class="@yield('class1')">
							<a href=" {{ url('/inv') }} " class="waves-effect waves-dark">
								<span class="pcoded-micon"><i class="feather icon-home"></i></span>
								<span class="pcoded-mtext">Dashboard</span>
							</a>
						</li>
						<li class="pcoded-hasmenu @yield('report')">
							<a href="#" class="waves-effect waves-dark">
								<span class="pcoded-micon">
									<i class="feather icon-info"></i>
								</span>
								<span class="pcoded-mtext">Investor Report</span>
							</a>
							<ul class="pcoded-submenu">
								<li class="@yield('class2')">
									<a href=" {{ url('inv/sub_rpt') }} " class="waves-effect waves-dark">
										<span class="pcoded-mtext">Subscription Report</span>
									</a>
								</li>
								<li class="@yield('class3')">
									<a href=" {{ url('inv/sur_rpt') }} " class="waves-effect waves-dark">
										<span class="pcoded-mtext">Surrender Report</span>
									</a>
								</li>
								
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>