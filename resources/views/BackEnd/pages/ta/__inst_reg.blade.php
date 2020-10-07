@extends('BackEnd.pages.ta.master')
@section('title')
	Portfolio Registration
@endsection
@section('class9')
	active
@endsection
@section('classact')
	active pcoded-trigger
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
@section('main-content-ta')
<div class="pcoded-content">
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href=" {{ url('/ta/inst') }} ">
								<i class="feather icon-users"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/ta/inst') }} ">Institutional Registration</a></li>
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
									<h5>Institutional Registration</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="ind_reg" action="{{ url('/ta/inst/save') }}" method="post" enctype="multipart/form-data">
										@csrf

										<?php
											$taId = Session::get('ta_id');
											$userId = Session::get('ta_code');
										?>

										<input type="hidden" name="ta_id" value="{{$taId}}">
										<input type="hidden" name="ta_code" value="{{$userId}}">

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
														<input type="text" name="INSTNAME" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Types of Institution</label>
													</div>
													<div class="col-sm-8">
														<input type="radio" name="INST_TYPE_FLAG" value="1"> Proprietorship<br>
														<input type="radio" name="INST_TYPE_FLAG" value="2"> Partnership<br>
														<input type="radio" name="INST_TYPE_FLAG" value="3"> Privet Ltd<br>
														<input type="radio" name="INST_TYPE_FLAG" value="4"> Public Ltd<br>
														<input type="radio" name="INST_TYPE_FLAG" value="5"> Other
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Trade License/Registration No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="TRADE_LICENSE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Mailing Address</label>
													</div>
													<div class="col-sm-8">
														<textarea class="form-control autonumber" name="ADDRESS" rows="3"></textarea>
													</div>
												</div>
											</div>


											<div class="col-md-5 col-sm-5">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">TIN No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="TIN_NO" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">BO ID No.(If Any)</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="BO_ID" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Post-Code</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="POST_CODE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Telephone no</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="TEL" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">E-mail</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="EMAIL" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Fax</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="FAX" class="form-control autonumber">
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
														<input type="text" name="ACCOUNT_NAME" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Bank Account No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="ACCOUNT_NO" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Bank Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="BANK_NAME" class="form-control autonumber">
													</div>
												</div>
											</div>


											<div class="col-md-5 col-sm-5">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Routing No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="ROUTING_NO" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Branch Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="BRANCH" class="form-control autonumber">
													</div>
												</div>
											</div>

											<div class="col-md-12 col-sm-12">
												<p class="div_text">Preferred Dividend Option
													<span>
														<input type="radio" value="CIP" name="DIVIDENT_OPT">Cumulative Investment Plan (CIP)
														<input type="radio" value="Cash" name="DIVIDENT_OPT">Cash
													</span>
												</p>
											</div>

											<div class="col-md-12 col-sm-12">
												<p class="div_text">Authorized Person/POA Details-1
													<span>
														<input type="radio" value="Mr." name="GENDER">Mr.
														<input type="radio" value="Mrs." name="GENDER">Mrs.
														<input type="radio" value="Ms." name="GENDER">Ms.
													</span>
												</p>
											</div>

											<div class="col-md-7 col-sm-7">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="NAME" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Designation</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="DESIG" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Mailing Address</label>
													</div>
													<div class="col-sm-8">
														<textarea class="form-control autonumber" name="A_ADDRESS" rows="3" ></textarea>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Photo</label>
													</div>
													<div class="col-sm-8">
														<input type="file" name="AUTH_IMG_PATH" id="AUTH_IMG_PATH">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Signature</label>
													</div>
													<div class="col-sm-8">
														<input type="file" name="AUTH_SIGNATURE" id="AUTH_SIGNATURE">
													</div>
												</div>
												
											</div>

											<div class="col-md-5 col-sm-5">

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">National ID/Passport No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="NATIONAL_ID" class="form-control autonumber">
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Date of Birth</label>
													</div>
													<div class="col-sm-8">
														<input type="date" name="BIRTHDAY" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Contract No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="MOBILE_NO" class="form-control autonumber">
													</div>
												</div>
											</div>

											<div class="row form-group">
												<div class="col-sm-2">
													<button type="submit" id="submitbtn" class="btn btn-primary m-b-0">Submit</button>
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
<script type="text/javascript" src="{{asset('BackEnd/files/assets/js/bootbox.min.js')}}"></script>
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

<script type="text/javascript">
            var image = document.getElementById("AUTH_IMG_PATH");
            image.onchange = function() {
            	var type = image.value;
            	var check = /(\.jpg|\.jpeg|\.png)$/i;
                if(!check.exec(type)){
                	bootbox.alert({
							message: "<span style='color: red;'>Please Upload JPG, JPEG or PNG !!!</span>",
							backdrop: true
						});
	                    this.value = "";
                }else{
                	if(this.files[0].size >= 512000){
	                    bootbox.alert({
							message: "<span style='color: red;'>Upload Image Must be Less or Equal 500 KB !!!</span>",
							backdrop: true
						});
	                    this.value = "";
	                };
                }
            };

            var sign = document.getElementById("AUTH_SIGNATURE");
            sign.onchange = function() {
                var type = sign.value;
            	var check = /(\.jpg|\.jpeg|\.png)$/i;
                if(!check.exec(type)){
                	bootbox.alert({
							message: "<span style='color: red;'>Please Upload JPG, JPEG or PNG !!!</span>",
							backdrop: true
						});
	                    this.value = "";
                }else{
                	if(this.files[0].size >= 512000){
	                    bootbox.alert({
							message: "<span style='color: red;'>Upload Image Must be Less or Equal 500 KB !!!</span>",
							backdrop: true
						});
	                    this.value = "";
	                };
                }
            };
        </script>

<script>
    $(document).ready(function () {

        $("#ind_reg").submit(function (e) {
            $("#submitbtn").attr("disabled", true);
            return location.reload(true);
        });
    });
</script>



@endpush