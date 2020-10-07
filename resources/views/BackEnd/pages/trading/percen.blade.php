@extends('BackEnd.master_one')

@section('title')
	Percentage Update
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
							<a href=" {{ url('/trading/persetup') }} ">
								<i class="feather icon-menu"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/trading/persetup') }} ">Percentage Update</a></li>
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
									<h5>Percentage Update</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
									<p class="text-danger insert_message"> <b> {{ Session::get('messagen') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="per_form" action=" {{ url('/trading/percent/update') }} " method="post">

									@csrf

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Sector</label>
											</div>
											<div class="col-sm-7 input-group">
												<span class="input-group-prepend" id="basic-addon2">
													<label class="input-group-text">%</label>
												</span>
												<input type="text" name="SECTOR_PER" value="{{$percen->SECTOR_PER}}" class="form-control autonumber">
											</div>
										</div>

										

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Stock</label>
											</div>
											<div class="col-sm-7 input-group">
												<span class="input-group-prepend" id="basic-addon2">
													<label class="input-group-text">%</label>
												</span>
												<input type="text" name="STOCK_PER" value="{{$percen->STOCK_PER}}" class="form-control autonumber">
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
			$("#per_form").validate({
				rules: {
					SECTOR_PER:{
						required:true,
						number:true,
						min:1
					},
					STOCK_PER:{
						required:true,
						number:true,
						min:1
					}
				},
				messages: {
					SECTOR_PER:{
						required: "Enter Sector Percentage",
						number: "Percentage Must Be Number",
						min: "Percentage Must Be Positive Value"
					},
					STOCK_PER:{
						required: "Enter Stock Percentage",
						number: "Percentage Must Be Number",
						min: "Percentage Must Be Positive Value"
					}
				}
			});

		});
</script>

@endpush