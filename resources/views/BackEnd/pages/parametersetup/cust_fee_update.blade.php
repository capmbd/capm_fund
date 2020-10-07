@extends('BackEnd.master_one')

@section('title')
	Custodian Fee Rule Update
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
						<li class="breadcrumb-item"><a href="#">Custodian Fee Rule Update</a></li>
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
									<form id="cust_fprm" action=" {{ url('parameters-setup/custfeerule/update') }} " method="post">

										@csrf

										<input type="hidden" value="{{$data->CUSTODIANFEE_RULE_ID}}" name="custfid" required>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Fund</label>
											</div>
											<div class="col-sm-8">
												<select name="SPONSOR_ID" class="col-sm-12 form-select">
													<option value="{{$data->PRO_REG_ID}}">{{$data->PORTFOLIO_NAME}}</option>
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
												<input type="text" value="{{$data->TRANSECTION_FEE}}" name="TRANSECTION_FEE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Rate</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->MAXLIMIT}}" name="MAXLIMIT" class="form-control autonumber" placeholder="% of Fund">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Per Annum Fee</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->ANNUALFEERATE}}" name="ANNUALFEERATE" class="form-control autonumber" placeholder="% of Fund">
											</div>
										</div>


										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Payment Term</label>
											</div>
											<div class="col-sm-8">
												<select name="PAYMENT_TERM_FLAG" class="col-sm-12 form-select">
													<option value="{{$data->PAYMENT_TERM_FLAG}}">
														@if($data->PAYMENT_TERM_FLAG == 1)
        													Monthly
        												@elseif($data->PAYMENT_TERM_FLAG == 2)
        													Quarterly
        												@elseif($data->PAYMENT_TERM_FLAG == 3)
        													Half Yearly
        												@elseif($data->PAYMENT_TERM_FLAG == 4)
        													Annualy
        												@endif
													</option>
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