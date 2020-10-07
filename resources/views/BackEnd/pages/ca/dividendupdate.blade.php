@extends('BackEnd.master_one')

@section('title')
	Dividend Update
@endsection

@section('class7')
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
								<i class="feather icon-link"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Dividend Update</a></li>
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
						<div class="col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Dividend Update</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="dividend_form" action=" {{ url('/corporate-action/dividend/update') }} " method="post">
										@csrf

										<input type="hidden" value="{{$data->DVS_ID}}" name="dvid" required>

										<div class="row">
											<div class="col-md-6 col-sm-6">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Fund</label>
													</div>

													<div class="col-sm-8">
														<select name="FUND_ID" class="col-sm-12 form-select">
															<option value="{{$data->PRO_REG_ID}}">{{$data->PORTFOLIO_NAME}}</option>
															<option value="">------Select Fund------</option>
															@foreach($funds as $fund)
															<option value="{{$fund->PRO_REG_ID}}">{{$fund->PORTFOLIO_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Face Value</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="FACE_VALUE" value="{{$data->FACE_VALUE}}" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Dividend</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="DIVIDEND" value="{{$data->DIVIDEND}}" class="form-control autonumber" placeholder="%">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Individual Income Tax</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="INDV_ETIN_TAX" value="{{$data->INDV_ETIN_TAX}}" class="form-control autonumber"   placeholder="% (With E-TIN)">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Individual Income Tax</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="INDV_TAX" value="{{$data->INDV_TAX}}" class="form-control autonumber"   placeholder="% (Without E-TIN)">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Institutional Income Tax</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="INST_INC_TAX" value="{{$data->INST_INC_TAX}}" class="form-control autonumber"  placeholder="%">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Tax Margin</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="TAX_MARGIN" value="{{$data->TAX_MARGIN}}" class="form-control autonumber">
													</div>
												</div>

											</div>
											
											<div class="col-md-6 col-sm-6">

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Net Profit</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="NET_PROFIT" value="{{$data->NET_PROFIT}}" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Earnings Per Unit</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="EARNINGS_PER_UNIT" value="{{$data->EARNINGS_PER_UNIT}}" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">CIP Buy Price</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="BUY_PRICE" value="{{$data->BUY_PRICE}}" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Approve Date</label>
													</div>
													<div class="col-sm-8">
														<input type="date" name="APRV_DATE" value="{{$data->APRV_DATE}}" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Year Ended Date</label>
													</div>
													<div class="col-sm-8">
														<input type="date" name="YED" value="{{$data->YED}}" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Cash Transfer Date</label>
													</div>
													<div class="col-sm-8">
														<input type="date" name="TC_DATE" value="{{$data->TC_DATE}}" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">CIP Transfer Date</label>
													</div>
													<div class="col-sm-8">
														<input type="date" name="TCIP_DATE" value="{{$data->TCIP_DATE}}" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group"></div>
													<div class="col-sm-8">
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

	<script type="text/javascript">
		$().ready(function() {

        $("#dividend_form").validate({
            rules: {
                FUND_ID:{
                    required:true
                },
                FACE_VALUE:{
                    required:true,
                    number:true
                },
                DIVIDEND:{
                	required:true,
                	number:true
                },
                INDV_ETIN_TAX:{
                	required:true,
                	number:true
                },
                INDV_TAX:{
                	required:true,
                	number:true
                },
                INST_INC_TAX:{
                	required:true,
                	number:true
                },
                TAX_MARGIN:{
                	required:true,
                	number:true
                },
                TC_DATE:{
                	required:true
                },
                TCIP_DATE:{
                	required:true
                },
                NET_PROFIT:{
                	required:true,
                	number:true
                },
                EARNINGS_PER_UNIT:{
                	required:true,
                	number:true
                },
                BUY_PRICE:{
                	required:true,
                	number:true
                },
                APRV_DATE:{
                	required:true
                },
                YED:{
                	required:true
                }
                
            },
            messages: {
              	FUND_ID:{
                	required:"Enter Fund Name"
              	},
              	FACE_VALUE:{
                    required:"Enter Face Value",
                    number:"Face Value Must be Number"
              	},
                DIVIDEND:{
                	required:"Enter Dividend",
                	number:"Dividend Must be Number"
                },
                INDV_ETIN_TAX:{
                    required:"Enter Individual Income Tax",
                	number:"Tax Must be Number"
              	},
              	INDV_TAX:{
                    required:"Enter Individual Income Tax",
                	number:"Tax Must be Number"
              	},
              	INST_INC_TAX:{
                    required:"Enter Institutional Income Tax",
                	number:"Tax Must be Number"
              	},
              	TAX_MARGIN:{
                	required:"Enter Tax Margin",
                	number:"Tax Margin Must be Number"
                },
              	TC_DATE:{
                    required:"Enter Cash Transfer Date"
              	},
              	TCIP_DATE:{
                    required:"Enter CIP Transfer Date"
              	},
              	NET_PROFIT:{
                    required:"Enter Net Profit",
                	number:"Profit Must be Number"
              	},
              	EARNINGS_PER_UNIT:{
              		required:"Enter Earnings Per Unit",
                	number:"Earnings Must be Number"
              	},
              	BUY_PRICE:{
              		required:"Enter CIP Buy Price",
                	number:"Price Must be Number"
              	},
              	APRV_DATE:{
                	required:"Enter Approve Date"
                },
              	YED:{
                    required:"Enter Year Ended Date"
              	}
            }
        });

        
        });
	</script>
@endpush