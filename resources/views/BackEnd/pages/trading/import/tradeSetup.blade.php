@extends('BackEnd.master_one')

@section('title')
	Trade Import Setup
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
							<a href=" {{ url('/trading/sector') }} ">
								<i class="feather icon-menu"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/trading/import/trade') }} ">Trade File Import</a></li>
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
									<h5>Trade Import Setup</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
									<p class="text-danger insert_message"> <b> {{ Session::get('messagen') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="sector_form" action=" {{ url('/trading/import/save') }} " method="post">

									@csrf
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Fund Name</label>
											</div>
											<div class="col-sm-7">
												<select name="sector_cate" class="col-sm-12 form-select">
													<option value="">---Select fund---</option>
													@foreach($funds_name as $fund_name)
														<option value="{{$fund_name->PRO_REG_ID}}">{{$fund_name->PORTFOLIO_NAME}}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Broker Name</label>
											</div>
											<div class="col-sm-7">
												<select name="sector_cate" class="col-sm-12 form-select">
													<option value="">---Select broker---</option>
													@foreach($brokers as $broker)
														<option value="{{$broker->BROKER_CODE}}">{{$broker->BROKER_NAME}}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Trade File Import :</label>
											</div>
											<div class="col-sm-7">
												<input type="file" class="form-control" name="file" required >
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label"></label>
											</div>
											<div class="col-sm-7">
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
			$("#sector_form").validate({
				rules: {
					SECTOR_NAME:{
						required:true
					}
				},
				messages: {
					SECTOR_NAME:{
						required: "Enter Sector Name"
					}
				}
			});

		});
</script>

@endpush