@extends('BackEnd.master_one')

@section('title')
	Auditor Update
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
						<li class="breadcrumb-item"><a href="#">Auditor Update</a></li>
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
									<h5>Auditor</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="aud_form" action=" {{ url('parameters-setup/auditor/update') }} " method="post">

										@csrf

										<input type="hidden" value="{{$data->AUDITOR_ID}}" name="adtrid" required>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Portfolio</label>
											</div>
											<div class="col-sm-8">
												<select name="SPONSOR_ID" class="col-sm-12 form-select">
													<option value="{{$data->PRO_REG_ID}}">{{$data->PORTFOLIO_NAME}}</option>
													<option value="">---Select Portfolio---</option>
													@foreach($ports as $port)
														<option value="{{$port->PRO_REG_ID}}">{{$port->PORTFOLIO_NAME}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Company Name</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->COMPANY_NAME}}" name="COMPANY_NAME" class="form-control autonumber">
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

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Contact Person Mobile</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->CONTACT_PERSON_MOBILE}}" name="CONTACT_PERSON_MOBILE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Address</label>
											</div>
											<div class="col-sm-8">
												<textarea type="text" name="CONTACT_ADDRESS" class="form-control autonumber" row="3">{{$data->CONTACT_ADDRESS}}</textarea>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Phone No</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->CONTACT_PHONE}}" name="CONTACT_PHONE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Mobile No</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->CONTACT_MOBILE}}" name="CONTACT_MOBILE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Email</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->EMAIL}}" name="EMAIL" class="form-control autonumber">
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

        $("#aud_form").validate({
            rules: {
            	SPONSOR_ID:{
                    required:true
                },
                COMPANY_NAME:{
                    required:true
                },
                CONTACT_PERSON:{
                    required:true
                },
                CONTACT_PERSON_MOBILE:{
                    required:true
                },
                CONTACT_ADDRESS:{
                    required:true
                },
                CONTACT_PHONE:{
                    required:true
                },
                CONTACT_MOBILE:{
                    required:true
                },
                EMAIL:{
                    required:true,
                    email:true
                }
                
            },
            messages: {
            	SPONSOR_ID:{
                    required: "Enter Portfolio"
                },
              COMPANY_NAME:{
                    required: "Enter Company Name"
                },
                CONTACT_PERSON:{
                    required: "Enter Contact Person"
                },
                CONTACT_PERSON_MOBILE:{
                    required: "Enter Contact Person Mobile"
                },
                CONTACT_ADDRESS:{
                    required: "Enter Address"
                },
                CONTACT_PHONE:{
                    required: "Enter Phone No"
                },
                CONTACT_MOBILE:{
                    required: "Enter Mobile No"
                },
                EMAIL:{
                    required: "Enter Email Address",
                    email: "Enter Valid Email Address"
                }

            }
        });

        
        });
	</script>
@endpush