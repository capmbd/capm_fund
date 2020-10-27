@extends('BackEnd.master_one')

@section('title')
	Listed Securities Trading
@endsection

@section('class4')
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
													<a href=" {{ url('/listed-securities-trading') }} ">
														<i class="feather icon-menu"></i>
													</a>
												</li>
												<li class="breadcrumb-item"><a href=" {{ url('/listed-securities-trading') }} ">Listed Securities Trading</a></li>
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
															<h6 class="text-white m-b-0"><i class="feather icon-menu"></i> Buy Management</h6>
														</div>
														<div class="card-block p-b-0">
															<div>
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																	<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{url('/trading/instrument_cate')}}">Instrument Category</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{url('/trading/instrument')}}">Instrument</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{url('/trading/broker')}}">Broker Setup</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{url('/trading/sector')}}">Sector Setup</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{url('/trading/stock')}}">Stock Setup</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{url('/trading/torder')}}">Trade Order</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{url('/trading/persetup')}}">Percentage Update</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-menu"></i> Buy Reports</h6>
														</div>
														<div class="card-block p-b-0">
															<div>
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{url('/trading/torder/conf')}}">Buy Confirmation Reports</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{url('/trading/torder/conf/report')}}">Buy Order Reports</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-menu"></i> Current Trade Information (Import)</h6>
														</div>
														<div class="card-block p-b-0">
															<div>
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="#">Import Market Information</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="#">Upload Market Information</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-menu"></i> Daily EOD Process Management</h6>
														</div>
														<div class="card-block p-b-0">
															<div>
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{url('/trading/eod')}}">End Of Day Processing</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="#">Protfolio Holding Reports</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-menu"></i> Sell Management</h6>
														</div>
														<div class="card-block p-b-0">
															<div>
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{url('trading/sellorder')}}">Sell Order</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="#">Send for Approval</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="#">Send Sell Order To Market</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="#">Sell Order Confirmation</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-menu"></i> Sell Report</h6>
														</div>
														<div class="card-block p-b-0">
															<div>
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href=" {{url('/trading/sorder/conf')}} ">Sell Confirmation Reports</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="#">Sell Order Reports</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-menu"></i> Share Stock Report</h6>
														</div>
														<div class="card-block p-b-0">
															<div>
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="#">Share Stock</a>
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