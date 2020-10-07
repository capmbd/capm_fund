@extends('BackEnd.master_one')

@section('title')
	Tax Certificate
@endsection

@section('class3')
	active
@endsection

@push('css1')
	<style type="text/css">

		@media print{
			body{
				background-color: #ffffff;
				font-size: .875rem;
				overflow-x: hidden;
				color: #333;
				font-family: open sans, sans-serif;
				background-image: linear-gradient(-45deg, rgba(255, 255, 255 ), rgba(255, 255, 255));
			}
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
			background: #3f4d67;
    		color: #fff;
		}

		#inv_details{
			width: 100%;
			margin-bottom: 20px;
		}

		#inv_details tr th{
			border: 1px solid #000;
			padding: 3px;
			font-size: 15px;
		}

		#inv_details tr td{
			border: 1px solid #000;
			padding: 3px;
			font-size: 15px;
		}

		#apl_details{
			width: 100%;
			margin-bottom: 20px;
		}

		#apl_details tr th{
			border: none;
			padding: 3px;
			font-size: 15px;
		}

		#apl_details tr td{
			border: none;
			padding: 3px;
			font-size: 15px;
		}


		#table_part{
			display:none;
		}

		#syear{
			font-size: 15px;
			color: #000;
			margin-bottom: 10px;
		}

		#date_time{
			border:none;
		}

		.head_p{
			font-size: 16px;
    		color: #000;
    		font-weight: 600;
    		margin-bottom: 20px;
		}

		.head_p span{
			font-weight: 300;
		}

		.report_border{
			padding: 2px;
			border: 1px solid #02646F;
		}

		.report{
			border: 1px solid #02646F;
			padding: 10px;
		}

		.print{
			color: #fff;
			margin-top: 5px;
		}

		.subs_p{
			font-size: 16px;
    		color: #000;
    		font-weight: 600;
    		margin-bottom: 20px;
		}

		.concern{
			font-size: 13px;
    		color: #000;
    		text-align: justify;
		}

		.concern span{
			font-weight: 700;
		}

		.img_logo{
			padding: 5px;
    		margin: 15px 0px;
		}

		.capmLogo{
			height: 60px;
    		width: 170px;
		}

		.ufLogo{
			height: 60px;
    		width: 170px;
    		float: right;
		}

		.qr_photo{
			height: 175px;
    		width: 175px;
    		margin-left: 39%;
		}

		.fright{
			float: right;
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
							<a href=" {{ url('/subscription-redumption/Tax-Certificate') }} ">
								<i class="feather icon-pie-chart"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/subscription-redumption/Tax-Certificate') }} ">Tax Certificate</a></li>
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
						<div class="col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Tax Certificate</h5>
									<p class="text-success insert_message" id="mail_msg"></p>
									<p class="text-danger insert_message" id="mail_msg_n"></p>
								</div>
								<div class="card-block">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<div class="row form-group">
													<div class="col-sm-3">
														<label class="col-form-label">Registration No</label>
													</div>
													<div class="col-sm-9">
														<input type="text" id="reg_no" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-3">
														<label class="col-form-label">Year:</label>
													</div>
													<div class="col-sm-9">
													<input id='year' value="<?php echo date("Y");?>" type='number' class="form-control autonumber"/>
													</div>
												</div>
												<div class="col-sm-9 offset-md-3">
													<button id="sub_btn" type="submit" class="btn btn-primary m-b-0">Submit</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div id="table_part" class="col-md-12 col-sm-12">
							<div class="card">
								<div class="card-block">
										<div class="row">
											<div class="col-md-10 col-sm-10 offset-md-1">
												<div id="printDiv">
												<div class="report_border">
													<div class="report">
														<div class="img_logo">
															<img class="capmLogo" src="{{asset('BackEnd/files/assets/images/logo.png')}}"/>
															<img class="ufLogo" src="{{asset('BackEnd/files/assets/images/unitfund.png')}}"/>
														</div>
														<p class="text-center head_p">CAPM (Capital & Asset Portfolio Management) Company Limited <br> Safura Tower (5th Floor), 20 Kemal Ataturk Avenue <br> <span>Banani C/A, Dhaka - 1213</span></p>

														<p id="syear"></p>
														<p class="text-center subs_p">To Whom It May Concern</p>

														<p class="concern">This is to certify that Mr./ Mrs./ Ms. <span id="inv_name"></span> is a registered investor of <span id="fund_name">CAPM Unit Fund</span>. His/Her details information are given below:</p>

														<table id="apl_details">
															<tr>
																<th>Investment Period:</th>
																<td id="period"></td>
															</tr>
															<tr>
																<th>Investor ID:</th>
																<td id="regi_no"></td>
															</tr>
															<tr>
																<th>Investor Name:</th>
																<td id="apl_name"></td>
															</tr>
															<tr>
																<th>Father's / Husband Name:</th>
																<td id="father"></td>
															</tr>
															<tr>
																<th>Mother's Name:</th>
																<td id="mother"></td>
															</tr>
														</table>

														<p class="text-center subs_p">Investment Details</p>

							                            <table id="inv_details">
							                                <tr>
																<th>Balance(Units) as on 1st Jul <span id="prev_year"></span></th>
																<td><span id="prev_unit" class="fright"></span></td>
															</tr>
															<tr>
																<th>Unit Subscribed During this Period</th>
																<td><span id="curr_subs" class="fright"></span></td>
															</tr>
															<tr>
																<th>Unit Surrendered During this Period</th>
																<td><span id="curr_sur" class="fright"></span></td>
															</tr>
															<tr>
																<th>Balance(Units) as on 30th June <span id="curr_year"></span></th>
																<td><span id="curr_blnc" class="fright"></span></td>
															</tr>
															<tr>
																<th>Tax Rebateable Unit For This Year (<span id="twoyear"></span>)</th>
																<td><span id="rebat_blnc" class="fright"></span></td>
															</tr>
															<tr>
																<th>Tax Rebateable Investment For This Year (<span id="threeyear"></span>)</th>
																<td>BDT <span id="rebat" class="fright"></span></td>
															</tr>
							                            </table>
							                            <div class="qr_img">
							                            	<img class="qr_photo" id="qr_photo" src=""/>
							                            </div>
						                            </div>
						                        </div>
												</div>
					                            <button id="print_btn" class="btn btn-sm my_bg_one print">Print</button>
					                            <button id="mail_btn" class="btn btn-sm my_bg_one print">Send Mail</button>
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
	</div>
</div>
@endsection
@push('js')
<script type="text/javascript" src="{{asset('BackEnd/files/assets/js/bootbox.min.js')}}"></script>
<script type="text/javascript">

	$(function() {  
    var search_id = [

      	@foreach ($regno as $id)
      		"{{ $id->REGISTRATION_NO }}",
      	@endforeach
    ];

    $("#reg_no").autocomplete({  
      	source: search_id,
      	minLength:1
    	});  
  	});

	$(document).ready(function(){
  			$("#sub_btn").on('click',function(){

    			var inv_id = $('#reg_no').val();
            	var year = $('#year').val();
            	var syear = year;
            	var syearprev = year - 1;

    			if(inv_id === ''){
    				bootbox.alert({
						    message: "<span style='color: red;'>Select Registration Number</span>",
						    size: 'small',
						    callback: function () { location.reload(true); }
						});
    			}
    			else if(year === ''){
    				bootbox.alert({
						    message: "<span style='color: red;'>Select Year</span>",
						    size: 'small',
						    callback: function () { location.reload(true); }
						});
    			}
    			else{

    				$.ajax({
			            url: '/subscription-redumption/tax_certificatebyid/'+inv_id+'/'+year,
			            type: "GET",
			            data : {"_token":"{{ csrf_token() }}"},
			            success:function(data) {
			            	var el = document.getElementById("table_part");
			            	el.style.display = "block";
			            	document.getElementById("syear").innerHTML = 'July 1, '+syear;
			            	
			            	if(data){
			                	$.each(data, function(key, value){

			                		var reb_temp = value.prev + value.b_curr;
			                		var currblnc = reb_temp - value.s_curr;

			                		document.getElementById("inv_name").innerHTML = value.name;
			                		document.getElementById("period").innerHTML = '01-Jul-'+syearprev+' to 30-Jun-'+year;
			                		document.getElementById("regi_no").innerHTML = value.reg;
			                		document.getElementById("apl_name").innerHTML = value.name;
			                		document.getElementById("father").innerHTML = value.father;
			                		document.getElementById("mother").innerHTML = value.mother;

			                		document.getElementById("prev_year").innerHTML = syearprev;
			                		document.getElementById("curr_year").innerHTML = syear;
			                		document.getElementById("twoyear").innerHTML = syearprev+'-'+syear;
			                		document.getElementById("threeyear").innerHTML = syearprev+'-'+syear;
			                		document.getElementById("prev_unit").innerHTML = value.prev.toLocaleString(undefined, {maximumFractionDigits:2});
			                		document.getElementById("curr_subs").innerHTML = value.b_curr.toLocaleString(undefined, {maximumFractionDigits:2});
			                		document.getElementById("curr_sur").innerHTML = value.s_curr.toLocaleString(undefined, {maximumFractionDigits:2});
			                		document.getElementById("curr_blnc").innerHTML = currblnc.toLocaleString(undefined, {maximumFractionDigits:2});
			                		document.getElementById("rebat_blnc").innerHTML = value.blnc.toLocaleString(undefined, {maximumFractionDigits:2});
			                		document.getElementById("rebat").innerHTML = value.rebat.toLocaleString(undefined, {maximumFractionDigits:2});

			                		 document.getElementById("qr_photo").src = value.qr_name;
			                	});
			                }else{
			                }
			            }
			        });	
    				
    			}
	            
  			});
		});


		$(document).ready(function(){
  			$("#mail_btn").on('click',function(){

    			var inv_id = $('#reg_no').val();
            	var year = $('#year').val();

    			$.ajax({
			    	url: '/subscription-redumption/tax_cer_mail/'+inv_id+'/'+year,
			        type: "GET",
			        data : {"_token":"{{ csrf_token() }}"},
			        success:function(data) {

			        	if(data == 'Tax Certificate Send Successfully Done'){
                            document.getElementById("mail_msg").innerHTML=data;
                        }
                 		else{
                            document.getElementById("mail_msg_n").innerHTML='Tax Certificate Not Send';
                        }
			        }
			    });	
    				
    			
	            
  			});
		});   

</script>

<script type="text/javascript">
	function printReport() {
        var printContents = document.getElementById('printDiv').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

	$('#print_btn').on('click',function(){
		printReport();
	})

</script>
@endpush