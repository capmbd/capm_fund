@extends('BackEnd.master_one')

@section('title')
	Sales Agent Registration
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
		#check_code{
			color: red;
			font-weight: 300;
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
							<a href=" {{ url('/subscription-redumption/s-a-registration') }} ">
								<i class="feather icon-pie-chart"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/subscription-redumption/s-a-registration') }} ">Sales Agent Registration</a></li>
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
									<h5>Sales Agent Registration</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="sa_form" action=" {{ url('/subscription-redumption/s-a-registration/save') }} " method="post">
										@csrf
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Sales Agent Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="SALESAGENT" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Sales Agent Type</label>
													</div>
													<div class="col-sm-8">
														<select name="SA_TYPE" class="col-sm-12 form-select">
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
													<div class="col-sm-8">
														<input type="text" name="SALESAGENT_CODE" id="SALESAGENT_CODE" class="form-control autonumber">
														<span id="check_code"></span>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Address</label>
													</div>
													<div class="col-sm-8">
														<textarea type="text" name="ADDRESS" class="form-control autonumber" row="3"></textarea>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Contact Person</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="CONTACT_PERSON" class="form-control autonumber">
													</div>
												</div>
											</div>
											
											<div class="col-md-6 col-sm-6">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Designation</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="CP_DESIG" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Tel. No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="TEL" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Mobile</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="MOBILE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Fax No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="FAX" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Email</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="email" class="form-control autonumber">
													</div>
												</div>
													
													<div class="col-sm-8">
														<button id="sub_btn" type="submit" class="btn btn-primary m-b-0">Submit</button>
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
					SALESAGENT:{
						required: "Enter Sales Agent Name"
					},
					SA_TYPE:{
						required: "Enter Sales Agent Type"
					},
					SALESAGENT_CODE:{
						required: "Enter Sales Agent Code",
						number: "Code Must be Number"
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

		$(document).ready(function(){
  			$("#SALESAGENT_CODE").blur(function(){
    			var id = $(this).val();
	            $.ajax({
	                url: '/subscription-redumption/check-sa-code/'+id,
	                type: "GET",
	                data : {"_token":"{{ csrf_token() }}"},

	                success:function(data) {
	                	if(data == 'yes'){
	                		document.getElementById("check_code").innerHTML = "This Sales Agent Code is Already Exist!";
	                		document.getElementById("sub_btn").disabled = true;
	                	}else{
	                		document.getElementById("check_code").innerHTML = "";
	                		document.getElementById("sub_btn").disabled = false;
	                	}	  
	                }
	            });
  			});
		});

</script>
@endpush