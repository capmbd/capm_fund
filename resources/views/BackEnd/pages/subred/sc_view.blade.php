@extends('BackEnd.master_one')

@section('title')
	Sales Center
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
							<a href=" {{ url('subscription-redumption/s-c-registration/view') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('subscription-redumption/s-c-registration/view') }} ">Sales Center</a></li>
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

						@foreach($salescenters->groupBy('SALESAGENT_ID') as $scgr)

							<div class="card coin-price-card table-card">
								<div style="width: 100%" class="my_bg_one pro_title">
									<h6 class="text-white m-b-0">Sales Agent: {{$scgr[0]->SALESAGENT}}</h6>
								</div>
								<div class="card-block p-b-0">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta" style="border-top: 1px solid #dee2e6;">
    										<thead>
      											<tr>
        											<th>Name</th>
        											<th>Country</th>
        											<th>Currency</th>
        											<th>District</th>
        											<th>Area</th>
        											<th>Code</th>
        											<th>Phone</th>
        											<th>Email</th>
        											<th>User Name</th>
      											</tr>
    										</thead>
    										<tbody>
      											@foreach($scgr as $sc)
      											<tr>
      												<td>{{$sc->SC_NAME}}</td>
      												<td>{{$sc->APPLICANT_COUNTRY_NAME}}</td>
      												<td>{{$sc->CURRENCY}}</td>
      												<td>{{$sc->DISTRICT}}</td>
      												<td>{{$sc->AGENT_AREA}}</td>
        											<?php
														$code = str_pad($sc->SALESAGENT_CODE, 2, '0', STR_PAD_LEFT);
													?>
      												<td>{{$code}}</td>
      												<td>{{$sc->SC_PHONE}}</td>
      												<td>{{$sc->SC_EMAIL}}</td>
      												<td>{{$sc->SCID}}</td>
      											</tr>
      											@endforeach
    										</tbody>
  										</table>
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
</div>
@endsection