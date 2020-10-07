@extends('BackEnd.master_one')

@section('title')
	Sales Agent
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
							<a href=" {{ url('subscription-redumption/s-a-registration/view') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('subscription-redumption/s-a-registration/view') }} ">Sales Agent</a></li>
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
					<div class="col-xl-12 col-md-12">
							<div class="card coin-price-card table-card">
								<div style="width: 100%" class="my_bg_one pro_title">
									<h6 class="text-white m-b-0"></h6>
								</div>
								<div class="card-block p-b-0">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta" style="border-top: 1px solid #dee2e6;">
    										<thead>
      											<tr>
        											<th>Sales Agent</th>
        											<th>Category</th>
        											<th>Code</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      											@foreach($salesagents as $sa)
      											<tr>
      												<td>{{$sa->SALESAGENT}}</td>
                									<td>
        												@if($sa->SA_TYPE == 1)
        													Individual
        												@elseif($sa->SA_TYPE == 2)
        													Corporate
        												@endif
        											</td>
        											<?php
														$code = str_pad($sa->SALESAGENT_CODE, 2, '0', STR_PAD_LEFT);
													?>
      												<td>{{$code}}</td>
      												<?php
      													$said = encrypt($sa->SALESAGENT_ID);
      												?>
      												<td class="text-center">
														<a href="{{url('subscription-redumption/s-a-registration/edit/'.$said)}}" data-toggle="tooltip" title="View / Update"><i class="fas fa-edit"></i> / <i class="fas fa-eye"></i></a>
        											</td>
      											</tr>
      											@endforeach
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