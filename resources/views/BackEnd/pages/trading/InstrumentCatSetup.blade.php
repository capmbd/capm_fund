@extends('BackEnd.master_one')

@section('title')
	Broker Setup
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
							<a href=" {{ url('/trading/broker') }} ">
								<i class="feather icon-menu"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/trading/broker') }} ">Category Setup</a></li>
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
									<h5>Instrument Category Setup</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
									<p class="text-danger insert_message"> <b> {{ Session::get('messagen') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="cate_form" action=" {{ url('/trading/InstrumentCat/save') }} " method="post">

									@csrf

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Category Code</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="code" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">Description</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="description" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Settlement Day DSE</label>
											</div>
											<div class="col-sm-7">
												<input type="number" name="sttelment_day_dse" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Settlement Day CSE</label>
											</div>
											<div class="col-sm-7">
												<input type="number" name="sttelment_day_cse" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Status</label>
											</div>
											<div class="col-sm-7">
												<select name="status" class="col-sm-12 form-select">
													<option value="">---Select Status---</option>
													<option value="1">Open</option>
													<option value="0">Close</option>
													
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
									<h5><a href="#view_port" data-toggle="collapse" >View Instrument Category List</a></h5>

								</div>
								<div id="view_port" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Code</th>
        											<th>Settlement Day DSE</th>
        											<th>Settlement Day CSE</th>
													<th>Description</th>
													<th>Status</th>
        											<th>Action</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($instrumentCate as $instrumentCat)
      											<tr>
        											<td> {{ $instrumentCat->code}} </td>
        											<td> {{ $instrumentCat->sttelment_day_dse}} </td>
        											<td> {{ $instrumentCat->sttelment_day_cse}} </td>
													<td> {{ $instrumentCat->description}} </td>
													<td> <?php if($instrumentCat->status=='1'){
													    echo 'Open';
														}else{
													    echo 'Colse';
														} ?></td>
        											<?php
        												$bkid = encrypt($instrumentCat->id);
        											?>
        											<td class="text-center">
														<a href="{{ url('/trading/instrumentCate/edit/'.$bkid) }}" title="Update" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
        											</td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										
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
			$("#cate_form").validate({
				rules: {
					code:{
						required:true
					},
					description:{
						required:true
					},
					sttelment_day_dse:{
						required:true
					}
				},
				messages: {
					code:{
						required: "Enter category code"
					},
					description:{
						required: "Enter category description"
					},
					sttelment_day_dse:{
						required: "Enter sttelment number",
					}
				}
			});

		});
</script>

@endpush