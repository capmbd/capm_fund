@extends('BackEnd.pages.investor.master')

@section('title')
	Surrender
@endsection

@push('css')
	<style>
		.sell_inp{
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

		#h_unit, #r_unit, #b_unit{
			background: #fff;
			border: none;
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
												<li class="breadcrumb-item"><a href="#">Surrender of Units Of CAPM Managed Unit Funds</a></li>
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
															<div class="inv_info col-sm-7 offset-sm-4">
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
																	@if($holding != '')
																	<tr>
																		<td><span>Holding Units:</span></td>
																		<td>
																			<input type="text" id="h_unit" value="{{$holding->TOTAL_UNITS}}" disabled>
																		</td>
																	</tr>
																	@else
																	<tr>
																		<td><span>Holding Units:</span></td>
																		<td>
																			<input type="text" id="h_unit" value="0" disabled>
																		</td>
																	</tr>
																	@endif
																	@if($block != '')
																	<tr>
																		<td><span>Block Units:</span></td>
																		<td>
																			<input type="text" id="b_unit" value="{{$block->BLOCK_UNITS}}" disabled>
																		</td>
																	</tr>
																	@endif
																	<tr>
																		<td><span>Remaining Units:</span></td>
																		<td>
																			<input type="text" id="r_unit" value="{{$rem}}" disabled>
																		</td>
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
															<form id="sell_form" action="{{ url('/inv/sell/save') }}" method="post">
																@csrf

																<?php
                    												$ta_id = Session::get('ta');
                    											?>

                    											<input value="{{$name}}" name="apl_name" type="hidden">
																<input value="{{$bank}}" name="appl_bank" type="hidden">
																<input value="{{$acno}}" name="appl_ac" type="hidden">
																<input value="{{$invmail}}" name="appl_mail" type="hidden">

																<input type="hidden" name="SC_ID" value="{{$ta_id}}">
																<input type="hidden" name="id_no" value="{{$id}}">


															<div class="col-sm-8">
																<select name="fund" id="PRO_REG_ID" class="col-sm-4 offset-sm-7 form-select" required>
																	<option value="{{$port->PRO_REG_ID}}">{{$port->PORTFOLIO_NAME}}</option>
																</select>
															</div>
															<br>

																<div class="table-responsive">
																	<table class="table table-bordered tbl_dta tbl_inv">
	    																<thead>
	      																	<tr class="tbl_inv_th">
	      																		<th>Quantity</th>
	      																		<th>Price Per Unit (Tk)</th>
	      																		<th>Total Amount (Tk)</th>
	      																		<th>Net Payable (Tk)</th>
	      																		<th>Payment Advise</th>
	      																		<th id="pay_head">EFT</th>
	      																	</tr>
	    																</thead>
	    																<tbody>
	      																	<tr>
		      																	<td>
		      																		<input class="sell_inp" id="qty" type="text" name="quantity">
		      																	</td>
		      																	<td>
		      																		<input id="sr_one" class="sell_inp" type="text" disabled>
		      																		<input id="sr_two" name="SELLRATE" type="hidden">
		      																	</td>
		      																	<td>
		      																		<input id="ta_one" class="sell_inp" type="text" disabled>
		      																		<input id="ta_two" name="TOTALAMOUNT" type="hidden">
		      																	</td>
		      																	<td>
		      																		<input id="np_one" class="sell_inp" type="text" disabled>
		      																		<input id="np_two" type="hidden">
		      																	</td>
		      																	<td>
		      																		<label><input type="radio" name="pay_mode" onclick="paymode(this);" value="eft" id="eft">EFT</label><br>
		      																		<label><input type="radio" name="pay_mode" onclick="paymode(this);" value="mb" id="mb">Mobile Banking</label><br>
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
<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/jquery.validate.js') }} "></script>
<script type="text/javascript" src="{{asset('BackEnd/files/assets/js/bootbox.min.js')}}"></script>
<script type="text/javascript">
		$().ready(function() {
			$("#sell_form").validate({
				rules: {
					quantity:{
						required:true,
						number:true,
						min:10
					},
					pay_mode:{
						required:true
					},
					mb_ac:{
						required:true
					},
					m_no:{
						required:true
					},
					banks:{
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
						required: "Please Select One Payment Advise"
					},
					mb_ac:{
						required: "Please Enter Mobile Bank A/C"
					},
					m_no:{
						required: "Please Enter Mobile No"
					},
					banks:{
						required: "Please Enter Bank Name"
					}
				}
			});

		});

		function paymode(radio){
			if(radio!=null){
				if(radio.id=='eft'){
					document.getElementById('pay_head').innerHTML='EFT';
					document.getElementById('1stL').innerHTML='';
					document.getElementById('1stp').innerHTML='<input type="text" disabled>';
					document.getElementById('2ndL').innerHTML='';
					document.getElementById('2ndp').innerHTML='<input type="text" disabled>';
					document.getElementById('3rdL').innerHTML='';
					document.getElementById('3rdp').innerHTML='<input type="text" disabled>';
				}

		   		else if(radio.id=='mb'){
					document.getElementById('pay_head').innerHTML='Mobile Banking';
					document.getElementById('1stL').innerHTML='Mobile Bank A/C:';
					document.getElementById('1stp').innerHTML='<input type="text" name="mb_ac" id="mb_ac"/>';
					document.getElementById('2ndL').innerHTML='Mobile No';
					document.getElementById('2ndp').innerHTML='<input type="text" name="m_no" id="m_no"/>';
					document.getElementById('3rdL').innerHTML='Bank:';
					document.getElementById('3rdp').innerHTML='<input type="text" id="banks" name="banks"/>';
				}
			}
		}

		$(document).ready(function(){
  			$("#qty").blur(function(){

    			var qty = $(this).val();
    			var fund_id = $('#PRO_REG_ID').val();
    			var rem = $('#r_unit').val();

    			if(qty % 10 == 0){

    				if((rem - qty) >= 0 ){
    					if(qty === ''){
    					
		    				}
		    				else{
		    					$.ajax({
					                url: '/inv/sell_rate/'+fund_id,
					                type: "GET",
					                data : {"_token":"{{ csrf_token() }}"},

					                success:function(data) {
					                	if(data){
					                		$('#sr_one').empty();
					                		$('#sr_two').empty();
					                		$('#ta_one').empty();
					                		$('#ta_two').empty();
					                		$('#np_one').empty();
					                		$('#np_two').empty();
					                		$.each(data, function(key, value){
					                			var rate = value.SELL_RATE;
					                			var total = rate * qty;

					                			$("#sr_one").val(rate);
					                			$("#sr_two").val(rate);
					                			$("#ta_one").val(total.toFixed(2));
					                			$("#ta_two").val(total.toFixed(2));
					                			$("#np_one").val(total.toFixed(2));
					                			$("#np_two").val(total.toFixed(2));
					                		});
					                	}else{
					                		$('#sr_one').empty();
					                		$('#sr_two').empty();
					                		$('#ta_one').empty();
					                		$('#ta_two').empty();
					                		$('#np_one').empty();
					                		$('#np_two').empty();
					                	}
					                }
					            });
		    				}
    				}else{
    					bootbox.alert({
						    message: "<span style='color: red;'>Your Remaining Units Are Less Than Your Quantity !!!</span>",
						    callback: function () { location.reload(true); }
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

        $("#sell_form").submit(function (e) {
            $("#sub").attr("disabled", true);
            return location.reload(true);
        });
    });
</script>

@endpush