@extends('BackEnd.master_one')

@section('title')
	Home
@endsection

@section('class1')
	active
@endsection

@section('main-content')
						<div class="pcoded-content">
							<div class="page-header">
								<div class="page-block">
									<div class="row align-items-center">
										<div class="col-md-12">

											@if ($succ = Session::get('msg'))
												<div class="alert alert-success alert-dismissible">
  													<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  													<strong>{{$succ}}</strong>
												</div>
											@endif

											@if ($failed = Session::get('messagend'))
												<div class="alert alert-danger alert-dismissible">
  													<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  													<strong>{{$failed}}</strong>
												</div>
											@endif

											<ul class="breadcrumb">
												<li class="breadcrumb-item">
													<a href=" {{ url('/home') }} ">
														<i class="feather icon-home"></i>
													</a>
												</li>
												<li class="breadcrumb-item"><a href=" {{ url('/home') }} ">Dashboard</a></li>
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
												<div class="col-xl-6 col-md-12">
													<div class="card proj-t-card">
														<div class="card-body">
															<div class="row align-items-center m-b-30">
																<div class="col-auto">
																</div>
																<div class="col p-l-0">
																	<h5 style="width: 350px" class="m-b-5 f-w-700">Last Update Date of NAV CAPM Unit Fund</h5>
																</div>
															</div>
															<div class="row align-items-center text-center">
																<div class="col">
																	<h6 class="my_color_one m-b-0">Subscription Price:( {{$capm_fund->BUY_RATE}} )</h6>
																</div>
																<div class="col">
																	<h6 class="my_color_one m-b-0">Surrender Price : ( {{$capm_fund->SELL_RATE}} )</h6>
																</div>
															</div>
															<h6 class="pt-badge my_bg_one">

																<?php
		      														$date = strtotime($capm_fund->updated_at);
		      														$ndate = date('d-m-Y', $date);
		      													?>
      															{{$ndate}}
															</h6>
														</div>
													</div>
												</div>
											<!--	<div class="col-xl-6 col-md-6">
													<div class="card proj-t-card">
														<div class="card-body">
															<div class="row align-items-center m-b-30">
																<div class="col-auto">
																</div>
																<div class="col p-l-0">
																	<h5 style="width: 350px" class="m-b-5 f-w-700">Last Update Date of NAV Test Islamic Unit Fund</h5>
																</div>
															</div>
															<div class="row align-items-center text-center">
																<div class="col">
																	<h6 class="my_color_two m-b-0">SurrenderPrice : ( 11 )</h6>
																</div>
																<div class="col">
																	<h6 class="my_color_two m-b-0">Subscription Price: ( 12 )</h6>
																</div>
															</div>
															<h6 class="pt-badge my_bg_two">13-08-2018</h6>
														</div>
													</div>
												</div> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
@endsection