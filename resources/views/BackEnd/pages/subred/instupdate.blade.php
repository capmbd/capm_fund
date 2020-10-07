@extends('BackEnd.master_one')

@section('title')
	Investor Registration Info
@endsection

@section('class3')
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
							<a href=" # ">
								<i class="feather icon-pie-chart"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" # ">Institutional Investor Info</a></li>
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
									<h5>Institutional Investor Info</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="ind_reg" action="{{url('/subscription-redumption/inst-reginfo/updata')}}" method="post" enctype="multipart/form-data">
										@csrf

										<input type="hidden" value="{{$data->REGISTRATION_NO}}" name="rinstid" required>

										<div class="row">
											<div class="col-md-12 col-sm-12">
												<p class="div_text">Principal Applicant's Details</p>
											</div>
											<div class="col-md-7 col-sm-7">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Name of Institution</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->INSTNAME}}" name="INSTNAME" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Types of Institution</label>
													</div>
													<div class="col-sm-8">
														<input type="radio" name="INST_TYPE_FLAG" value="1" {{ $data->INST_TYPE_FLAG == '1' ? 'checked' : '' }}> Proprietorship<br>
														<input type="radio" name="INST_TYPE_FLAG" value="2" {{ $data->INST_TYPE_FLAG == '2' ? 'checked' : '' }}> Partnership<br>
														<input type="radio" name="INST_TYPE_FLAG" value="3" {{ $data->INST_TYPE_FLAG == '3' ? 'checked' : '' }}> Privet Ltd<br>
														<input type="radio" name="INST_TYPE_FLAG" value="4" {{ $data->INST_TYPE_FLAG == '4' ? 'checked' : '' }}> Public Ltd<br>
														<input type="radio" name="INST_TYPE_FLAG" value="5" {{ $data->INST_TYPE_FLAG == '5' ? 'checked' : '' }}> Other
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Trade License/Registration No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->TRADE_LICENSE}}" name="TRADE_LICENSE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Mailing Address</label>
													</div>
													<div class="col-sm-8">
														<textarea class="form-control autonumber" name="ADDRESS" rows="3">{{$data->ADDRESS}}</textarea>
													</div>
												</div>
											</div>


											<div class="col-md-5 col-sm-5">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">TIN No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->TIN_NO}}" name="TIN_NO" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">BO ID No.(If Any)</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->BO_ID}}" name="BO_ID" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Post-Code</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->POST_CODE}}" name="POST_CODE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Telephone no</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->TEL}}" name="TEL" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">E-mail</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->EMAIL}}" name="EMAIL" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Fax</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->FAX}}" name="FAX" class="form-control autonumber">
													</div>
												</div>
											</div>


											<div class="col-md-12 col-sm-12">
												<p class="div_text">Bank Details</p>
											</div>

											<div class="col-md-7 col-sm-7">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Account Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->ACCOUNT_NAME}}" name="ACCOUNT_NAME" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Bank Account No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->ACCOUNT_NO}}" name="ACCOUNT_NO" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Bank Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->BANK_NAME}}" name="BANK_NAME" class="form-control autonumber">
													</div>
												</div>
											</div>


											<div class="col-md-5 col-sm-5">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Routing No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->ROUTING_NO}}" name="ROUTING_NO" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Branch Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->BRANCH}}" name="BRANCH" class="form-control autonumber">
													</div>
												</div>
											</div>

											<div class="col-md-12 col-sm-12">
												<p class="div_text">Preferred Dividend Option
													<span>
														<input type="radio" value="CIP" name="DIVIDENT_OPT" {{ $data->DIVIDENT_OPT == 'CIP' ? 'checked' : '' }}>Cumulative Investment Plan (CIP)
														<input type="radio" value="Cash" name="DIVIDENT_OPT" {{ $data->DIVIDENT_OPT == 'Cash' ? 'checked' : '' }}>Cash
													</span>
												</p>
											</div>

											<div class="row form-group">
												<div class="col-sm-2">
													<button type="submit" class="btn btn-primary m-b-0">Submit</button>
												</div>
											</div>
										</div>
									</form>	

								</div>
							</div>
						</div>

						<div class="col-lg-12 col-xl-12">
							<div class="card">
								<div class="my_bg_one" style="padding: 2px 3px; margin-top: 2px">
									<h6 class="text-white m-b-0">Authorized Person For {{$data->REGISTRATION_NO}}</h6>
								</div>

								<div class="card-block p-b-0">
									<div class="table-responsive">
										<table id="indv_tbl" class="table table-bordered tbl_dta" style="border-top: 1px solid #dee2e6;">
    										<thead>
      											<tr>
        											<th>Name</th>
        											<th>Designation</th>
        											<th>National ID/Passport No.</th>
        											<th>Contract No.</th>
        											<th class="text-center">View/Update</th>
      											</tr>
    										</thead>
    										<tbody>
      											<tr>
      											@foreach ($datas as $auth_per)
      												<td>{{$auth_per->AUTH_GENDER}} {{$auth_per->AUTH_NAME}}</td>
                									<td>{{$auth_per->AUTH_DESIG}}</td>
                									<td>{{$auth_per->AUTH_NATIONAL_ID}}</td>
                									<td>{{$auth_per->AUTH_MOBILE_NO}}</td>

                									<?php
                										$ath = encrypt($auth_per->AUTH_PER_ID);
                									?>
        											
      												<td class="text-center">
														<a href="{{url('/subscription-redumption/auth-per-edit/'.$ath)}}" data-toggle="tooltip" title="View / Update"><i class="fas fa-edit"></i> / <i class="fas fa-eye"></i></a>
        											</td>
      											</tr>
      											@endforeach
    										</tbody>
  										</table>
  										<a href="{{url('/subscription-redumption/auth_per/add/'.$data->REGISTRATION_NO)}}" class="btn btn-primary m-b-0">Add</a>
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
<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/jquery.validate.js') }} "></script>
<script type="text/javascript">
	$().ready(function() {
		$("#ind_reg").validate({
			rules: {
				INSTNAME:{
					required:true
				},
				INST_TYPE_FLAG:{
					required:true
				},
				TRADE_LICENSE:{
					required:true
				},
				ADDRESS:{
					required:true
				},
				TIN_NO:{
					required:true
				},
				BO_ID:{
					required:true
				},
				POST_CODE:{
					required:true
				},
				TEL:{
					required:true
				},
				EMAIL:{
					required:true,
					email:true
				},
				FAX:{
					required:true
				},
				DIVIDENT_OPT:{
					required:true
				},
				ACCOUNT_NAME:{
					required:true
				},
				ACCOUNT_NO:{
					required:true
				},
				BANK_NAME:{
					required:true
				},
				ROUTING_NO:{
					required:true
				},
				BRANCH:{
					required:true
				},
				GENDER:{
					required:true
				},
				NAME:{
					required:true
				},
				DESIG:{
					required:true
				},
				A_ADDRESS:{
					required:true
				},
				NATIONAL_ID:{
					required:true
				},
				BIRTHDAY:{
					required:true
				},
				MOBILE_NO:{
					required:true
				}
			},
			messages: {
				INSTNAME:{
					required: "Enter Name of Institution"
				},
				INST_TYPE_FLAG:{
					required: "Enter Types of Institution"
				},
				TRADE_LICENSE:{
					required: "Enter Trade License"
				},
				ADDRESS:{
					required: "Enter Mailing Address"
				},
				TIN_NO:{
					required: "Enter TIN No"
				},
				BO_ID:{
					required: "Enter BO ID"
				},
				POST_CODE:{
					required: "Enter Post Code"
				},
				TEL:{
					required: "Enter Mobile Number"
				},
				EMAIL:{
					required: "Enter Applicant's Email",
					email: "Enter Valid Email Address"
				},
				FAX:{
					required: "Enter FAX"
				},
				DIVIDENT_OPT:{
					required: "Delect Dividend Option"
				},
				ACCOUNT_NAME:{
					required: "Enter Account Name"
				},
				ACCOUNT_NO:{
					required: "Enter Account No"
				},
				BANK_NAME:{
					required: "Enter Bank Name"
				},
				ROUTING_NO:{
					required: "Enter Routing No"
				},
				BRANCH:{
					required: "Enter Branch Name"
				},
				GENDER:{
					required: "Enter Gender"
				},
				NAME:{
					required: "Enter Name"
				},
				DESIG:{
					required: "Enter Designation"
				},
				A_ADDRESS:{
					required: "Enter Address"
				},
				NATIONAL_ID:{
					required: "Enter National Id / Passport"
				},
				BIRTHDAY:{
					required: "Enter Birthday"
				},
				MOBILE_NO:{
					required: "Enter Mobile Number"
				}
			
			}
		});

	});
</script>



@endpush