@extends('BackEnd.master_one')

@section('title')
	Corporate Action
@endsection

@section('class7')
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
							<a href=" {{ url('/corporate-action') }} ">
								<i class="feather icon-link"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/corporate-action') }} ">Corporate Action</a></li>
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
									<h6 class="text-white m-b-0"><i class="feather icon-link"></i> Export Holding Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="corporate-action/uf-export">Unit Fund</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-link"></i> Dividend</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="/corporate-action/dividend">Dividend Setup</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="/corporate-action/view_dividend">View Dividend</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="/corporate-action/calculation">Import File For Calculation</a>
													</td>
												</tr>
												<!--tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Equity Share Dividend Record Processing</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Placement Dividend Record Processing</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Private Dividend Record Processing</a>
													</td>
												</tr-->
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-link"></i> Dividend / Declaration Notice</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="corporate-action/dividend-warrant">Dividend Warrant</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="corporate-action/dvdn-report">Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="corporate-action/recon">Reconciliation</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-link"></i> Dividend Record Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Earned Cash Dividend Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Earned Stock Dividend Report</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-link"></i> Interest Calculation</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Calculation Bond Interest With Interval</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Interest Calculation From Bank Deposit</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-link"></i> Interest Calculation Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Interest Calculation From Bank Deposit Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Interest Calculation From Bonds Report</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-link"></i> Merger</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Merger Calculation And Record</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Merger Record Process</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-link"></i> Merger Record Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Earned Merger Record Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Merger Record Report</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-link"></i> Open End, Non Listed Funds Dividend</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Mutual Fund Dividend Record Processing</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-link"></i> Right Share</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Right Share Recorde Processing</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Right Share Processing</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-link"></i> Right Share Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Earned Right Share Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Right Share Effective Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Right Share History</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Right Share Renounce History</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-link"></i> Split Share</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Split Calculation and record</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-link"></i> Split Share Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Split Share Effective Report</a>
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