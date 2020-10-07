@extends('BackEnd.master_one')

@section('title')
	Sponsor
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
							<a href=" {{ url('/parameters-setup/sponsor-add') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/parameters-setup/sponsor-add') }} ">Sponsor</a></li>
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
									<h5>Sponsor</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="sponsor_form" action=" {{ url('parameters-setup/sponsor/save') }} " method="post">

										@csrf

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Company Name</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="COMPANY_NAME" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Contact Person</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="SPON_CONTACT_PERSON" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Contact Person Mobile</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="SPON_CONTACT_PERSON_MOBILE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Address</label>
											</div>
											<div class="col-sm-8">
												<textarea type="text" name="SPON_CONTACT_ADDRESS" class="form-control autonumber" row="3"></textarea>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Phone No</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="SPON_CONTACT_PHONE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Mobile No</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="SPON_CONTACT_MOBILE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Email</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="SPON_EMAIL" class="form-control autonumber">
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

						<div class="col-lg-12 col-xl-6">
							<div class="card view_card">
								<div class="card-header">
									<h5><a href="#view_spon" data-toggle="collapse" >View Sponsor</a></h5>

								</div>
								<div id="view_spon" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Company Name</th>
        											<th>Address</th>
        											<th>Contact No.</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($sponsors as $sponsor)
      											<tr>
        											<td> {{ $sponsor->COMPANY_NAME }} </td>
        											<td> {{ $sponsor->SPON_CONTACT_ADDRESS }} </td>
        											<td> {{ $sponsor->SPON_CONTACT_MOBILE }} </td>
        											<?php
														$sponid = encrypt($sponsor->SPON_ID);
													?>
        											<td class="text-center">
														<a href=" {{ url('/parameters-setup/sponsor/edit/'.$sponid) }} " data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
        											</td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										{{ $sponsors->links() }}
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

        $("#sponsor_form").validate({
            rules: {
                COMPANY_NAME:{
                    required:true
                },
                SPON_CONTACT_PERSON:{
                    required:true
                },
                SPON_CONTACT_PERSON_MOBILE:{
                    required:true
                },
                SPON_CONTACT_ADDRESS:{
                    required:true
                },
                SPON_CONTACT_PHONE:{
                    required:true
                },
                SPON_CONTACT_MOBILE:{
                    required:true
                },
                SPON_EMAIL:{
                    required:true,
                    email:true
                }
                
            },
            messages: {
              COMPANY_NAME:{
                    required: "Enter Company Name"
                },
                SPON_CONTACT_PERSON:{
                    required: "Enter Contact Person"
                },
                SPON_CONTACT_PERSON_MOBILE:{
                    required: "Enter Contact Person Mobile"
                },
                SPON_CONTACT_ADDRESS:{
                    required: "Enter Address"
                },
                SPON_CONTACT_PHONE:{
                    required: "Enter Phone No"
                },
                SPON_CONTACT_MOBILE:{
                    required: "Enter Mobile No"
                },
                SPON_EMAIL:{
                    required: "Enter Email Address",
                    email: "Enter Valid Email Address"
                }

            }
        });

        
        });
	</script>
@endpush