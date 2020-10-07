@extends('BackEnd.master_one')

@section('title')
	Trade Order
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
							<a href=" {{ url('/trading/torder') }} ">
								<i class="feather icon-menu"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/trading/torder') }} ">Trade Order</a></li>
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
									<h5>Trade Order</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
									<p class="text-danger insert_message"> <b> {{ Session::get('messagen') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="torder_form" action=" {{ url('/trading/torder/save') }} " method="post">

									@csrf

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Select Fund</label>
											</div>
											<div class="col-sm-7">
												<select name="PRO_REG_ID" class="col-sm-12 form-select">
													<option value="">---Select Fund---</option>
													@foreach($funds as $fund)
														<option value="{{$fund->PRO_REG_ID}}">{{$fund->PORTFOLIO_NAME}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Trade Date</label>
											</div>
											<div class="col-sm-7">
												<input type="date" name="TRADE_DATE" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Select Broker</label>
											</div>
											<div class="col-sm-7">
												<select name="BROKER_ID" class="col-sm-12 form-select">
													<option value="">---Select Broker---</option>
													@foreach($brokers as $broker)
														<option value="{{$broker->BROKER_ID}}">{{$broker->BROKER_NAME}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Select Sector</label>
											</div>
											<div class="col-sm-7">
												<select name="SECTOR_ID" id="SECTOR_ID" class="col-sm-12 form-select">
													<option value="">---Select Sector---</option>
													@foreach($sectors as $sector)
														<option value="{{$sector->SECTOR_ID}}">{{$sector->SECTOR_NAME}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Select Stock</label>
											</div>
											<div class="col-sm-7">
												<select name="STOCK_ID" id="STOCK_ID" class="col-sm-12 form-select">
													<option value="">No Stock Found</option>
												</select>
											</div>
										</div>


										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Quantity</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="QUANTITY" class="form-control autonumber">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-sm-5">
												<label class="col-form-label">Price</label>
											</div>
											<div class="col-sm-7">
												<input type="text" name="PRICE" class="form-control autonumber">
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
									<h5>Pending Trade Order</h5>

								</div>
								<div id="view_port" class="view_card_content">
									<div class="table-responsive">
										<table class="table table-bordered tbl_dta">
    										<thead>
      											<tr>
        											<th>Fund Name</th>
        											<th>Trade Date</th>
        											<th>Broker Name</th>
        											<th>Sector Name</th>
        											<th>Stock Name</th>
        											<th>Quantity</th>
        											<th>Price</th>
        											<th>Confirm</th>
      											</tr>
    										</thead>
    										<tbody>
      										@foreach($pend_order as $pending)
      											<tr>
        											<td> {{$pending->PORTFOLIO_NAME}} </td>
        											<td>
        												<?php
															$otd = $pending->TRADE_DATE;
															$td = date("d-m-Y",strtotime($otd));
														?>
        												{{$td}}
        											</td>
        											<td> {{$pending->BROKER_NAME}} </td>
        											<td> {{$pending->SECTOR_NAME}} </td>
        											<td> {{$pending->STOCK_NAME}} </td>
        											<td> {{$pending->QUANTITY}} </td>
        											<td> {{$pending->PRICE}} </td>
        											<td class="text-center">
														<a class="text-success" id="conf" href="{{ url('/trading/pending/buy/'.$pending->TO_ID) }}" title="Confirm" data-toggle="tooltip"><i class="fas fa-check-square btn btn-xs"></i></a>
        											</td>
      											</tr>
      										@endforeach
    										</tbody>
  										</table>
  										{{ $pend_order->links() }}
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
<script type="text/javascript" src="{{ asset('BackEnd/files/assets/js/bootbox.min.js') }}"></script>
<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/jquery.validate.js') }} "></script>
<script type="text/javascript">
		$().ready(function() {
			$("#torder_form").validate({
				rules: {
					PRO_REG_ID:{
						required:true
					},
					TRADE_DATE:{
						required:true
					},
					BROKER_ID:{
						required:true
					},
					SECTOR_ID:{
						required:true
					},
					STOCK_ID:{
						required:true
					},
					QUANTITY:{
						required:true,
						number:true,
						min:1
					},
					PRICE:{
						required:true,
						number:true,
						min:1
					}
				},
				messages: {
					PRO_REG_ID:{
						required: "Select Fund"
					},
					TRADE_DATE:{
						required: "Enter Trade Date"
					},
					BROKER_ID:{
						required: "Select Broker"
					},
					SECTOR_ID:{
						required: "Select Sector"
					},
					STOCK_ID:{
						required: "Select Stock"
					},
					QUANTITY:{
						required: "Enter Quantity",
						number: "Quantity Must be Numeric Value",
						min: "Quantity Must be Positive Value"
					},
					PRICE:{
						required: "Enter Price",
						number: "Price Must be Numeric Value",
						min: "Price Must be Positive Value"
					}
				}
			});

		});
</script>

<script>
    $(document).ready(function() {
        $('#SECTOR_ID').on('change', function() {
            var secId = $(this).val();
            let emptyAry = [];

            if(secId) {
                $.ajax({
                    url: '/trading/findWithsecId/'+secId,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",

                    success:function(data) {
                      if(data){
                        $('#STOCK_ID').empty();
                        $('#STOCK_ID').focus;
                        $('select[name="STOCK_ID"]').append('<option value='+""+'>---Select Stock---</option>');
                        if(data.length < 1){
                        	$('#STOCK_ID').empty();
                        	$('#STOCK_ID').focus;
                        	$('select[name="STOCK_ID"]').append('<option value='+""+'>No Stock Found</option>');
                        }
                        $.each(data, function(key, value){
                        $('select[name="STOCK_ID"]').append('<option value="'+ value.STOCK_ID +'">' + value.STOCK_NAME+ '</option>');
                    });
                  }else{
                    $('#STOCK_ID').empty();
                  }
                  }
                });
            }else{
              $('#STOCK_ID').empty();
            }
        });
    });
</script>

<script type="text/javascript">
	$(document).on('click', '#conf', function(e){
            e.preventDefault();
            var link = $(this).attr('href');

            bootbox.confirm({
                message: "<span style='color: #2b8a78;'>Are You Sure to Confirm?</span>",
                size: 'small',
                backdrop: true,
                buttons: {
                    cancel: {
                        label: '<i class="fa fa-times"></i> Cancel',
                        className: 'btn-danger'
                    },
                    confirm: {
                        label: '<i class="fa fa-check"></i> Confirm',
                        className: 'btn-success'
                    }
                },
                callback: function (result) {
                    if(result){
                        window.location.href = link;
                    }
                }
            });
        });
</script>

@endpush