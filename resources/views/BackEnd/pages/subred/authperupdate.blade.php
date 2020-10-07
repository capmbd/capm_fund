@extends('BackEnd.master_one')

@section('title')
	Authorized Person Info
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
						<li class="breadcrumb-item"><a href=" # ">Authorized Person Info</a></li>
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
									<h5>Authorized Person Info</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="ind_reg" action="{{url('/subscription-redumption/auth_per/updata')}}" method="post" enctype="multipart/form-data">
										@csrf

										<input type="hidden" value="{{$data->REGISTRATION_NO}}" name="rinstid" required>
										<input type="hidden" name="apid" value="{{$data->AUTH_PER_ID}}">

										<div class="row">

											<div class="col-md-12 col-sm-12">
												<p class="div_text">Authorized Person / POA Details
													<span>
														<input type="radio" value="Mr." name="GENDER" {{ $data->AUTH_GENDER == 'Mr.' ? 'checked' : '' }} >Mr.
														<input type="radio" value="Mrs." name="GENDER" {{ $data->AUTH_GENDER == 'Mrs.' ? 'checked' : '' }} >Mrs.
														<input type="radio" value="Ms." name="GENDER" {{ $data->AUTH_GENDER == 'Ms.' ? 'checked' : '' }} >Ms.
													</span>
												</p>
											</div>

											<div class="col-md-7 col-sm-7">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->AUTH_NAME}}" name="NAME" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Designation</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->AUTH_DESIG}}" name="DESIG" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Mailing Address</label>
													</div>
													<div class="col-sm-8">
														<textarea class="form-control autonumber" name="A_ADDRESS" rows="3" >{{$data->AUTH_ADDRESS}}</textarea>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Photo</label>
													</div>
													<div class="col-sm-8">
														<img style="height: 220px; width: 220px; margin-bottom: 5px;" src="{{ asset('investor/'.$data->REGISTRATION_NO.'/images/'.$data->AUTH_IMG_PATH) }}" alt="">
														<input type="file" id="AUTH_IMG_PATH" name="AUTH_IMG_PATH">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Signature</label>
													</div>
													<div class="col-sm-8">
														<img style="height: 100px; width: 220px; margin-bottom: 5px;" src="{{ asset('investor/'.$data->REGISTRATION_NO.'/images/'.$data->AUTH_SIGNATURE) }}" alt="">
														<input type="file" id="AUTH_SIGNATURE" name="AUTH_SIGNATURE">
													</div>
												</div>
												
											</div>

											<div class="col-md-5 col-sm-5">

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">National ID/Passport No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->AUTH_NATIONAL_ID}}" name="NATIONAL_ID" class="form-control autonumber">
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Date of Birth</label>
													</div>
													<div class="col-sm-8">
														<input type="date" value="{{$data->AUTH_BIRTHDAY}}" name="BIRTHDAY" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Contract No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->AUTH_MOBILE_NO}}" name="MOBILE_NO" class="form-control autonumber">
													</div>
												</div>
											</div>

											<div class="row form-group">
												<div class="col-sm-2">
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
<script type="text/javascript" src="{{asset('BackEnd/files/assets/js/bootbox.min.js')}}"></script>
<script type="text/javascript">
	$().ready(function() {
		$("#ind_reg").validate({
			rules: {
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



@endpush