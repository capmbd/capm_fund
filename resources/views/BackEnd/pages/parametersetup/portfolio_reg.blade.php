@extends('BackEnd.master_one')
@section('title')
	Portfolio Registration
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
							<a href=" {{ url('/parameters-setup/portfolio-registration') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/parameters-setup/portfolio-registration') }} ">Portfolio Registration</a></li>
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
									<h5>Portfolio Registration</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="por_reg" action="{{ url('parameters-setup/portfolio-registration/save') }}" method="post">
										@csrf
										<div class="row">
											<div class="col-md-5 col-sm-5">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Portfolio Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="PORTFOLIO_NAME" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Portfolio Type</label>
													</div>
													<div class="col-sm-8">
														<select name="PORTFOLIO_TYPE_ID" id="PORTFOLIO_TYPE_ID" class="col-sm-12 form-select">
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
														<input type="text" name="SYMBOL" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Face Value</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="FACEVALUE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Sponsor</label>
													</div>
													<div class="col-sm-8">
														<select name="SPONSOR_ID" class="col-sm-12 form-select">
															<option value="">---Select Sponsor---</option>
															@foreach( $sponsors as $sponsor )
															<option value="{{$sponsor->SPON_ID}}">{{$sponsor->COMPANY_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Asset Manager</label>
													</div>
													<div class="col-sm-8">
														<select name="ASSET_MANAGER_ID" class="col-sm-12 form-select">
															<option value="">---Select Asset Manager---</option>
															@foreach( $asset_mgrs as $asset_mgr )
															<option value="{{$asset_mgr->MANAGER_ID}}">{{$asset_mgr->MANAGER_COMPANY_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Custodian</label>
													</div>
													<div class="col-sm-8">
														<select name="CUSTODIAN_ID" class="col-sm-12 form-select">
															<option value="">---Select Custodian---</option>
															@foreach( $custs as $cust )
															<option value="{{$cust->CUSTODIAN_ID}}">{{$cust->CUSTODIAN_COMPANY_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Trustee</label>
													</div>
													<div class="col-sm-8">
														<select name="TRUSTEE_ID" class="col-sm-12 form-select">
															<option value="">---Select Trustee---</option>
															@foreach( $trsts as $trst )
															<option value="{{$trst->TRUSTEE_ID}}">{{$trst->TRUSTEE_COMPANY_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Lot Size for Individua</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="LOT_SIZ_INDI" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Lot Size for Institutional</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="LOT_SIZ_INST" class="form-control autonumber">
													</div>
												</div>
											</div>


											<div class="col-md-7 col-sm-7">
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Initial Fund Size</label>
													</div>
													<div class="col-sm-7">
														<input type="text" name="INI_FUND_SIZ" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Application Period</label>
													</div>
													<div class="col-sm-7">
														<input type="text" name="period" id="period" class="form-control autonumber" placeholder="Days">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Application Period Start Date</label>
													</div>
													<div class="col-sm-7">
														<input type="date" onchange="newDate()" name="APPL_START_DATE" id="APPL_START_DATE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Application Period End Date</label>
													</div>
													<div class="col-sm-7">
														<input type="text" readonly="readonly" name="APPL_END_DATE" id="APPL_END_DATE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">General Investor Lock-in Days</label>
													</div>
													<div class="col-sm-7">
														<input type="text" name="GEN_INV_LKIN_DAY" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Sponsor Investor Lock-in Days</label>
													</div>
													<div class="col-sm-7">
														<input type="text" name="SPN_INV_LKIN_DAY" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Fund Start Date</label>
													</div>
													<div class="col-sm-7">
														<input type="date" name="FUND_START_DATE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">For Individual Subscribers</label>
													</div>
													<div class="col-sm-7">
														<input type="text" name="INDV_SUBS" class="form-control autonumber" placeholder="Lot">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">For Institutional Subscribers</label>
													</div>
													<div class="col-sm-7">
														<input type="text" name="INST_SUBS" class="form-control autonumber" placeholder="Lot">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Commission For Sales Agent</label>
													</div>
													<div class="col-sm-7">
														<input type="text" name="COMMISSION" class="form-control autonumber">
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
				PORTFOLIO_TYPE_ID:{
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
				COMMISSION:{
					required:true,
					number:true
				}
			},
			messages: {
				PORTFOLIO_NAME:{
					required: "Enter Portfolio Name"
				},
				PORTFOLIO_TYPE_ID:{
					required: "Enter Portfolio Type"
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
</script>
@endpush