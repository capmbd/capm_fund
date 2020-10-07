@extends('BackEnd.master_one')

@section('title')
	Trustee Update
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
						<li class="breadcrumb-item"><a href="#">Trustee Update</a></li>
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
						<div class="col-lg-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5>Trustee</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="trustee_form" action=" {{ url('parameters-setup/trustee/update') }} " method="post">

										@csrf

										<input type="hidden" value="{{$data->TRUSTEE_ID}}" name="trsid" required>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Company Name</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->TRUSTEE_COMPANY_NAME}}" name="TRUSTEE_COMPANY_NAME" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Contact Person</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->TRUSTEE_CONTACT_PERSON}}" name="TRUSTEE_CONTACT_PERSON" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Contact Person Mobile</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->TRUSTEE_CONTACT_PERSON_MOBILE}}" name="TRUSTEE_CONTACT_PERSON_MOBILE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Address</label>
											</div>
											<div class="col-sm-8">
												<textarea type="text" name="TRUSTEE_CONTACT_ADDRESS" class="form-control autonumber" row="3">{{$data->TRUSTEE_CONTACT_ADDRESS}}</textarea>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Phone No</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->TRUSTEE_CONTACT_PHONE}}" name="TRUSTEE_CONTACT_PHONE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Mobile No</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->TRUSTEE_CONTACT_MOBILE}}" name="TRUSTEE_CONTACT_MOBILE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Email</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->TRUSTEE_EMAIL}}" name="TRUSTEE_EMAIL" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label"></label>
											</div>
											<div class="col-sm-8">
												<button type="submit" class="btn btn-primary m-b-0">Submit</button>
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

        $("#trustee_form").validate({
            rules: {
                TRUSTEE_COMPANY_NAME:{
                    required:true
                },
                TRUSTEE_CONTACT_PERSON:{
                    required:true
                },
                TRUSTEE_CONTACT_PERSON_MOBILE:{
                    required:true
                },
                TRUSTEE_CONTACT_ADDRESS:{
                    required:true
                },
                TRUSTEE_CONTACT_PHONE:{
                    required:true
                },
                TRUSTEE_CONTACT_MOBILE:{
                    required:true
                },
                TRUSTEE_EMAIL:{
                    required:true,
                    email:true
                }
                
            },
            messages: {
              TRUSTEE_COMPANY_NAME:{
                    required: "Enter Company Name"
                },
                TRUSTEE_CONTACT_PERSON:{
                    required: "Enter Contact Person"
                },
                TRUSTEE_CONTACT_PERSON_MOBILE:{
                    required: "Enter Contact Person Mobile"
                },
                TRUSTEE_CONTACT_ADDRESS:{
                    required: "Enter Address"
                },
                TRUSTEE_CONTACT_PHONE:{
                    required: "Enter Phone No"
                },
                TRUSTEE_CONTACT_MOBILE:{
                    required: "Enter Mobile No"
                },
                TRUSTEE_EMAIL:{
                    required: "Enter Email Address",
                    email: "Enter Valid Email Address"
                }

            }
        });

        
        });
	</script>
@endpush