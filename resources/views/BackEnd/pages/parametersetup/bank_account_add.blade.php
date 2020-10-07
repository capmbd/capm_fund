@extends('BackEnd.master_one')

@section('title')
	Bank Account
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
							<a href=" {{ url('/parameters-setup/bank-account') }} ">
								<i class="feather icon-settings"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/parameters-setup/bank-account') }} ">Bank Account</a></li>
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
									<h5>Bank Account</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="bank_account" action=" {{ url('parameters-setup/bank-account/save') }} " method="post">

										@csrf

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Bank</label>
											</div>
											<div class="col-sm-8">
												<select name="BANK_ID" class="col-sm-12 form-select">
													<option value="">---Select Bank---</option>
													@foreach($banks as $bank)
														<option value="{{$bank->BANK_ID}}">{{$bank->BANK_NAME}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Fund</label>
											</div>
											<div class="col-sm-8">
												<select name="SPONSOR_ID" class="col-sm-12 form-select">
													<option value="">---Select Fund---</option>
													@foreach($ports as $port)
														<option value="{{$port->PRO_REG_ID}}">{{$port->PORTFOLIO_NAME}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">A/C Name</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="ACCOUNT_NAME" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Branch</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="BRANCH" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Account No</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="ACCOUNT_NO" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Routing No</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="ROUTING_NO" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">A/C Type</label>
											</div>
											<div class="col-sm-8">
												<select name="ACCOUNT_TYPE" class="col-sm-12 form-select">
													<option value="">---Select A/C Type---</option>
													<option value="1">Current Account</option>
													<option value="2">Short Term Deposit</option>
													<option value="3">Savings Account</option>
													<option value="4">Escrow</option>
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Interest Rate</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="INTEREST_RATE" class="form-control autonumber">
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
									<h5><a href="#view_b_account" data-toggle="collapse" >View Bank Account</a></h5>

								</div>
								<div id="view_b_account" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Portfolio</th>
        											<th>Bank Name</th>
        											<th>Account No</th>
        											<th>Routing No</th>
													<th>Total Balance</th>
        											<th>Type</th>
        											<th class="text-center">Action</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($accounts as $account)
      											<tr>
        											<td> {{ $account->PORTFOLIO_NAME }} </td>
        											<td> {{ $account->BANK_NAME }} </td>
        											<td> {{ $account->ACCOUNT_NO }} </td>
        											<td> {{ $account->ROUTING_NO }} </td>
													<td> {{ $account->BANK_AMOUNT }} </td>
        											<td> 
        												@if($account->ACCOUNT_TYPE == 1)
        													Current Account
        												@elseif($account->ACCOUNT_TYPE == 2)
        													Short Term Deposit
        												@elseif($account->ACCOUNT_TYPE == 3)
        													Savings Account
        												@elseif($account->ACCOUNT_TYPE == 4)
        													Escrow
        												@endif								
        											</td>
        											<?php
        												$ba = encrypt($account->BANK_ACCOUNT_ID);
        											?>
        											<td class="text-center">
														<a href=" {{ url('/parameters-setup/bank-account/edit/'.$ba) }} " data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
        											</td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										{{ $accounts->links() }}
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

        $("#bank_account").validate({
            rules: {
                BANK_ID:{
                    required:true
                },
                SPONSOR_ID:{
                    required:true
                },
                ACCOUNT_NAME:{
                    required:true
                },
                BRANCH:{
                    required:true
                },
                ACCOUNT_NO:{
                    required:true,
                    number:true
                },
                ROUTING_NO:{
                    required:true,
                    number:true
                },
                ACCOUNT_TYPE:{
                    required:true
                },
                INTEREST_RATE:{
                    required:true,
                    number:true
                }
                
            },
            messages: {
              	BANK_ID:{
                	required:"Enter Bank"
              	},
              	SPONSOR_ID:{
                	required:"Enter Fund"
              	},
              	ACCOUNT_NAME:{
                    required:"Enter A/C Name"
              	},
              	BRANCH:{
                	required:"Enter Branch"
              	},
              	ACCOUNT_NO:{
                    required:"Enter Account No",
                    number:"Enter Only Number"
                },
                ROUTING_NO:{
                    required:"Enter Routing No",
                    number:"Enter Only Number"
                },
                ACCOUNT_TYPE:{
                required:"Enter A/C Type"
              	},
              	INTEREST_RATE:{
                    required:"Enter Interest Rate",
                    number:"Rate Must be Numeric Value"
                }
            }
        });

        
        });
	</script>
@endpush