@extends('BackEnd.master_one')

@section('title')
	Stock Setup
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
							<a href=" {{ url('/trading/stock') }} ">
								<i class="feather icon-menu"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/trading/stock') }} ">Stock Setup</a></li>
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
									<h5>Stock Setup</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
									<p class="text-danger insert_message"> <b> {{ Session::get('messagen') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="stock_form" action=" {{ url('/trading/stock/save') }} " method="post">

									@csrf

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Stock Name</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="STOCK_NAME" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Select Sector</label>
											</div>
											<div class="col-sm-7">
												<select name="SECTOR_ID" class="col-sm-12 form-select">
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

						<div class="col-lg-12 col-xl-7">
							<div class="card view_card">
								<div class="card-header">
									<h5><a href="#view_port" data-toggle="collapse" >View Stock List</a></h5>

								</div>
								<div id="view_port" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Stock Name</th>
        											<th>Sector Name</th>
        											<th>Action</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($stocks as $stock)
      											<tr>
        											<td> {{$stock->STOCK_NAME}} </td>
        											<td> {{$stock->SECTOR_NAME}} </td>
        											<?php
        												$stid = encrypt($stock->STOCK_ID);
        											?>
        											<td class="text-center">
														<a href="{{ url('/trading/stock/edit/'.$stid) }}" title="Update" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
        											</td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										{{ $stocks->links() }}
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