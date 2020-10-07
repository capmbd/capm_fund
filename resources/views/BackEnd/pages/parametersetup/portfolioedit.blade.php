@extends('BackEnd.master_one')
@section('title')
	Portfolio Profile Details
@endsection
@section('class8')
	active
@endsection
@push('css')
	<style type="text/css">
		label.error {
			color: #CC0000;
			font-weight: 300;
		}
		label span{
			color: red;
		}
	</style>
@endpush
@section('main-content')
<div class="pcoded-content">
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="#">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Portfolio Profile Details</a></li>
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
						<div class="col-lg-12 col-xl-12">
							<div class="card">
								<div class="card-header">
									<h5>Portfolio Details</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="por_reg" action="{{ url('parameters-setup/portfolio-registration/update') }}" method="post">
										@csrf

										<input type="hidden" value="{{$profiles->PRO_REG_ID}}" name="proid" required>

										<div class="row">
											<div class="col-md-5 col-sm-5">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Portfolio Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$profiles->PORTFOLIO_NAME}}" name="PORTFOLIO_NAME" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Portfolio Type</label>
													</div>
													<div class="col-sm-8">
														<select name="PORTFOLIO_TYPE_ID" id="PORTFOLIO_TYPE_ID" class="col-sm-12 form-select">
															<option value="{{$profiles->PORTFOLIO_TYPE_ID}}">{{$profiles->PORTFOLIO_TYPE}}</option>
															<option value="">---Select Portfolio Type---</option>
															@foreach($por_types as $por_type)
															<option value="{{$por_type->PORTFOLIO_TYPE_ID}}">{{$por_type->PORTFOLIO_TYPE}}</option>
															@endforeach
														</select>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Symbol</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$profiles->SYMBOL}}" name="SYMBOL" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Face Value</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$profiles->FACEVALUE}}" name="FACEVALUE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Sponsor</label>
													</div>
													<div class="col-sm-8">
														<select name="SPONSOR_ID" class="col-sm-12 form-select">
															<option value="{{$profiles->SPON_ID}}">{{$profiles->COMPANY_NAME}}</option>
															<option value="">---Select Sponsor---</option>
															@foreach( $sponsors as $sponsor )
															<option value="{{$sponsor->SPON_ID}}">{{$sponsor->COMPANY_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<p>Contact Person</p>
														<p>Phone</p>
														<p>Mobile</p>
														<p>Contact Address</p>
													</div>
													<div class="col-sm-8">
														<p>{{$profiles->SPON_CONTACT_PERSON}}</p>
														<p>{{$profiles->SPON_CONTACT_PHONE}}</p>
														<p>{{$profiles->SPON_CONTACT_MOBILE}}</p>
														<p>{{$profiles->SPON_CONTACT_ADDRESS}}</p>
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Asset Manager</label>
													</div>
													<div class="col-sm-8">
														<select name="ASSET_MANAGER_ID" class="col-sm-12 form-select">
															<option value="{{$profiles->MANAGER_ID}}">{{$profiles->MANAGER_COMPANY_NAME}}</option>
															<option value="">---Select Asset Manager---</option>
															@foreach( $asset_mgrs as $asset_mgr )
															<option value="{{$asset_mgr->MANAGER_ID}}">{{$asset_mgr->MANAGER_COMPANY_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<p>Contact Person</p>
														<p>Phone</p>
														<p>Mobile</p>
														<p>Contact Address</p>
													</div>
													<div class="col-sm-8">
														<p>{{$profiles->MANAGER_CONTACT_PERSON}}</p>
														<p>{{$profiles->MANAGER_CONTACT_PHONE}}</p>
														<p>{{$profiles->MANAGER_CONTACT_MOBILE}}</p>
														<p>{{$profiles->MANAGER_CONTACT_ADDRESS}}</p>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Custodian</label>
													</div>
													<div class="col-sm-8">
														<select name="CUSTODIAN_ID" class="col-sm-12 form-select">
															<option value="{{$profiles->CUSTODIAN_ID}}">{{$profiles->CUSTODIAN_COMPANY_NAME}}</option>
															<option value="">---Select Custodian---</option>
															@foreach( $custs as $cust )
															<option value="{{$cust->CUSTODIAN_ID}}">{{$cust->CUSTODIAN_COMPANY_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<p>Contact Person</p>
														<p>Phone</p>
														<p>Mobile</p>
														<p>Contact Address</p>
													</div>
													<div class="col-sm-8">
														<p>{{$profiles->CUSTODIAN_CONTACT_PERSON}}</p>
														<p>{{$profiles->CUSTODIAN_CONTACT_PHONE}}</p>
														<p>{{$profiles->CUSTODIAN_CONTACT_MOBILE}}</p>
														<p>{{$profiles->CUSTODIAN_CONTACT_ADDRESS}}</p>
													</div>
												</div>
											</div>


											<div class="col-md-7 col-sm-7">

												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Trustee</label>
													</div>
													<div class="col-sm-7">
														<select name="TRUSTEE_ID" class="col-sm-12 form-select">
															<option value="{{$profiles->TRUSTEE_ID}}">{{$profiles->TRUSTEE_COMPANY_NAME}}</option>
															<option value="">---Select Trustee---</option>
															@foreach( $trsts as $trst )
															<option value="{{$trst->TRUSTEE_ID}}">{{$trst->TRUSTEE_COMPANY_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<p>Contact Person</p>
														<p>Phone</p>
														<p>Mobile</p>
														<p>Contact Address</p>
													</div>
													<div class="col-sm-7">
														<p>{{$profiles->TRUSTEE_CONTACT_PERSON}}</p>
														<p>{{$profiles->TRUSTEE_CONTACT_PHONE}}</p>
														<p>{{$profiles->TRUSTEE_CONTACT_MOBILE}}</p>
														<p>{{$profiles->TRUSTEE_CONTACT_ADDRESS}}</p>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Lot Size for Individua</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$profiles->LOT_SIZ_INDI}}" name="LOT_SIZ_INDI" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Lot Size for Institutional</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$profiles->LOT_SIZ_INST}}" name="LOT_SIZ_INST" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Initial Fund Size</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$profiles->INI_FUND_SIZ}}" name="INI_FUND_SIZ" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Application Period</label>
													</div>
													<?php
														$period = strtotime($profiles->APPL_END_DATE) - strtotime($profiles->APPL_START_DATE);
														$day = round($period / (60 * 60 * 24));
													?>
													<div class="col-sm-7">
														<input type="text" value="{{$day}}" name="period" id="period" class="form-control autonumber" placeholder="Days">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Application Period Start Date</label>
													</div>
													<div class="col-sm-7">
														<input type="date" value="{{$profiles->APPL_START_DATE}}" onchange="newDate()" name="APPL_START_DATE" id="APPL_START_DATE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Application Period End Date</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$profiles->APPL_END_DATE}}" readonly="readonly" name="APPL_END_DATE" id="APPL_END_DATE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">General Investor Lock-in Days</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$profiles->GEN_INV_LKIN_DAY}}" name="GEN_INV_LKIN_DAY" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Sponsor Investor Lock-in Days</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$profiles->SPN_INV_LKIN_DAY}}" name="SPN_INV_LKIN_DAY" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Fund Start Date</label>
													</div>
													<div class="col-sm-7">
														<input type="date" value="{{$profiles->FUND_START_DATE}}" name="FUND_START_DATE" id="FUND_START_DATE" class="form-control autonumber">
													</div>
												</div>

												@if($profiles->OPEN_CLOSE_FLAG == 0)
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Fund Operation Period</label>
													</div>
													<div class="col-sm-2">
														<input type="number" value="0" id="year" min="0" name="year" class="form-control autonumber" placeholder="Y">
													</div>
													<div class="col-sm-2">
														<input type="number" value="0" id="month" name="month" min="0" max="12" class="form-control autonumber" placeholder="M">
													</div>
													<div class="col-sm-3">
														<input type="number" value="0" id="day" name="day" min="0" max="365" class="form-control autonumber" placeholder="D">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Fund Close Date</label>
													</div>
													<div class="col-sm-7">
														<input type="text" onclick="endDate()" value="{{$profiles->FUND_CLOSE_DATE}}" name="FUND_CLOSE_DATE" id="FUND_CLOSE_DATE" class="form-control autonumber" readonly="readonly">
													</div>
												</div>
												@endif

												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">For Individual Subscribers</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$profiles->INDV_SUBS}}" name="INDV_SUBS" class="form-control autonumber" placeholder="Lot">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">For Institutional Subscribers</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$profiles->INST_SUBS}}" name="INST_SUBS" class="form-control autonumber" placeholder="Lot">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Commission For Sales Agent</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$profiles->COMMISSION}}" name="COMMISSION" class="form-control autonumber">
													</div>
												</div>

												<br>
												<div class="row form-group">
													
													<div class="col-sm-8">
														<button type="submit" class="btn btn-primary m-b-0">Submit</button>
													</div>
												</div>
											</div>
										</div>
										
									</form>

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
<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/jquery.validate.js') }} "></script>
<script type="text/javascript">
	$().ready(function() {
		$("#por_reg").validate({
			rules: {
				PORTFOLIO_NAME:{
					required:true
				},
				SYMBOL:{
					required:true
				},
				FACEVALUE:{
					required:true,
					number:true
				},
				SPONSOR_ID:{
					required:true
				},
				ASSET_MANAGER_ID:{
					required:true
				},
				CUSTODIAN_ID:{
					required:true
				},
				TRUSTEE_ID:{
					required:true
				},
				LOT_SIZ_INDI:{
					required:true,
					number:true
				},
				LOT_SIZ_INST:{
					required:true,
					number:true
				},
				INI_FUND_SIZ:{
					required:true,
					number:true
				},
				APPL_START_DATE:{
					required:true
				},
				GEN_INV_LKIN_DAY:{
					required:true,
					number:true
				},
				SPN_INV_LKIN_DAY:{
					required:true,
					number:true
				},
				FUND_START_DATE:{
					required:true
				},
				INDV_SUBS:{
					required:true,
					number:true
				},
				INST_SUBS:{
					required:true,
					number:true
				},
				FUND_CLOSE_DATE:{
					required:true
				},
				COMMISSION:{
					required:true,
					number:true
				}
			},
			messages: {
				PORTFOLIO_NAME:{
					required: "Enter Portfolio Name"
				},
				SYMBOL:{
					required: "Enter Symbol"
				},
				FACEVALUE:{
					required: "Enter Face Value",
					number: "Face Value Must be Number"
				},
				SPONSOR_ID:{
					required: "Enter Sponsor"
				},
				ASSET_MANAGER_ID:{
					required: "Enter Asset Manager"
				},
				CUSTODIAN_ID:{
					required: "Enter Custodian"
				},
				TRUSTEE_ID:{
					required: "Enter Trustee"
				},
				LOT_SIZ_INDI:{
					required: "Enter Lot Size for Individua",
					number: "Lot Size Must be Number"
				},
				LOT_SIZ_INST:{
					required: "Enter Lot Size for Institutional",
					number: "Lot Size Must be Number"
				},
				INI_FUND_SIZ:{
					required: "Enter Initial Fund Size",
					number: "Fund Size Must be Number"
				},
				APPL_START_DATE:{
					required: "Application Period Start Date"
				},
				GEN_INV_LKIN_DAY:{
					required: "Enter General Investor Lock-in Days",
					number: "Lock-in Days Must be Number"
				},
				SPN_INV_LKIN_DAY:{
					required: "Enter Sponsor Investor Lock-in Days",
					number: "Lock-in Days Must be Number"
				},
				FUND_START_DATE:{
					required: "Enter Fund Start Date"
				},
				INDV_SUBS:{
					required: "Enter Individual Subscribers",
					number: "Subscribers Must be Number"
				},
				INST_SUBS:{
					required: "Enter Institutional Subscribers",
					number: "Subscribers Must be Number"
				},
				FUND_CLOSE_DATE:{
					required: "Enter Year / Month / Day"
				},
				COMMISSION:{
					required: "Enter Sales Agent Commission",
					number: "Commission Must be Number"
				}
			
			}
		});

	});
</script>

<script type="text/javascript">

	function newDate() {

  		var period = parseInt(document.getElementById("period").value);
  		var date = new Date(document.getElementById("APPL_START_DATE").value);

  		if(!period){
  			document.getElementById("APPL_END_DATE").value = date.toISOString().slice(0,10);
  		}
  		else{
  			date.setDate(date.getDate() + period);
  			document.getElementById("APPL_END_DATE").value = date.toISOString().slice(0,10);
  		}
	}

	function endDate() {

  		var day = parseInt(document.getElementById("day").value);
  		var month = parseInt(document.getElementById("month").value);
  		var year = parseInt(document.getElementById("year").value);
  		var sdate = new Date(document.getElementById("FUND_START_DATE").value);

		var mday = month * 30;
		var yday = year * 365;
		var days = day + mday + yday;

		sdate.setDate(sdate.getDate() + days);
  		document.getElementById("FUND_CLOSE_DATE").value = sdate.toISOString().slice(0,10);
	}
</script>
@endpush