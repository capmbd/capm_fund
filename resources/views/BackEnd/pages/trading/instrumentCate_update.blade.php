@extends('BackEnd.master_one')

@section('title')
	Broker Update
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
						<li class="breadcrumb-item"><a href="#">Instrument Category Update</a></li>
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
									<h5>Instrument Category Update</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
									<p class="text-danger insert_message"> <b> {{ Session::get('messagen') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="broker_form" action=" {{ url('/trading/inst_cat/update') }} " method="post">

									@csrf

										<input type="hidden" name="bid" value="{{$inst_cat->id}}">

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Code</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="code" value="{{$inst_cat->code}}" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Description</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="description" value="{{$inst_cat->description}}" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Settlement Day DSE</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="sttelment_day_dse" value="{{$inst_cat->sttelment_day_dse}}" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Settlement Day CSE</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="sttelment_day_cse" value="{{$inst_cat->sttelment_day_cse}}" class="form-control autonumber">
											</div>
										</div>
										
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Status</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="sttelment_day_cse" value="{{$inst_cat->status}}" class="form-control autonumber">
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
			$("#broker_form").validate({
				rules: {
					BROKER_NAME:{
						required:true
					},
					BROKER_CODE:{
						required:true
					},
					BROKER_EMAIL:{
						required:true,
						email:true
					}
				},
				messages: {
					BROKER_NAME:{
						required: "Enter Broker Name"
					},
					BROKER_CODE:{
						required: "Enter Broker Code"
					},
					BROKER_EMAIL:{
						required: "Enter Broker Email",
						email: "Enter Valid Mail Address"
					}
				}
			});

		});
</script>

@endpush