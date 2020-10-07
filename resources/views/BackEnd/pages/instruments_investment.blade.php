@extends('BackEnd.master_one')
@section('title')
	Instruments Investment
@endsection

@section('class5')
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
							<a href=" {{ url('/instruments-investment') }} ">
								<i class="feather icon-star"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/instruments-investment') }} ">Instruments Investment</a></li>
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
									<h6 class="text-white m-b-0"><i class="feather icon-star"></i> Investment Bonds</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Make Investment in Bonds</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Payable For Investment In Bonds</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Bond Price Update</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Encashment of Bonds</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-star"></i> Investment Bonds Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Bonds in Holding</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Existing Bonds Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Matured Bonds Report</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-star"></i> Investment FDR</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Make Investment in FDR</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Existing FDR Application</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">FDR Encashment</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-star"></i> Investment FDR Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">FDR Holding Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Matured FDR Report</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-star"></i> Investment IPO</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">IPO Investment</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Send IPO Applications</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">IPO Return</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-star"></i> Investment IPO Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">IPO Applications Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">IPO Return Report</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-star"></i> Investment Open End Funds</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Make Investment in Open End Funds</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Approved Open End Fund Units Buy Application</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Make Open End Fund Units Sell</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Send Open End Fund Units Sell Order</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Open End Fund Price Update</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-star"></i> Investment Open End Funds Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Open End Funds Purchase Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Open End Funds in Holding</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-star"></i> Investment Other Placement Securities</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Make Investment in Other Placement Securities</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Approved Other Placement Securities Buy Application</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Make Other Placement Securities Sell</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Send Other Placement Securities Sell Order</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Placement Investment Price Update</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-star"></i> Private Investment</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Unlisted Security Investment</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Payable Unlisted Security</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Receivable Unlisted Security</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Private Investment Price Update</a>
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
									<h6 class="text-white m-b-0"><i class="feather icon-star"></i> Private Investment Reports</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Unlisted Securities Report</a>
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