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
							<a href=" {{ url('/trading/eod') }} ">
								<i class="feather icon-menu"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/trading/eod') }} ">End Of Day Processing</a></li>
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
									<h5>NAV Assign</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
									<p class="text-danger insert_message"> <b> {{ Session::get('messagen') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="assign_form" action=" {{ url('/trading/eod/save') }} " method="post">

									@csrf

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Portfolio</label>
											</div>
											<div class="col-sm-7">
												<select name="PRO_REG_ID" id="PRO_REG_ID" class="col-sm-12 form-select">
													<option value="">---Select Portfolio---</option>
													@foreach($portfolios as $portfolio)
														<option value="{{$portfolio->PRO_REG_ID}}">{{$portfolio->PORTFOLIO_NAME}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">NAV For Sell</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="BUY_RATE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">NAV For Repurchase</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="SELL_RATE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label"></label>
											</div>
											<div class="col-sm-7">
												<button type="submit" class="btn btn-primary m-b-0">Assign</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-xl-7">
							<div class="card view_card">
								<div class="card-header">
									<h5><a href="#view_port" data-toggle="collapse" >View Assigned</a></h5>

								</div>
								<div id="view_port" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Portfolio</th>
        											<th>NAV For Sell</th>
        											<th>Repurchase</th>
        											<th>Update Date</th>
        											<th>Action</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($assigneds as $assigned)
      											<tr>
        											<td> {{ $assigned->PORTFOLIO_NAME }} </td>
        											<td> {{ $assigned->BUY_RATE }} </td>
        											<td> {{ $assigned->SELL_RATE }} </td>
        											<td>
        												<?php
		      												$date = strtotime($assigned->updated_at);
		      												$ndate = date('d-m-Y', $date);
		      											?>
      													{{$ndate}}
        											</td>
        											<?php
        												$eid = encrypt($assigned->PRICE_RATE_ID);
        											?>
        											<td class="text-center">
														<a href="{{ url('/trading/eod/edit/'.$eid) }}" title="Update" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
        											</td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										{{ $assigneds->links() }}
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