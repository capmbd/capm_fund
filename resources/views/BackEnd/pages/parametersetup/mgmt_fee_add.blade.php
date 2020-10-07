@extends('BackEnd.master_one')

@section('title')
	Management Fee Rule
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
							<a href=" {{ url('/parameters-setup/mgmtfeerule') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/parameters-setup/mgmtfeerule') }} ">Management Fee Rule</a></li>
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
									<h5>Management Fee Rule</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="mfr_form" action=" {{ url('parameters-setup/mgmtfeerule/save') }} " method="post">

										@csrf

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Fund</label>
											</div>
											<div class="col-sm-8">
												<select name="SPONSOR_ID" class="col-sm-12 form-select">
													<option value="">---Select Sponsor---</option>
													@foreach($ports as $port)
														<option value="{{$port->PRO_REG_ID}}">{{$port->PORTFOLIO_NAME}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Rate</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="MAXLIMIT" class="form-control autonumber" placeholder="% of Fund">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Payment Term</label>
											</div>
											<div class="col-sm-8">
												<select name="PAYMENT_TERM_FLAG" class="col-sm-12 form-select">
													<option value="">---Select Payment Term---</option>
													<option value="1">Monthly</option>
													<option value="2">Quarterly</option>
													<option value="3">Half Yearly</option>
													<option value="4">Annualy</option>
												</select>
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
									<h5><a href="#view_mfr" data-toggle="collapse" >View Management Fee Rule</a></h5>

								</div>
								<div id="view_mfr" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Sponsor</th>
        											<th>Rate(%)</th>
        											<th>Payment Term</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      											@foreach($mfrs as $mfr)
      											<tr>
        											<td> {{ $mfr->PORTFOLIO_NAME }} </td>
        											<td>{{$mfr->MAXLIMIT}}</td>
        											<td> 
        												@if($mfr->PAYMENT_TERM_FLAG == 1)
        													Monthly
        												@elseif($mfr->PAYMENT_TERM_FLAG == 2)
        													Quarterly
        												@elseif($mfr->PAYMENT_TERM_FLAG == 3)
        													Half Yearly
        												@elseif($mfr->PAYMENT_TERM_FLAG == 4)
        													Annualy
        												@endif
        											</td>
        											<?php
        												$mgf = encrypt($mfr->MANAGEMENTFEE_RULE_ID);
        											?>
        											<td class="text-center">
														<a href=" {{ url('/parameters-setup/mgmtfeerule/edit/'.$mgf) }} " data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
        											</td>
      											</tr>
      											@endforeach
    										</tbody>
  										</table>
  										{{ $mfrs->links() }}
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

        $("#mfr_form").validate({
            rules: {
            	SPONSOR_ID:{
                    required:true
                },
                MAXLIMIT:{
                	required:true,
                	number:true
                },
                PAYMENT_TERM_FLAG:{
                	required:true
                }
            },
            messages: {
            	SPONSOR_ID:{
                    required: "Enter Sponsor"
                },
                MAXLIMIT:{
                	required: "Enter Rate",
                	number: "Rate Must be Number"
                },
                PAYMENT_TERM_FLAG:{
                	required: "Enter Payment Term"
                }
            }
        });
        
        });
	</script>
@endpush