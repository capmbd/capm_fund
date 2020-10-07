@extends('BackEnd.master_one')

@section('title')
	Subscription Redumption
@endsection

@section('class3')
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
													<a href=" {{ url('/subscription-redumption') }} ">
														<i class="feather icon-pie-chart"></i>
													</a>
												</li>
												<li class="breadcrumb-item"><a href=" {{ url('/subscription-redumption') }} ">Subscription Redumption</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Oparation Manager Start-->
							<?php
								$permission = Auth::user()->roles->pluck('name')->implode('');
							?>
							@if($permission == 'ExecutiveManager')
							<div class="pcoded-inner-content">
								<div class="main-body">
									<div class="page-wrapper">
										<div class="page-body">
											<div class="row">
												<div class="col-xl-4 col-md-12">
													<div class="card coin-price-card table-card">
														<div class="coin-title my_bg_one">
															<h6 class="text-white m-b-0"><i class="feather icon-pie-chart"></i> Fund Units Purchase</h6>
														</div>
														<div class="card-block p-b-0">
															<div>
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{ url('/subscription-redumption/pending-purchase-manager') }}">Applications For Fund Units Purchase (Pending)</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-pie-chart"></i> Fund Units Repurchase</h6>
														</div>
														<div class="card-block p-b-0">
															<div>
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{ url('/subscription-redumption/pending-sell-manager') }}">Applications For Fund Units Repurchase(Pending)</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-pie-chart"></i> Unit Holders Profile Report</h6>
														</div>
														<div class="card-block p-b-0">
															<div class="table-responsive">
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{ url('/subscription-redumption/inv-reginfo') }}">Register User Profile</a>
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
							@else
							<!-- Oparation Manager End-->

						
							<!-- oparation Executive start-->
							
							<div class="pcoded-inner-content">
								<div class="main-body">
									<div class="page-wrapper">
										<div class="page-body">
											<div class="row">
												<div class="col-xl-4 col-md-12">
													<div class="card coin-price-card table-card">
														<div class="coin-title my_bg_one">
															<h6 class="text-white m-b-0"><i class="feather icon-pie-chart"></i> Fund Units Purchase</h6>
														</div>
														<div class="card-block p-b-0">
															<div>
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{ url('/subscription-redumption/pending-purchase') }}">Applications For Fund Units Purchase (Pending)</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{url('/subscription-redumption/purchdisap')}}">Disapproved Fund Unit Purchase Applications</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-pie-chart"></i> Fund Units Repurchase</h6>
														</div>
														<div class="card-block p-b-0">
															<div>
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{ url('/subscription-redumption/pending-sell') }}">Applications For Fund Units Repurchase(Pending)</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{url('/subscription-redumption/repurchdisap')}}">Disapproved Fund Unit Repurchase Application</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-pie-chart"></i> Fund Units Stock Reports</h6>
														</div>
														<div class="card-block p-b-0">
															<div class="table-responsive">
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="#">Fund Units Purchase Report</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="#">Fund Units Repurchase Reports</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="#">Fund Units Stock Reports</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-pie-chart"></i> Investor Registration Information</h6>
														</div>
														<div class="card-block p-b-0">
															<div class="table-responsive">
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href=" {{ url('/subscription-redumption/inv-reginfo') }} ">Investor Registration Info</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-pie-chart"></i> Sales Agent Wise Unit Sell/Surrender Report</h6>
														</div>
														<div class="card-block p-b-0">
															<div class="table-responsive">
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="#">Sales Agents Business Performance Report</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-pie-chart"></i> Sales Agents</h6>
														</div>
														<div class="card-block p-b-0">
															<div class="table-responsive">
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href=" {{ url('/subscription-redumption/s-a-registration') }} ">Sales Agent Registration</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href=" {{ url('/subscription-redumption/s-a-registration/view') }} ">View Sales Agent</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href=" {{ url('subscription-redumption/s-c-registration') }} ">Sales Center Registration</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href=" {{ url('subscription-redumption/s-c-registration/view') }} ">View Sales Center</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href=" {{ url('subscription-redumption/assign-sc') }} ">Assign Sales Center</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-pie-chart"></i> Sales Center Info</h6>
														</div>
														<div class="card-block p-b-0">
															<div class="table-responsive">
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="#">Sales Center Login Info</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-pie-chart"></i> Unit Holders Profile Report</h6>
														</div>
														<div class="card-block p-b-0">
															<div class="table-responsive">
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{ url('subscription-redumption/unit-holder-profile') }}">Unit Holders Profile</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{ url('subscription-redumption/datewiseholding') }}">Date Wise Holding Report</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-pie-chart"></i> Certificate</h6>
														</div>
														<div class="card-block p-b-0">
															<div class="table-responsive">
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{ url('subscription-redumption/Tax-Certificate') }}">Tax Certificate</a>
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
															<h6 class="text-white m-b-0"><i class="feather icon-pie-chart"></i> Subscription/Surrender Report</h6>
														</div>
														<div class="card-block p-b-0">
															<div class="table-responsive">
																<table class="table table-hover m-b-0 without-header">
																	<tbody>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{ url('subscription-redumption/subscription_report') }}">Subscription Report</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="panel-menu-card">
																				<i class="fas fa-hand-point-right"></i><a href="{{ url('subscription-redumption/surrender_report') }}">Surrender Report</a>
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
							@endif
						</div>
@endsection

@push('js')
	<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/pages/widget/widget-statistic.min.js') }} "></script>
@endpush