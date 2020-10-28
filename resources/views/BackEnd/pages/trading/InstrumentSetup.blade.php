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
						<li class="breadcrumb-item"><a href=" {{ url('/trading/instrument') }} ">Instrument Setup</a></li>
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
									<h5>Instrument Setup</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
									<p class="text-danger insert_message"> <b> {{ Session::get('messagen') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="cate_form" action=" {{ url('/trading/Instrument/save') }} " method="post">

									@csrf

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Instrument name</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="inst_name" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">Instrument Catagory</label>
											</div>
											<div class="col-sm-7">
												<select name="inst_cat" class="col-sm-12 form-select">
													<option value="">---Inst Category---</option>
													@foreach($instrumentCate as $inst_cat)
														<option value="{{$inst_cat->id}}">{{$inst_cat->code}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Short Name</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="short_name" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">ISIN</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="ISIN" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Market Price</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="market_price" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Instrument Type</label>
											</div>
											<div class="col-sm-7">
												<select name="inst_type" class="col-sm-12 form-select">
													<option value="">---Select Type---</option>
													<option value="Demat">Demat</option>
													<option value="Paper">Paper</option>
												</select>
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">PE Ratio</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="pe_ratio" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Total Share </label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="total_share" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Declaration date </label>
											</div>
											<div class="col-sm-7">
												<input type="date" name="dec_date" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Face value </label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="face_value" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Cost Per Share </label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="cost_per_share" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Premium</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="premium" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Marginable Status</label>
											</div>
											<div class="col-sm-7">
												<input name="marginable_status" type="checkbox" id="non_marginable" value="TRUE" />
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Latest EPS</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="latest_eps" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Public Share</label>
											</div>
											<div class="col-sm-7">
												<input type="number" name="public_share" class="form-control autonumber">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Sector Category</label>
											</div>
											<div class="col-sm-7">
												<select name="sector_cate" class="col-sm-12 form-select">
													<option value="">---Select Sector---</option>
													@foreach($sectors as $sector)
														<option value="{{$sector->SECTOR_ID}}">{{$sector->SECTOR_NAME}}</option>
													@endforeach
												</select>
											</div>
										</div>


										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Status</label>
											</div>
											<div class="col-sm-7">
												<select name="status" class="col-sm-12 form-select">
													<option value="">---Select Status---</option>
													<option value="1">Active</option>
													<option value="0">Inactive</option>
													
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
									<h5><a href="#view_port" data-toggle="collapse" >View Instrument List</a></h5>

								</div>
								<div id="view_port" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Instrument Name</th>
        											<th>Category</th>
        											<th>Short Name</th>
													<th>ISIN</th>
													<th>Market Price</th>
													<th>Marginable</th>
													<th>Status</th>
        											<th>Action</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($instrument as $inst)
												<?php
                                                $cat_info = DB::table('instrument_cate')
                                                    ->select('code')
                                                    ->where('id', '=', $inst->inst_cat)
                                                    ->first();
												 ?>
      											<tr>
        											<td> {{ $inst->inst_name}} </td>
        											<td> {{ $cat_info->code}} </td>
        											<td> {{ $inst->short_name}} </td>
													<td> {{ $inst->ISIN}} </td>
													<td> {{ $inst->market_price}} </td>
													<td> {{ $inst->marginable_status}} </td>
													<td> <?php if($inst->status=='1'){
													    echo 'Active';
														}else{
													    echo 'Inactive';
														} ?></td>
        											<?php
        												$bkid = encrypt($inst->id);
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