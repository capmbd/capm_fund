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
						<li class="breadcrumb-item"><a href=" {{ url('/trading/broker') }} ">Broker Setup</a></li>
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
									<h5>Broker Setup</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
									<p class="text-danger insert_message"> <b> {{ Session::get('messagen') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="broker_form" action=" {{ url('/trading/broker/save') }} " method="post">

									@csrf

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Broker Name</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="BROKER_NAME" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Broker Code</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="BROKER_CODE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Broker Email</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="BROKER_EMAIL" class="form-control autonumber">
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
									<h5><a href="#view_port" data-toggle="collapse" >View Broker List</a></h5>

								</div>
								<div id="view_port" class="panel-collapse collapse view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Broker Name</th>
        											<th>Broker Code</th>
        											<th>Email</th>
        											<th>Action</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($brokers as $broker)
      											<tr>
        											<td> {{ $broker->BROKER_NAME }} </td>
        											<td> {{ $broker->BROKER_CODE }} </td>
        											<td> {{ $broker->BROKER_EMAIL }} </td>
        											<?php
        												$bkid = encrypt($broker->BROKER_ID);
        											?>
        											<td class="text-center">
														<a href="{{ url('/trading/broker/edit/'.$bkid) }}" title="Update" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
        											</td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										{{ $brokers->links() }}
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