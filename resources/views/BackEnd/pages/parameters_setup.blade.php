@extends('BackEnd.master_one')

@section('title')
	Parameters Setup
@endsection

@section('class8')
	active
@endsection

@section('main-content')
<div class="pcoded-content">
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href=" {{ url('/parameters-setup') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/parameters-setup') }} ">Parameters Setup</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<div class="row">
						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-settings"></i> Equity Share Parameter Setup</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Equity Share Parameter Setup</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-settings"></i> Other Operational Parameter Setup</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Other Operational Parameter Setup</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-settings"></i> Portfolio Parameter Setup</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#portfolio_setup" data-toggle="collapse" >Portfolio Parameter Setup</a>
													</td>
												</tr>
											</tbody>
										</table>
										<div id="portfolio_setup" class="panel-collapse collapse home_menu">
											<div class="accordion-content accordion-desc">
												<ul>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/portfolio-type') }} ">Portfolio Type</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/sponsor-add') }} ">Sponsor</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/assetmanager') }} ">Asset Manager</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/trustee') }} ">Trustee</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/auditor') }} ">Auditor</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/custodian') }} ">Custodian</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/bank') }} ">Bank</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/bank-account') }} ">Bank Account</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/district') }} ">District</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/agentarea') }} ">Agent Area</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/investor-type') }} ">Investor Type</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/mgmtfeerule') }} ">Management Fee Rule</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/custfeerule') }} ">Custodian Fee Rule</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/trstfeerule') }} ">Trustee Fee Rule</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/invcountry') }} ">Investror's Country</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/foreign-currency') }} ">Foreign Currency</a>
													</li>
													<li>
														<i class="fa fa-caret-right"></i>
														<a href=" {{ url('/parameters-setup/investment-type') }} ">Investment Type</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-settings"></i> Portfolio Profile</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href=" {{ url('/parameters-setup/portfolio-registration') }} ">Portfolio Registration</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href=" {{ url('/parameters-setup/investmenttype') }} ">Investment Type Setup</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href=" {{ url('/parameters-setup/portfolio-registration/view') }} ">Portfolio Profile</a>
													</td>
												</tr>
											</tbody>
										</table>
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
@endsection
@push('js')
<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/pages/widget/widget-statistic.min.js') }} "></script>
@endpush