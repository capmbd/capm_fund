@extends('BackEnd.master_one')

@section('title')
	Investror's Country
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
							<a href=" {{ url('/parameters-setup/invcountry') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/parameters-setup/invcountry') }} ">Investror's Country</a></li>
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
									<h5>Investror's Country</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="country_form" action=" {{ url('parameters-setup/invcountry/save') }} " method="post">

										@csrf

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Country</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="APPLICANT_COUNTRY_NAME" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Code</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="APPLICANT_COUNTRY_CODE" class="form-control autonumber">
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
									<h5><a href="#view_country" data-toggle="collapse" >View Investror's Country</a></h5>

								</div>
								<div id="view_country" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Country</th>
        											<th>Country Code</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($countries as $country)
      											<tr>
        											<td> {{ $country->APPLICANT_COUNTRY_NAME }} </td>
        											<td> {{ $country->APPLICANT_COUNTRY_CODE }} </td>
        											<?php
        												$con = encrypt($country->APPLICANT_COUNTRY_ID);
        											?>
        											<td class="text-center">
														<a href=" {{ url('/parameters-setup/invcountry/edit/'.$con) }} " data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
        											</td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										{{ $countries->links() }}
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

        $("#country_form").validate({
            rules: {
                APPLICANT_COUNTRY_NAME:{
                    required:true
                },
                APPLICANT_COUNTRY_CODE:{
                    required:true,
                    number:true
                }
                
            },
            messages: {
              APPLICANT_COUNTRY_NAME:{
                    required: "Enter Country Name"
                },
                APPLICANT_COUNTRY_CODE:{
                    required: "Enter Country Code",
                    number: "Code Must be Number"
                }

            }
        });

        
        });
	</script>
@endpush