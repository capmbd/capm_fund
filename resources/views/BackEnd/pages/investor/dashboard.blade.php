@extends('BackEnd.pages.investor.master')

@section('title')
	Home
@endsection

@push('css')
	<style>
		.sb_info_tbl td input{
			border: none;
			background: #fff;
			width: 125px;
		}
		.stat{
			font-size: 18px;
			font-weight: 700;
			color: #2b8a78;
		}

		.rate_info table tr th{
			border: 1px solid #2b8a78;
			padding: 5px;
		}

		.rate_info table tr td{
			border: 1px solid #2b8a78;
			padding: 5px;
		}

		.down_error p{
			color:red;
		}
	</style>
@endpush

@section('class1')
	active
@endsection

@section('main-content-investor')


						<div class="pcoded-content">
							<div class="page-header">
								<div class="page-block">
									<div class="row align-items-center">
										<div class="col-md-12">

											@if ($success = Session::get('messaged'))
												<div class="alert alert-success alert-dismissible">
  													<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  													<strong>{{$success}}</strong>
												</div>
											@endif

											@if ($failed = Session::get('messagend'))
												<div class="alert alert-danger alert-dismissible">
  													<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  													<strong>{{$failed}}</strong>
												</div>
											@endif

											@if ($buy = Session::get('buy_message'))
												<div class="alert alert-success alert-dismissible">
  													<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  													<strong>{{$buy}}</strong>
												</div>
											@endif

											<ul class="breadcrumb">
												<li class="breadcrumb-item">
													<a href=" # ">
														<i class="feather icon-home"></i>
													</a>
												</li>
												<li class="breadcrumb-item"><a href="#">Individual Report For CAPM Funds</a></li>
											</ul>
											<ul class="breadcrumb">
												<li class="breadcrumb-item">
													<a href=" # ">
														<i class="fas fa-calendar-alt"></i>
													</a>
												</li>
												<li class="breadcrumb-item"><a href="#">As on: 
												<?php
													$date = Carbon\Carbon::now();
													echo date('l', strtotime($date)).', ';
													echo date("F d, Y",strtotime($date));
												?>
												</a></li>
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
												<div class="col-xl-6 col-md-12">
													<div class="card proj-t-card">
														<div class="card-body">
															
															<div class="row align-items-center text-center">														
															<?php
																$id = Session::get('inv_id');
																$nid = encrypt($id);
																$name = Session::get('inv_name');
																$bank = Session::get('bank');
																$acno = Session::get('acno');

															?>
															<div class="inv_info">
																<table>
																	<tr>
																		<td><span>Investor ID:</span></td>
																		<td>{{$id}}</td>
																		<input type="hidden" value="{{$id}}" id="rid">
																	</tr>
																	<tr>
																		<td><span>Name:</span></td>
																		<td>{{$name}}</td>
																		<input type="hidden" value="{{$name}}" id="clname">
																	</tr>
																	<tr>
																		<td><span>Bank Name:</span></td>
																		<td>{{$bank}}</td>
																	</tr>
																	<tr>
																		<td><span>Bank A/C:</span></td>
																		<td>{{$acno}}</td>
																	</tr>
																</table>
															</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-md-12">
													<div class="card proj-t-card">
														<div class="card-body">
															
															<div class="row align-items-center text-center"> 
																<div class="rate_info table-responsive">
																<table>
																	<tr>
																		<th>Fund Name</th>
																		<th>Sale / Subscription Price</th>
																		<th>Re-Purchase / Surrender Price</th>
																	</tr>
																	@foreach($rates as $rate)
																	<tr>
																		<td>{{$rate->PORTFOLIO_NAME}}</td>
																		<td>{{$rate->BUY_RATE}}</td>
																		<td>{{$rate->SELL_RATE}}</td>
																	</tr>
																	@endforeach
																</table>
															</div>
															</div>
														</div>
													</div>
												</div>

												<div class="col-xl-12 col-md-12">
													<div class="card proj-t-card">
														<div class="card-body">
															<div class="col-sm-8">
																<select name="fund" id="fund" class="col-sm-4 offset-sm-7 form-select" onchange="findFund()">
																	<option value="">---Select Fund---</option>
																	@foreach($portfolios as $portfolio)
																		<option value="{{$portfolio->PRO_REG_ID}}">{{$portfolio->PORTFOLIO_NAME}}</option>
																	@endforeach
																</select>
															</div>
															<br>
															<div class="table-responsive">
																<table class="table table-bordered tbl_dta tbl_inv">
    																<thead>
      																	<tr class="tbl_inv_th">
      																		<th>Confirm Holding (Units)</th>
      																		<th>Avg. Cost Price (Tk / Unit)</th>
      																		<th>Surrender Price (Tk / Unit)</th>
      																		<th>Total Value (Tk)</th>
      																		<th>Gain / Loss ( % )</th>
      																		<th>Action</th>
      																	</tr>
    																</thead>
    																<tbody>


      																	<tr class="sb_info_tbl">
      																		<td><input type="text" id="conf" value="0" disabled></td>
      																		<td><input type="text" id="avg" value="0" disabled></td>
      																		<td><input type="text" id="sur" value="0" disabled></td>
      																		<td><input type="text" id="sur_val" value="0" disabled></td>
      																		<td><input type="text" id="gl" value="0" disabled></td>
      																		<td id="buy_sell_off">
      																			<label id="buy_btn"><a class="btn btn-sm my_bg_one" href="#" onclick="mybootBox()">Buy</a></label>

      																			<label id="sell_btn"><a class="btn btn-sm my_bg_two" href="#" onclick="mybootBox()">Sell</a></label>
      																		</td>
      																	</tr>
    																</tbody>
  																</table>
															</div>
														</div>
													</div>
												</div>

												<div class="col-xl-12 col-md-12">
													<div class="card proj-t-card">
														<div class="card-body">

															<div class="col-sm-8">
																<p class="col-sm-4 offset-sm-7 stat">Holding Statement</p>
															</div>

															<div class="table-responsive">
																<table class="table table-bordered tbl_dta tbl_inv">
    																<thead>
      																	<tr class="tbl_inv_th">
      																		<th>Pending Subscription (Units)</th>
      																		<th>Pending Surrender (Units)</th>
      																		<th>Holding (Units)</th>
      																	</tr>
    																</thead>
    																<tbody>
      																	<tr class="sb_info_tbl">
      																		<td><input type="text" id="pend_sub" value="0" disabled></td>
      																		<td><input type="text" id="pend_sur" value="0" disabled></td>
      																		<td><input type="text" id="holding" value="0" disabled></td>
      																	</tr>
    																</tbody>
  																</table>
															</div>
															<div class="down_error float-left">
                                    							@if($errors->any())
                                        							<p>{{$errors->first()}}</p>
                                    							@endif
                                							</div>
															<div class="float-right">
																<label id="down_btn"><a href="#" class="btn btn-sm my_bg_one text-white" onclick="mybootBox()">Download</a>
																</label>
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
	<script>
		function findFund(){
			var fund = document.getElementById("fund").value;
			var reg_id = $('#rid').val();
    		var clnm = $('#clname').val();
			if(fund){
				document.getElementById('buy_btn').innerHTML='<a class="btn btn-sm my_bg_one" href="{{url('/inv/buy/'.$nid)}}'+'/'+fund+'">Buy</a>';
				document.getElementById('sell_btn').innerHTML='<a class="btn btn-sm my_bg_two" href="{{url('/inv/sell/'.$nid)}}'+'/'+fund+'">Sell</a>';
				document.getElementById('down_btn').innerHTML='<a class="btn btn-sm my_bg_one text-white" href="{{url('/inv/holding-download')}}'+'/'+fund+'/'+reg_id+'/'+clnm+'">Download</a>';
			}
		}
	</script>
	<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/bootbox.min.js') }} "></script>
	<script type="text/javascript">
		function mybootBox(){
			bootbox.alert({
			    message: "<span style='color: red;'>Please Select <b>Fund !!!</b></span>",
			    size: 'small',
			    callback: function () { location.reload(true); }
			});
		}


		$(document).ready(function(){
  			$("#fund").on('change',function(){
    			var fund_id = $(this).val();
    			var reg_id = $('#rid').val();

    			if(fund_id === ''){
					$('#conf').val('0');
					$('#avg').val('0');
					$('#sur').val('0');
					$('#sur_val').val('0');
					$('#gl').val('0');
					$('#pend_sub').val('0');
					$('#pend_sur').val('0');
					$('#holding').val('0');
    			}
    			else{
	    			$.ajax({
						url: '/inv/buy_sell_rate/'+fund_id+'/'+reg_id,
						type: "GET",
						data : {"_token":"{{ csrf_token() }}"},

						success:function(data) {
						    if(data){
						        $('#conf').val('0');
						        $('#avg').val('0');
						        $('#sur').val('0');
						        $('#sur_val').val('0');
						        $('#gl').val('0');
						        $('#pend_sub').val('0');
						        $('#pend_sur').val('0');
						        $('#holding').val('0');
						        $.each(data, function(key, value){

						            $('#conf').val(value.TOTAL_UNITS);

						            var rem_cost = value.rc;
						            var rem_tot = value.rt;
						            var avrg = rem_cost / rem_tot;

						        	$('#avg').val(avrg.toFixed(2));
						        	$('#sur').val(value.SELL_RATE);
						        	
						        	var unit = value.TOTAL_UNITS;
						        	var valu = value.SELL_RATE;
						        	var total_value = unit * valu;
						        	$('#sur_val').val(total_value.toFixed(2));

						        	$('#pend_sub').val(value.BUY_PADDING_UNIT);
						        	$('#pend_sur').val(value.SELL_PADDING_UNIT);
						        	$('#holding').val(value.TOTAL_UNITS);

						        	var total_cost = unit * avrg;
						        	var g_l = total_value - total_cost;
						        	var into = g_l * 100;
						        	var gl_per = into / total_cost;
						        	$('#gl').val(gl_per.toFixed(2)+' %');
						        });
						        }else{
						        	$('#conf').val('0');
						        	$('#avg').val('0');
						        	$('#sur').val('0');
						        	$('#sur_val').val('0');
						        	$('#gl').val('0');
						        	$('#pend_sub').val('0');
						        	$('#pend_sur').val('0');
						        	$('#holding').val('0');
						    }
						}
					});
    			}	
	            
  			});
		});

	</script>

	<script>
        	window.onload = function() {
	  		var d = new Date();
	 		var weekday = new Array(7);
	  		weekday[0] = "Sunday";
	 		weekday[1] = "Monday";
	  		weekday[2] = "Tuesday";
	  		weekday[3] = "Wednesday";
	  		weekday[4] = "Thursday";
	  		weekday[5] = "Friday";
	  		weekday[6] = "Saturday";
	  		var n = weekday[d.getDay()];
	  						
	  		if(n == "Thursday" || n == "Friday" || n == "Saturday"){
	  			document.getElementById("buy_sell_off").innerHTML = 'To Day is Transaction Holiday';
	  			document.getElementById("buy_sell_off").style.color = 'red';
	  			document.getElementById("buy_sell_off").style.fontSize  = '12px';
	  		}
							
		};

		/*document.getElementById("buy_sell_off").innerHTML = 'Please be informed that CAPM Company Limited will be declared the Transaction Holiday of CAPM Unit Fund from 1st July, 2020 to 7th July, 2020 due to Book closure period of CAPM Unit Fund. Also, the transaction of CAPM Unit Fund will reopen from 8th July, 2020 as per regular scheduled time.';
	  	document.getElementById("buy_sell_off").style.color = 'red';
	  	document.getElementById("buy_sell_off").style.fontSize  = '12px';
	  	document.getElementById("buy_sell_off").style.textAlign = "justify";*/

	</script>

@endpush
