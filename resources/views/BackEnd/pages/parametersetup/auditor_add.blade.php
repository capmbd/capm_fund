@extends('BackEnd.master_one')

@section('title')
	Auditor
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
							<a href=" {{ url('/parameters-setup/auditor') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/parameters-setup/auditor') }} ">Auditor</a></li>
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
									<form id="aud_form" action=" {{ url('parameters-setup/auditor/save') }} " method="post">

										@csrf

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Portfolio</label>
											</div>
											<div class="col-sm-8">
												<select name="SPONSOR_ID" class="col-sm-12 form-select">
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
												<input type="text" name="COMPANY_NAME" class="form-control autonumber">
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

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Contact Person Mobile</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="CONTACT_PERSON_MOBILE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Address</label>
											</div>
											<div class="col-sm-8">
												<textarea type="text" name="CONTACT_ADDRESS" class="form-control autonumber" row="3"></textarea>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Phone No</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="CONTACT_PHONE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Mobile No</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="CONTACT_MOBILE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Email</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="EMAIL" class="form-control autonumber">
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
									<h5><a href="#view_audi" data-toggle="collapse" >View Auditor</a></h5>

								</div>
								<div id="view_audi" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Sponsor</th>
        											<th>Company Name</th>
        											<th>Address</th>
        											<th>Contact No.</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($auditors as $auditor)
      											<tr>
        											<td> {{ $auditor->PORTFOLIO_NAME }} </td>
        											<td> {{ $auditor->COMPANY_NAME }} </td>
        											<td style="width: 100px !important"> {{ $auditor->CONTACT_ADDRESS }} </td>
        											<td> {{ $auditor->CONTACT_MOBILE }} </td>
        											<?php
        												$audi = encrypt($auditor->AUDITOR_ID);
        											?>
        											<td class="text-center">
														<a href=" {{ url('/parameters-setup/auditor/edit/'.$audi) }} " data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
        											</td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										{{ $auditors->links() }}
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