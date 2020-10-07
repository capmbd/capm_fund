@extends('BackEnd.master_one')

@section('title')
	Custodian Fee Rule
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
							<a href=" {{ url('/parameters-setup/custfeerule') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/parameters-setup/custfeerule') }} ">Custodian Fee Rule</a></li>
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
									<h5>Custodian Fee Rule</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="cust_fprm" action=" {{ url('parameters-setup/custfeerule/save') }} " method="post">

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
												<label class="col-form-label">Trasaction Fee</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="TRANSECTION_FEE" class="form-control autonumber">
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
												<label class="col-form-label">Per Annum Fee</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="ANNUALFEERATE" class="form-control autonumber" placeholder="% of Fund">
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
									<h5><a href="#view_cust" data-toggle="collapse" >View Custodian Fee Rule</a></h5>

								</div>
								<div id="view_cust" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Sponsor</th>
        											<th>Trasaction Fee</th>
        											<th>Rate(%)</th>
        											<th>Per Annum Fee(%)</th>
        											<th>Payment Term</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      											@foreach($custfs as $custf)
      											<tr>
        											<td>{{$custf->PORTFOLIO_NAME}}</td>
        											<td>{{$custf->TRANSECTION_FEE}}</td>
        											<td>{{$custf->MAXLIMIT}}</td>
        											<td>{{$custf->ANNUALFEERATE}}</td>
        											<td> 
        												@if($custf->PAYMENT_TERM_FLAG == 1)
        													Monthly
        												@elseif($custf->PAYMENT_TERM_FLAG == 2)
        													Quarterly
        												@elseif($custf->PAYMENT_TERM_FLAG == 3)
        													Half Yearly
        												@elseif($custf->PAYMENT_TERM_FLAG == 4)
        													Annualy
        												@endif
        											</td>
        											<?php
        												$cf = encrypt($custf->CUSTODIANFEE_RULE_ID);
        											?>
        											<td class="text-center">
														<a href=" {{ url('/parameters-setup/custfeerule/edit/'.$cf) }} " data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
        											</td>
      											</tr>
      											@endforeach
    										</tbody>
  										</table>
  										{{ $custfs->links() }}
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

        $("#cust_fprm").validate({
            rules: {
            	SPONSOR_ID:{
                    required:true
                },
                TRANSECTION_FEE:{
                	required:true,
                	number:true
                },
                MAXLIMIT:{
                	required:true,
                	number:true
                },
                ANNUALFEERATE:{
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
                TRANSECTION_FEE:{
                	required: "Enter Trasaction Fee",
                	number: "Fee Must be a Number"
                },
                MAXLIMIT:{
                	required: "Enter Rate",
                	number: "Rate Must be Number"
                },
                ANNUALFEERATE:{
                	required: "Enter Per Annum Fee",
                	number: "Fee Must be Number"
                },
                PAYMENT_TERM_FLAG:{
                	required: "Enter Payment Term"
                }
            }
        });
        
        });
	</script>
@endpush