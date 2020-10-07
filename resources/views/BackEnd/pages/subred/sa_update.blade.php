@extends('BackEnd.master_one')

@section('title')
	Sales Agent Update
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
							<a href="#">
								<i class="feather icon-pie-chart"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Sales Agent Update</a></li>
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
						<div class="col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Sales Agent Update</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="sa_form" action=" {{ url('/subscription-redumption/s-a-registration/update') }} " method="post">
										@csrf

										<input type="hidden" value="{{$data->SALESAGENT_ID}}" name="said" required>

										<div class="row">
											<div class="col-md-6 col-sm-6">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Sales Agent Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->SALESAGENT}}" name="SALESAGENT" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Sales Agent Type</label>
													</div>
													<div class="col-sm-8">
														<select name="SA_TYPE" class="col-sm-12 form-select">
															<option value="{{$data->SA_TYPE}}">
																@if($data->SA_TYPE == 1)
        															Individual
        														@elseif($data->SA_TYPE == 2)
        															Corporate
        														@endif
															</option>
															<option value="">---Select Sales Agent Type---</option>
															<option value="1">Individual</option>
															<option value="2">Corporate</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Sales Agent Code</label>
													</div>
													<?php
														$code = str_pad($data->SALESAGENT_CODE, 2, '0', STR_PAD_LEFT);
													?>
													<div class="col-sm-8">
														<input type="text" value="{{$code}}" name="SALESAGENT_CODE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Address</label>
													</div>
													<div class="col-sm-8">
														<textarea type="text" name="ADDRESS" class="form-control autonumber" row="3">{{$data->ADDRESS}}</textarea>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Contact Person</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->CONTACT_PERSON}}" name="CONTACT_PERSON" class="form-control autonumber">
													</div>
												</div>
											</div>
											
											<div class="col-md-6 col-sm-6">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Designation</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->CP_DESIG}}" name="CP_DESIG" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Tel. No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->TEL}}" name="TEL" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Mobile</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->MOBILE}}" name="MOBILE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Fax No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->FAX}}" name="FAX" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Email</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->email}}" name="email" class="form-control autonumber">
													</div>
												</div>
													
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
			$("#sa_form").validate({
				rules: {
					PRO_REG_ID:{
						required:true
					},
					SALESAGENT:{
						required:true
					},
					SA_TYPE:{
						required:true
					},
					SALESAGENT_CODE:{
						required:true,
						number:true
					},
					ADDRESS:{
						required:true
					},
					CONTACT_PERSON:{
						required:true
					},
					MOBILE:{
						required:true
					},
					email:{
						required:true,
						email:true
					}
				},
				messages: {
					PRO_REG_ID:{
						required: "Enter Portfolio"
					},
					SALESAGENT:{
						required: "Enter Sales Agent Name"
					},
					SA_TYPE:{
						required: "Enter Sales Agent Type"
					},
					SALESAGENT_CODE:{
						required: "Enter Sales Agent Code",
						number: "Code Must be Number",
					},
					ADDRESS:{
						required: "Enter Address"
					},
					CONTACT_PERSON:{
						required: "Enter Contact Person Name"
					},
					MOBILE:{
						required: "Enter Mobile Number"
					},
					email:{
						required: "Enter Email Address",
						number: "Enter a Valid Email Address",
					}
				}
			});

		});
</script>
@endpush