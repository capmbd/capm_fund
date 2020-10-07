@extends('BackEnd.pages.investor.master')

@section('title')
	Subscription
@endsection

@push('css')
	<style>
		.buy_inp{
			color: #000;
			padding: 0px 2px;
			border: 1px solid #2b8a78;
			width: 125px;
		}
		#res{
			color: #fff;
		}
		#sub{
			color: #fff;
		}
		label.error {
			color: #CC0000;
			font-weight: 300;
			display: block;
		}
		input[type=radio] {
    		margin-right: 10px;
		}
		label{
			color:#2b8a78;
		}

		.inp_td p input{
			width: 100%;
    		border: 1px solid #2b8a78;
    		padding: 2px 3px;
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
											<ul class="breadcrumb">
												<li class="breadcrumb-item">
													<a href=" # ">
														<i class="feather icon-home"></i>
													</a>
												</li>
												<li class="breadcrumb-item"><a href="#">Subscription of Units Of CAPM Managed Unit Funds</a></li>
											</ul>
											<ul class="breadcrumb">
												<li class="breadcrumb-item">
													<a href=" # ">
														<i class="fas fa-calendar-alt"></i>
													</a>
												</li>
												<li class="breadcrumb-item"><a href="#">Date: 
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
												<div class="col-xl-12 col-md-12">
													<div class="card proj-t-card">
														<div class="card-body">
															
															<div class="row align-items-center text-center">														
															<?php
																$id = Session::get('inv_id');
																$name = Session::get('inv_name');
																$bank = Session::get('bank');
																$acno = Session::get('acno');
																$invmail = Session::get('invmail');
															?>
															<div class="inv_info col-sm-6 offset-sm-4">
																<table>
																	<tr>
																		<td><span>Investor ID:</span></td>
																		<td>{{$id}}</td>
																	</tr>
																	<tr>
																		<td><span>Name:</span></td>
																		<td>{{$name}}</td>
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

												<div class="col-xl-12 col-md-12">
													<div class="card proj-t-card">
														<div class="card-body">
															<form id="buy_form" action="{{ url('/inv/buy/save') }}" method="post">
																@csrf
															<input value="{{$name}}" name="apl_name" type="hidden">
															<input value="{{$bank}}" name="appl_bank" type="hidden">
															<input value="{{$acno}}" name="appl_ac" type="hidden">
															<input value="{{$invmail}}" name="appl_mail" type="hidden">

															<div class="col-sm-8">
																<select name="fund" class="col-sm-4 offset-sm-7 form-select" id="PRO_REG_ID" required>
																	<option value="{{$port->PRO_REG_ID}}">{{$port->PORTFOLIO_NAME}}</option>
																</select>
															</div>
															<br>
																<?php
                    												$ta_id = Session::get('ta');
                    											?>

																<input type="hidden" name="SC_ID" value="{{$ta_id}}">
																<input type="hidden" name="id_no" value="{{$id}}">

																<div class="table-responsive">
																	<table class="table table-bordered tbl_dta tbl_inv">
	    																<thead>
	      																	<tr class="tbl_inv_th">
	      																		<th>Quantity</th>
	      																		<th>Price Per Unit (Tk)</th>
	      																		<th>Total Cost (Tk)</th>
	      																		<th>Payment Mode</th>
	      																		<th id="pay_head">Bank Cheque Info</th>
	      																	</tr>
	    																</thead>
	    																<tbody>
	      																	<tr>
		      																	<td>
		      																		<input class="buy_inp" type="text" name="quantity" id="qty">
		      																	</td>
		      																	<td>
		      																		<input id="br_one" class="buy_inp" type="text" disabled>
		      																		<input id="br_two" name="BUYRATE" type="hidden">
		      																	</td>
		      																	<td>
		      																		<input id="tc_one" class="buy_inp" type="text" disabled>
		      																		<input id="tc_two" name="TOTALAMOUNT" type="hidden">
		      																	</td>
		      																	<td>
		      																		<label><input type="radio" name="pay_mode" onclick="paymode(this);" value="chq" id="chq">Bank Cheque</label><br>
		      																		<label><input type="radio" name="pay_mode" onclick="paymode(this);" value="pay" id="pay">Pay Order</label><br>
		      																		<label><input type="radio" name="pay_mode" onclick="paymode(this);" value="dd" id="dd">Demand Draft</label>
		      																		<label for="pay_mode" class="error" style="display:none;"></label>

		      																	</td>
		      																	<td class="inp_td">
		      																		<label id="1stL"></label>
		      																		<p id="1stp"><input type="text" disabled></p>
		      																		<label id="2ndL"></label>
		      																		<p id="2ndp"><input type="text" disabled></p>
		      																		<label id="3rdL"></label>
		      																		<p id="3rdp"><input type="text" disabled></p>
		      																		
		      																	</td>
	      																	</tr>
	    																</tbody>
	  																</table>
																</div>
																<div class="col-sm-4 offset-sm-5">
																	<input type="reset" id="res" value="Reset" class="btn btn-sm my_bg_one">
																	<input type="submit" id="sub" value="Submit" class="btn btn-sm my_bg_two">
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
<script type="text/javascript" src="{{asset('BackEnd/files/assets/js/bootbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('BackEnd/files/assets/js/jquery.validate.js')}}"></script>
<script type="text/javascript">

		$().ready(function() {
			$("#buy_form").validate({
				rules: {
					quantity:{
						required:true,
						number:true,
						min:10
					},
					pay_mode:{
						required:true
					},
					BCPODDTC_NO:{
						required:true
					},
					BCPODDTC_DATE:{
						required:true
					},
					BANK:{
						required:true
					}
				},
				messages: {
					quantity:{
						required: "Please Enter Quantity",
						number: "Quantity Must be Numeric Value",
						min: "Quantity Must be Greater or Equal 10"
					},
					pay_mode:{
						required: "Please Select One Payment Mode"
					},
					BCPODDTC_NO:{
						required: "Please Fill Up This Field"
					},
					BCPODDTC_DATE:{
						required: "Please Enter Date"
					},
					BANK:{
						required: "Please Enter Bank Name"
					}
				}
			});

		});

		function paymode(radio){
			if(radio!=null){
				if(radio.id=='chq'){
					document.getElementById('pay_head').innerHTML='Bank Cheque Info';
					document.getElementById('1stL').innerHTML='Cheque No:';
					document.getElementById('1stp').innerHTML='<input type="text" name="BCPODDTC_NO"/>';
					document.getElementById('2ndL').innerHTML='Cheque Date:';
					document.getElementById('2ndp').innerHTML='<input type="date" name="BCPODDTC_DATE"/>';
					document.getElementById('3rdL').innerHTML='Bank:';
					document.getElementById('3rdp').innerHTML='<input type="text" name="BANK"/>';
				}

		   		else if(radio.id=='pay'){
					document.getElementById('pay_head').innerHTML='Pay Order info';
					document.getElementById('1stL').innerHTML='PO No:';
					document.getElementById('1stp').innerHTML='<input type="text" name="BCPODDTC_NO"/>';
					document.getElementById('2ndL').innerHTML='PO Date:';
					document.getElementById('2ndp').innerHTML='<input type="date" name="BCPODDTC_DATE"/>';
					document.getElementById('3rdL').innerHTML='Bank:';
					document.getElementById('3rdp').innerHTML='<input type="text" name="BANK"/>';
				}

				else if(radio.id=='dd'){
					document.getElementById('pay_head').innerHTML='Demand Draft info';
					document.getElementById('1stL').innerHTML='DD No:';
					document.getElementById('1stp').innerHTML='<input type="text" name="BCPODDTC_NO"/>';
					document.getElementById('2ndL').innerHTML='DD Date:';
					document.getElementById('2ndp').innerHTML='<input type="date" name="BCPODDTC_DATE"/>';
					document.getElementById('3rdL').innerHTML='Bank:';
					document.getElementById('3rdp').innerHTML='<input type="text" name="BANK"/>';
				}
			}
		}

		$(document).ready(function(){
  			$("#qty").blur(function(){

    			var qty = $(this).val();
    			var fund_id = $('#PRO_REG_ID').val();

    			if(qty % 10 == 0){

    				if(qty === ''){
    					
    				}
    				else{
    					$.ajax({
			                url: '/inv/buy_rate/'+fund_id,
			                type: "GET",
			                data : {"_token":"{{ csrf_token() }}"},

			                success:function(data) {
			                	if(data){
			                		$('#br_one').empty();
			                		$('#br_two').empty();
			                		$('#tc_one').empty();
			                		$('#tc_two').empty();
			                		$.each(data, function(key, value){
			                			var rate = value.BUY_RATE;
			                			var total = rate * qty;

			                			$("#br_one").val(rate);
			                			$("#br_two").val(rate);
			                			$("#tc_one").val(total.toFixed(2));
			                			$("#tc_two").val(total.toFixed(2));
			                		});
			                	}else{
			                		$('#br_one').empty();
			                		$('#br_two').empty();
			                		$('#tc_one').empty();
			                		$('#tc_two').empty();
			                	}
			                }
			            });
    				}
    				
    			}else{
    				bootbox.alert({
					    message: "<span style='color: red;'>Quantity Must be Divisible by 10</span>",
					    size: 'small',
					    callback: function () { location.reload(true); }
					});
    			}
	            
  			});
		});
</script>

<script>
    $(document).ready(function () {

        $("#buy_form").submit(function (e) {
            $("#sub").attr("disabled", true);
            return location.reload(true);
        });
    });
</script>

@endpush