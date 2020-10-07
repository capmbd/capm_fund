@extends('BackEnd.master_one')

@section('title')
	EOD Process
@endsection

@section('class4')
	active
@endsection

@push('css')
	<style type="text/css">
		label.error {
			color: #CC0000;
			font-weight: 300;
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
								<i class="feather icon-menu"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">End Of Day Processing</a></li>
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
						<div class="col-lg-12 col-xl-5">
							<div class="card">
								<div class="card-header">
									<h5>NAV Update</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="assign_form" action=" {{ url('/trading/eod/update') }} " method="post">

									@csrf

										<input type="hidden" value="{{$assigneds->PRICE_RATE_ID}}" name="nav_id">

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Portfolio</label>
											</div>
											<div class="col-sm-7">
												<input type="text" value="{{$assigneds->PORTFOLIO_NAME}}" class="form-control autonumber" disabled>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">NAV For Sell</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="BUY_RATE" value="{{$assigneds->BUY_RATE}}" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">NAV For Repurchase</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="SELL_RATE" value="{{$assigneds->SELL_RATE}}" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label"></label>
											</div>
											<div class="col-sm-7">
												<button type="submit" class="btn btn-primary m-b-0">Update</button>
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
			$("#assign_form").validate({
				rules: {
					PRO_REG_ID:{
						required:true
					},
					BUY_RATE:{
						required:true,
						number:true,
						min:1
					},
					SELL_RATE:{
						required:true,
						number:true,
						min:1
					}
				},
				messages: {
					PRO_REG_ID:{
						required: "Select Portfolio"
					},
					BUY_RATE:{
						required: "Enter NAV For Sell",
						number: "Must Be Number",
						min: "Must Be Positive Value"
					},
					SELL_RATE:{
						required: "Enter NAV For Repurchase",
						number: "Must Be Number",
						min: "Must Be Positive Value"
					}
				}
			});

		});
</script>

@endpush