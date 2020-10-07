@extends('BackEnd.master_one')

@section('title')
	Stock Update
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
						<li class="breadcrumb-item"><a href="#">Stock Update</a></li>
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
									<h5>Stock Update</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
									<p class="text-danger insert_message"> <b> {{ Session::get('messagen') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="stock_form" action=" {{ url('/trading/stock/update') }} " method="post">

									@csrf

										<input type="hidden" name="sid" value="{{$stock->STOCK_ID}}">

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Stock Name</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="STOCK_NAME" value="{{$stock->STOCK_NAME}}" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Select Sector</label>
											</div>
											<div class="col-sm-7">
												<select name="SECTOR_ID" class="col-sm-12 form-select">
													<option value="{{$stock->SECTOR_ID}}">{{$stock->SECTOR_NAME}}</option>
													<option value="">---Select Sector---</option>
													@foreach($sectors as $sector)
														<option value="{{$sector->SECTOR_ID}}">{{$sector->SECTOR_NAME}}</option>
													@endforeach
												</select>
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
			$("#stock_form").validate({
				rules: {
					STOCK_NAME:{
						required:true
					},
					SECTOR_ID:{
						required:true
					}
				},
				messages: {
					STOCK_NAME:{
						required: "Enter Stock Name"
					},
					SECTOR_ID:{
						required: "Select Sector"
					}
				}
			});

		});
</script>

@endpush