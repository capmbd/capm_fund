@extends('BackEnd.master_one')

@section('title')
	Investment Setup Update
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
						<li class="breadcrumb-item"><a href="#">Investment Setup Update</a></li>
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
									<h5>Investment Setup</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="inv_typ_stup" action=" {{ url('parameters-setup/investmenttype/update') }} " method="post">

										@csrf

										<input type="hidden" value="{{$data->INVESTMENT_TYPE_SETUP_ID}}" name="insid" required>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Portfolio Name</label>
											</div>
											<div class="col-sm-8">
												<select name="PRO_REG_ID" class="col-sm-12 form-select">
													<option value="{{$data->PRO_REG_ID}}">{{$data->PORTFOLIO_NAME}}</option>
													<option value="">---Select Portfolio Name---</option>
													@foreach($por_names as $por_name)
														<option value="{{$por_name->PRO_REG_ID}}">{{$por_name->PORTFOLIO_NAME}}</option>
													@endforeach
													
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Investment Type</label>
											</div>
											<div class="col-sm-8">
												<select name="INVESTMENT_TYPE_ID" class="col-sm-12 form-select">
													<option value="{{$data->INVESTMENT_TYPE_ID}}">{{$data->INVESTMENT_TYPE}}</option>
													<option value="">---Select Investment Type---</option>
													@foreach($inv_types as $inv_type)
														<option value="{{$inv_type->INVESTMENT_TYPE_ID}}">{{$inv_type->INVESTMENT_TYPE}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-4">
												<label class="col-form-label">Max Limit</label>
											</div>
											<div class="col-sm-8">
												<input type="text" value="{{$data->MAXLIMIT}}" name="MAXLIMIT" class="form-control autonumber" placeholder="% of Fund">
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

        $("#inv_typ_stup").validate({
            rules: {
                PRO_REG_ID:{
                    required:true
                },
                INVESTMENT_TYPE_ID:{
                    required:true
                },
                MAXLIMIT:{
                	required:true,
                	number:true
                }
                
            },
            messages: {
              	PRO_REG_ID:{
                	required:"Enter Portfolio Name"
              	},
              	INVESTMENT_TYPE_ID:{
                    required:"Enter Investment Type"
              	},
                MAXLIMIT:{
                	required:"Enter Maximum Limit",
                	number:"Limit Must be Number"
                }
            }
        });

        
        });
	</script>
@endpush