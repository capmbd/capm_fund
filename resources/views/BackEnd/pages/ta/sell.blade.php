@extends('BackEnd.pages.ta.master')

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

		.appl_data tr td input{
			border: 1px solid #2b8a78;
    		padding: 2px 3px;
    		width: 250px;
		}

		#appl_name, #appl_bank, #appl_ac, #h_unit, #r_unit, #b_unit{
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

		hr{
			color: #1b564b;
    		border: 1px solid;
    		opacity: 0.5;
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

@section('class4')
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
														<i class="feather icon-credit-card"></i>
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
							<form id="sell_form" action="{{ url('/ta/sell/save') }}" method="post">
								@csrf
							<div class="pcoded-inner-content">
								<div class="main-body">
									<div class="page-wrapper">
										<div class="page-body">
											<div class="row">
												<div class="col-xl-12 col-md-12">
													<div class="card proj-t-card">
														<div class="card-body">
															<div class="col-sm-8">
																<select id="PRO_REG_ID" name="fund" class="col-sm-6 offset-sm-6 form-select" required>
																	<option value="">---Select Fund---</option>
																	@foreach($portfolios as $portfolio)
																		<option value="{{$portfolio->PRO_REG_ID}}">{{$portfolio->PORTFOLIO_NAME}}</option>
																	@endforeach
																</select>
															</div>
															<hr>
															<br>

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
																	</tr>
																	<tr>
																		<td><span>Holding Units:</span></td>
																		<td>
																			<input type="text" name="h_unit" id="h_unit" disabled>
																		</td>
																	</tr>
																	<tr>
																		<td><span>Block Units:</span></td>
																		<td>
																			<input type="text" name="b_unit" id="b_unit" disabled>
																		</td>
																	</tr>
																	<tr>
																		<td><span>Remaining Units:</span></td>
																		<td>
																			<input type="text" name="r_unit" id="r_unit" disabled>
																		</td>
																	</tr>
																	<input type="hidden" name="appl_mail" id="appl_mail" readonly>
																</table>
															</div>
															</div>
														</div>
													</div>
												</div>

												<div class="col-xl-12 col-md-12">
													<div class="card proj-t-card">
														<div class="card-body">
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
		      																		<input id="qty" class="sell_inp" type="text" name="quantity">

		      																		<p class="qty_req"><span>Note:</span> Enter Quantity & Click Outside of The Box</p>
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
					},
					fund:{
						required:true
					},
					id_no:{
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
					},
					fund:{
						required: "Please Select Fund"
					},
					id_no:{
						required: "Please Enter Investor ID"
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
        $('#PRO_REG_ID').blur(function(){
        	var appl_id = $('#id_no').val();
            if(appl_id != ''){
            	bootbox.alert({
					message: "<span style='color: red;'>Fund Has Been Changed !!!</span>",
					size: 'small',
					callback: function () { location.reload(true); }
				});
            }
        });
    });
		

		$(document).ready(function() {
        $('#id_no').on('blur', function() {
            var appl_id = $(this).val();
            var fund_id = $('#PRO_REG_ID').val();
            var investor = $('#appl_name').val();

            if(investor != ''){
            	bootbox.alert({
					message: "<span style='color: red;'>Investor Has Been Changed !!!</span>",
					size: 'small',
					callback: function () { location.reload(true); }
				});
            }else{

            if(fund_id === ''){
    			bootbox.alert({
					message: "<span style='color: red;'>Select Fund</span>",
					size: 'small',
						    callback: function () { location.reload(true); }
				});
    		}else{
    			if(appl_id){
	                $.ajax({
	                    url: '/ta/findWithapplid/'+appl_id+'/'+fund_id,
	                    type: "GET",
	                    data : {"_token":"{{ csrf_token() }}"},
	                    dataType: "json",

	                    success:function(data) {

	                      if(data != ''){
	                        $('#appl_name').val('');
	                    	$('#appl_bank').val('');
	                    	$('#appl_ac').val('');
	                    	$('#appl_mail').val('');
	                    	$('#h_unit').val('0');
	                    	$('#r_unit').val('0');
	                    	$('#b_unit').val('0');
	                        $.each(data, function(key, value){
	                        $("#appl_name").val(value.NAME);
	                        $("#appl_bank").val(value.BANK_NAME);
	                        $("#appl_ac").val(value.ACCOUNT_NO);
	                        $('#appl_mail').val(value.EMAIL);
	                        $('#h_unit').val(value.TOTAL_UNITS);
	                        $('#b_unit').val(value.BLOCK_UNITS);
	                        var hold = value.TOTAL_UNITS
	                        var block = value.BLOCK_UNITS;
	                        var pend = value.SELL_PADDING_UNIT;

	                        var temp = hold - block;
	                        var sable = temp - pend;
	                        $('#r_unit').val(sable);
	                    });
	                  }else{
	                    $('#appl_name').val('');
	                    $('#appl_bank').val('');
	                    $('#appl_ac').val('');
	                    $('#appl_mail').val('');
	                    $('#h_unit').val('0');
	                    $('#r_unit').val('0');
	                    $('#b_unit').val('0');
	                  }
	                  }
	                });
	            }else{
	                $('#appl_name').val('');
	                $('#appl_bank').val('');
	                $('#appl_ac').val('');
	                $('#appl_mail').val('');
	                $('#h_unit').val('0');
	                $('#r_unit').val('0');
	                $('#b_unit').val('0');
	            }
    		}

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
					                url: '/ta/sell_rate/'+fund_id,
					                type: "GET",
					                data : {"_token":"{{ csrf_token() }}"},

					                success:function(data) {
					                	if(data){
					                		$('#sr_one').empty();
					                		$.each(data, function(key, value){

					                			$("#sr_one").val(value.SELL_RATE);
					                		});
					                	}else{
					                		$('#sr_one').empty();
					                	}
					                }
					            });

  			});
		});  

  $(document).ready(function(){
  		$("#qty").blur(function(){

    			var qty = $(this).val();
    			var fund_id = $('#PRO_REG_ID').val();
    			var rem = $('#r_unit').val();
    			var cl_id = $('#id_no').val();

    			if(qty % 10 == 0){

    				if(cl_id === ''){
    					bootbox.alert({
						    message: "<span style='color: red;'>Please Enter Investor ID</span>",
						    size: 'small',
						    callback: function () { location.reload(true); }
						});
    				}
    				else{
    					if((rem - qty) >= 0 ){
    					if(qty === ''){
    					
		    				}
		    				else{
		    					$.ajax({
					                url: '/ta/sell_rate/'+fund_id,
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