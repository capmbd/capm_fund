@extends('BackEnd.master_one')

@section('title')
	Portfolio Profile
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
							<a href=" {{ url('/parameters-setup/portfolio-registration/view') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/parameters-setup/portfolio-registration/view') }} ">Portfolio Profile</a></li>
					</ul>
					<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
				</div>
			</div>
		</div>
	</div>
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<div class="row">
					@foreach($profiles->groupBy('PORTFOLIO_TYPE_ID') as $profile)
					<div class="col-xl-12 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="my_bg_one pro_title">
									<h6 class="text-white m-b-0">Portfolio Type: {{$profile[0]->PORTFOLIO_TYPE}}</h6>
								</div>
								<div class="card-block p-b-0">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta" style="border-top: 1px solid #dee2e6;">
    										<thead>
      											<tr>
        											<th>Portfolio</th>
        											<th>Fund Type</th>
        											<th>Start Date</th>
        											<th>Operation Period(Days)</th>
        											<th>End Date</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      											<tr>
      												@foreach($profile as $pro)
      												<td>{{$pro->PORTFOLIO_NAME}}</td>
                									<td>
        												@if($pro->OPEN_CLOSE_FLAG == 1)
        													Open End
        												@elseif($pro->OPEN_CLOSE_FLAG == 0)
        													Close End
        												@endif
        											</td>
        											<?php
        												$soDate = $pro->FUND_START_DATE;
        												$snDate = date("d-M-Y", strtotime($soDate));
        											?>
      												<td>{{$snDate}}</td>
													<?php
														if(!empty($pro->FUND_CLOSE_DATE)){
															$period = strtotime($pro->FUND_CLOSE_DATE) - strtotime($pro->FUND_START_DATE);
															$day = round($period / (60 * 60 * 24));
      													}
      													else{
															$day = 0;
      													}
													?>
      												<td>{{$day}}</td>
      												<?php
      													if(!empty($pro->FUND_CLOSE_DATE)){
        													$coDate = $pro->FUND_CLOSE_DATE;
        													$cnDate = date("d-M-Y", strtotime($coDate));
        													?>
      														<td>{{$cnDate}}</td>
      														<?php
      													}
      													else{
      														?>
      														<td>{{$pro->FUND_CLOSE_DATE}}</td>
      														<?php
      													}
      												?>
      												<?php
      													$pid = encrypt($pro->PRO_REG_ID);
      												?>
      												<td class="text-center">
														<a href="{{url('/parameters-setup/portfolio-registration/edit/'.$pid)}}" data-toggle="tooltip" title="View / Update"><i class="fas fa-edit"></i> / <i class="fas fa-eye"></i></a>
        											</td>
      											</tr>
      											@endforeach
    										</tbody>
  										</table>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection