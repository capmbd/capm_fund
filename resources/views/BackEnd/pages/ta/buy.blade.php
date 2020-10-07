@extends('BackEnd.pages.ta.master')

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

		.appl_data tr td input{
			border: 1px solid #2b8a78;
    		padding: 2px 3px;
    		width: 250px;
		}

		#appl_name, #appl_bank, #appl_ac{
			background: #fff;
			border: none;
		}

		.ui-autocomplete {
            max-height: 300px;
            overflow-y: auto;
        }

        .ui-widget{
        	width: 248px;
        	border-bottom: 1px solid #2B8A78;
        }

		.ui-menu-item-wrapper{
			background-color: #eee;
			color: black;
			display: block;
			padding: 10px;
			font-weight: 700;
			cursor: pointer;
			border-bottom: 1px solid #fff;
		}

		.ui-menu-item-wrapper:hover{
			color: #fff;
			background: #2B8A78;
		}

		.qty_req{
		    color: #e62626;
		    margin-top: 50%;
		    width: 127px;
		    font-weight: 300;
		}

		.qty_req span{
		    font-weight: 700;
		}

	</style>
  
@endpush

@section('class3')
	active
@endsection

@section('main-content-ta')
						<div class="pcoded-content">
							<div class="page-header">
								<div class="page-block">
									<div class="row align-items-center">
										<div class="col-md-12">
											@if($success = Session::get('message'))
												<div class="alert alert-success alert-dismissible">
  													<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  													<strong>{{$success}}</strong>
												</div>
											@endif

											@if($fail = Session::get('messagen'))
												<div class="alert alert-danger alert-dismissible">
  													<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  													<strong>{{$fail}}</strong>
												</div>
											@endif
											<ul class="breadcrumb">
												<li class="breadcrumb-item">
													<a href=" # ">
														<i class="feather icon-pie-chart"></i>
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
							<form id="buy_form" action="{{ url('/ta/buy/save') }}" method="post">
								@csrf
							<div class="pcoded-inner-content">
								<div class="main-body">
									<div class="page-wrapper">
										<div class="page-body">
											<div class="row">
												<div class="col-xl-12 col-md-12">
													<div class="card proj-t-card">
														<div class="card-body">
															<div class="row align-items-center text-center">
															<div class="inv_info col-sm-6 offset-sm-4">

																<?php
																	$ta_id = Session::get('ta_un');
																	$sc_id = Session::get('ta_id');
																?>
																<input type="hidden" name="person_id" value="{{$ta_id}}">
																<input type="hidden" name="SC_ID" value="{{$sc_id}}">

																<table class="appl_data">
																	<tr>
																		<td><span>Investor ID:</span></td>
																		<td><input type="text" id="id_no" name="id_no"></td>
																	</tr>
																		<td><span>Name:</span></td>
																		<td>
																			<input type="text" name="apl_name" id="appl_name" readonly>
																		</td>
																	</tr>
																	<tr>
																		<td><span>Bank Name:</span></td>
																		<td>
																			<input type="text" name="appl_bank" id="appl_bank" readonly>
																		</td>
																	</tr>
																	<tr>
																		<td><span>Bank A/C:</span></td>
																		<td>
																			<input type="text" name="appl_ac" id="appl_ac" readonly>
																		</td>
																		<input type="hidden" name="appl_mail" id="appl_mail" readonly>
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
															<div class="col-sm-8">
																<select id="PRO_REG_ID" name="fund" class="col-sm-4 offset-sm-7 form-select" required>
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
		      																		<input class="buy_inp" id="qty" type="text" name="quantity">
		      																		
		      																		<p class="qty_req"><span>Note:</span> Enter Quantity & Click Outside of The Box</p>
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
		      																		<label><input type="radio" name="pay_mode" onclick="paymode(this);" value="bftn" id="bftn">BFTN</label><br>
		      																		<label><input type="radio" name="pay_mode" onclick="paymode(this);" value="eft" id="eft">EFT</label>
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
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
						</div>
@endsection

@push('js')
<script type="text/javascript" src="{{asset('BackEnd/files/assets/js/bootbox.min.js')}}"></script>
<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/jquery.validate.js') }} "></script>
<script type="text/javascript">

		$().ready(function() {
			$("#buy_form").validate({
				rules: {
					quantity:{
						required:true,
						number:true,
						min:10
					},
					BANK:{
						required:true
					},
					pay_mode:{
						required:true
					},
					fund:{
						required:true
					},
					id_no:{
						required:true
					},
					BCPODDTC_NO:{
						required:true
					},
					BCPODDTC_DATE:{
						required:true
					}
				},
				messages: {
					quantity:{
						required: "Please Enter Quantity",
						number: "Quantity Must be Numeric Value",
						min: "Quantity Must be Greater or Equal 10"
					},
					BANK:{
						required: "Please Enter Bank Name"
					},
					pay_mode:{
						required: "Please Select One Payment Mode"
					},
					fund:{
						required: "Please Select Fund"
					},
					id_no:{
						required: "Please Enter Investor ID"
					},
					BCPODDTC_NO:{
						required: "Please Fill Up This Field"
					},
					BCPODDTC_DATE:{
						required: "Please Enter Date"
					}
				}
			});

		});

		function paymode(radio){
			if(radio!=null){
				if(radio.id=='chq'){
					document.getElementById('pay_head').innerHTML='Bank Cheque Info';
					document.getElementById('1stL').innerHTML='Cheque No:';
					document.getElementById('1stp').innerHTML='<input type="text" name="BCPODDTC_NO" />';
					document.getElementById('2ndL').innerHTML='Cheque Date:';
					document.getElementById('2ndp').innerHTML='<input type="date" name="BCPODDTC_DATE" />';
					document.getElementById('3rdL').innerHTML='Bank:';
					document.getElementById('3rdp').innerHTML='<input type="text" name="BANK" />';
				}

		   		else if(radio.id=='pay'){
					document.getElementById('pay_head').innerHTML='Pay Order info';
					document.getElementById('1stL').innerHTML='PO No:';
					document.getElementById('1stp').innerHTML='<input type="text" name="BCPODDTC_NO" />';
					document.getElementById('2ndL').innerHTML='PO Date:';
					document.getElementById('2ndp').innerHTML='<input type="date" name="BCPODDTC_DATE" />';
					document.getElementById('3rdL').innerHTML='Bank:';
					document.getElementById('3rdp').innerHTML='<input type="text" name="BANK" />';
				}

				else if(radio.id=='bftn'){
					document.getElementById('pay_head').innerHTML='BFTN info';
					document.getElementById('1stL').innerHTML='Transfer Code:';
					document.getElementById('1stp').innerHTML='<input type="text" name="BCPODDTC_NO" />';
					document.getElementById('2ndL').innerHTML='Transfer Date:';
					document.getElementById('2ndp').innerHTML='<input type="date" name="BCPODDTC_DATE" />';
					document.getElementById('3rdL').innerHTML='Bank:';
					document.getElementById('3rdp').innerHTML='<input type="text" name="BANK" />';
				}

				else if(radio.id=='eft'){
					document.getElementById('pay_head').innerHTML='EFT info';
					document.getElementById('1stL').innerHTML='Transfer Code No:';
					document.getElementById('1stp').innerHTML='<input type="text" name="BCPODDTC_NO" />';
					document.getElementById('2ndL').innerHTML='Transfer Date:';
					document.getElementById('2ndp').innerHTML='<input type="date" name="BCPODDTC_DATE" />';
					document.getElementById('3rdL').innerHTML='Bank:';
					document.getElementById('3rdp').innerHTML='<input type="text" name="BANK" />';
				}
			}
		}

		

		$(document).ready(function() {
        $('#id_no').on('change', function() {
            var appl_id = $(this).val();

            if(appl_id){
                $.ajax({
                    url: '/ta/findWithapplidone/'+appl_id,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",

                    success:function(data) {

                      if(data){
                        $('#appl_name').empty();
                        $('#appl_bank').empty();
                        $('#appl_ac').empty();
                        $('#appl_mail').empty();
                        $.each(data, function(key, value){
                        $("#appl_name").val(value.NAME);
                        $("#appl_bank").val(value.BANK_NAME);
                        $("#appl_ac").val(value.ACCOUNT_NO);
                        $("#appl_mail").val(value.EMAIL);
                    });
                  }else{
                    $('#appl_name').empty();
                    $('#appl_bank').empty();
                    $('#appl_ac').empty();
                    $('#appl_mail').empty();
                  }
                  }
                });
            }else{
                $('#appl_name').empty();
                $('#appl_bank').empty();
                $('#appl_ac').empty();
                $('#appl_mail').empty();
            }
        });
    });

	
 	$(function() {  
    var search_id = [

      	@foreach ($regno as $id)
      		"{{ $id->REGISTRATION_NO }}",
      	@endforeach
    ];

    $( "#id_no" ).autocomplete({  
      	source: search_id,
      	minLength:1
    });  
  });

 	$(document).ready(function(){
  		$("#PRO_REG_ID").on('click',function(){

    		var fund_id = $(this).val();
    					$.ajax({
			                url: '/ta/buy_rate/'+fund_id,
			                type: "GET",
			                data : {"_token":"{{ csrf_token() }}"},

			                success:function(data) {
			                	if(data){
			                		$('#br_one').empty();
			                		$.each(data, function(key, value){
			       
			                			$("#br_one").val(value.BUY_RATE);
			                		});
			                	}else{
			                		$('#br_one').empty();
			                	}
			                }
			            });
	            
  			});
		}); 

    $(document).ready(function(){
  			$("#qty").blur(function(){

    			var qty = $(this).val();
    			var fund_id = $('#PRO_REG_ID').val();

    			if(fund_id === ''){
    				bootbox.alert({
						    message: "<span style='color: red;'>Select Fund</span>",
						    size: 'small',
						    callback: function () { location.reload(true); }
						});
    			}else{
    				if(qty % 10 == 0){

    				if(qty === ''){
    					
    				}
    				else{
    					$.ajax({
			                url: '/ta/buy_rate/'+fund_id,
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