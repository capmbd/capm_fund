@extends('BackEnd.master_one')

@section('title')
	Dividend Warrant
@endsection

@section('class7')
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

		#apl_details {
    		margin-top: 50px;
    		margin-bottom: 20px;
		}

		#apl_details tr th{
			border: none;
			padding: 3px;
		}

		#apl_details tr td{
			border: none;
			padding: 3px;
		}


		#table_part{
			display:none;
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

		.title_p{
			font-size: 18px;
    		color: #000;
    		font-weight: 600;
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

		.dvdnd_details{
			text-align: justify;
			font-size: 14px;
    		color: black;
		}

		.br{
			text-align: justify;
			font-size: 14px;
    		color: black;
    		font-weight: 600;
		}

		.dvdnd_info{
			margin: 30px 0px;
		}

		.dvdnd_info tr td{
			padding-right: 20px;
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
							<a href=" {{ url('corporate-action/dividend-warrant') }} ">
								<i class="feather icon-link"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('corporate-action/dividend-warrant') }} ">Dividend Warrant</a></li>
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
									<h5>Dividend Warrant</h5>
									<p class="text-success insert_message" id="mail_msg"></p>
									<p class="text-danger insert_message" id="mail_msg_n"></p>
								</div>
								<div class="card-block">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<div class="row form-group">
													<div class="col-sm-3">
														<label class="col-form-label">Fund</label>
													</div>
													<div class="col-sm-9">
														<select name="f_name" id="f_name" class="col-sm-12 form-select">
															<option value="">------Select Fund------</option>
															@foreach($funds as $fund)
															<option value="{{$fund->PRO_REG_ID}}">{{$fund->PORTFOLIO_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>
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
														<p id="t_p" class="text-center title_p"></p>
														<p class="text-center head_p">CAPM (Capital & Asset Portfolio Management) Company Limited <br> Safura Tower (5th Floor), 20 Kemal Ataturk Avenue <br> <span>Banani C/A, Dhaka - 1213</span></p>

														<table id="apl_details">
															<tr>
																<th>Investor ID</th>
																<td id="regi_no"></td>
															</tr>
															<tr>
																<th>Investor Name</th>
																<td id="apl_name"></td>
															</tr>
															<tr>
																<th>Bank Name</th>
																<td id="bnk_name"></td>
															</tr>
															<tr>
																<th>Bank A/C</th>
																<td id="bnk_ac"></td>
															</tr>
															<tr>
																<td>Subject</td>
																<th> : <u>Dividend Notice.</u></th>
															</tr>
														</table>

														<p class="dvdnd_details">
															Dear Investor,<br>We are delighted to inform you that on <span id="aprv_dt"></span> the Trustee Committee of <span id="fund_name"></span> has approved the audited accounts of the fund for the year ended on <span id="yed_one"></span>. The Fund has reported net profit of Tk. <span id="net_prof"></span> with earnings per unit of Tk. <span id="earn"></span>. Accordingly, the trustee board approved <span id="dvd_per"></span>% dividend for the year ended <span id="yed_two"></span> and permitted disbursement of dividend of Tk. <span id="dvd_per_tk"></span> per unit of Tk. <span id="face"></span> each payable to holders of the units on <span id="yed_three"></span> as Cash or CIP or both.
														</p>

														<p class="dvdnd_details">As per our record, your Unit holding position as on <span id="yed_four"></span> and entitlement of Dividend (Cash or CIP or Both) for the year <span id="dvd_yr"></span> are as follows:</p>

														<table class="dvdnd_info">
															<tr>
																<td>1. Number of Units Hold</td>
																<td id="holding"></td>
															</tr>
															<tr>
																<td>2. Preferred Dividend Type</td>
																<td id="dvd_type"></td>
															</tr>
															<tr>
																<td>3. Fund Values</td>
																<td id="fund_value"></td>
															</tr>
															<tr>
																<td>4. Dividend Amount @ <span id="dvd_per_one"></span>% / Per Unit</td>
																<td id="dvd_amount"></td>
															</tr>
															<tr>
																<td>5. Deduction of Income Tax <span id="percen"></span></td>
																<td id="did_inct"></td>
															</tr>
															<tr>
																<td>6. Entitlement of CIP (Units)</td>
																<td id="cip_unit"></td>
															</tr>
															<tr>
																<td>7. Payment for Fractional Units (Taka)</td>
																<td id="fract_val"></td>
															</tr>
															<tr>
																<td>8. Date of Transfer of Cash / Fractional Amount of CIP Units</td>
																<td id="tcd"></td>
															</tr>
															<tr>
																<td>9. Date of Transfer of CIP Units</td>
																<td id="tcipd"></td>
															</tr>
														</table>
														
														<p class="dvdnd_details">The CIP Units against your holdings have already been credited to your respective investor ID and Cash Dividend for fractional units have been transferred to your respective bank account. If you have not received any of the dividends or have any further query then please contact with us at 01847-054877, 01847-054888.</p>
														<p class="dvdnd_details">Best Regards</p>
														<p class="br">Fund Operations<br>CAPM Company Limited</p>
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

  				var fund = $('#f_name').val();
    			var inv_id = $('#reg_no').val();
            	var year = $('#year').val();

            	var f = document.getElementById('f_name');
    			var fname = f.options[f.selectedIndex].text;

    			if(fund === ''){
    				bootbox.alert({
						    message: "<span style='color: red;'>Select Fund Name</span>",
						    size: 'small',
						    callback: function () { location.reload(true); }
						});
    			}
    			else if(inv_id === ''){
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
			            url: '/corporate-action/dividend-warrantbyid/'+fund+'/'+inv_id+'/'+year,
			            type: "GET",
			            data : {"_token":"{{ csrf_token() }}"},
			            success:function(data) {
			            	var el = document.getElementById("table_part");
			            	el.style.display = "block";
			            	document.getElementById("t_p").innerHTML = fname;
			            	
			            	if(data){
			                	$.each(data, function(key, value){

			                		document.getElementById("regi_no").innerHTML = ' : '+value.REGISTRATION_NO;
			                		document.getElementById("apl_name").innerHTML = ' : '+value.INVESTOR_NAME;
			                		document.getElementById("bnk_name").innerHTML = ' : '+value.BANK_NAME;
			                		document.getElementById("bnk_ac").innerHTML = ' : '+value.AC_NO;

			                		var monthNames = [
            							"January", "February", "March",
							            "April", "May", "June", "July",
							            "August", "September", "October",
							            "November", "December"
							        ];

							        var aprvd = new Date(value.APRV_DATE);
							        var aday = ("0" + aprvd.getDate()).slice(-2);
							        var monthIndex = aprvd.getMonth();
							        var ayear = aprvd.getFullYear();

        							var naprvd = monthNames[monthIndex]+' '+aday+', '+ayear;

			                		document.getElementById("aprv_dt").innerHTML = naprvd;
			                		document.getElementById("fund_name").innerHTML = value.PORTFOLIO_NAME;

			                		var yren = new Date(value.YED);
							        var yday = ("0" + yren.getDate()).slice(-2);
							        var ymonthIndex = yren.getMonth();
							        var yyear = yren.getFullYear();

        							var nyren = monthNames[ymonthIndex]+' '+yday+', '+yyear;

			                		document.getElementById("yed_one").innerHTML = nyren;
			                		document.getElementById("net_prof").innerHTML = value.NET_PROFIT.toFixed(2);
			                		document.getElementById("earn").innerHTML = value.EARNINGS_PER_UNIT.toFixed(2);
			                		document.getElementById("dvd_per").innerHTML = value.DIVIDEND.toFixed(2);
			                		document.getElementById("dvd_per_one").innerHTML = value.DIVIDEND.toFixed(2);
			                		document.getElementById("yed_two").innerHTML = nyren;
			                		document.getElementById("dvd_per_tk").innerHTML = value.DIVIDEND.toFixed(2);
			                		document.getElementById("face").innerHTML = value.FACE_VALUE;
			                		document.getElementById("yed_three").innerHTML = nyren;
			                		document.getElementById("yed_four").innerHTML = nyren;
			                		document.getElementById("dvd_yr").innerHTML = yyear;

			                		document.getElementById("holding").innerHTML = ' : '+value.HOLDING_UNIT.toFixed(2);
			                		document.getElementById("dvd_type").innerHTML = ' : '+value.DIV_TYPE;
			                		document.getElementById("fund_value").innerHTML = ' : '+value.FUND_VALUE.toFixed(2);
			                		document.getElementById("dvd_amount").innerHTML = ' : '+value.DIVIDEND_AMOUNT.toFixed(2);
			                		if(value.POR_CAT == 'ind'){
			                			document.getElementById("percen").innerHTML = '(@ '+value.PERCENTAGE.toFixed(2)+'% Individual Investment)';
			                		}else if(value.POR_CAT == 'inst'){
			                			document.getElementById("percen").innerHTML = '(@ '+value.PERCENTAGE.toFixed(2)+'% Institutional Investment)';
			                		}else if(value.POR_CAT == 'mf'){
			                			document.getElementById("percen").innerHTML = '(@ '+value.PERCENTAGE.toFixed(2)+'% Mutual Fund Investment)';
			                		}
			                		document.getElementById("did_inct").innerHTML = ' : '+value.DED_INC_TAX.toFixed(2);
			                		document.getElementById("cip_unit").innerHTML = ' : '+value.ENTI_CIP.toFixed(2);
			                		document.getElementById("fract_val").innerHTML = ' : '+value.PAY_FRACTIONAL.toFixed(2);

			                		var tcdate = new Date(value.TC_DATE);
							        var tcday = ("0" + tcdate.getDate()).slice(-2);
							        var tcmonthIndex = tcdate.getMonth();
							        var tcyear = tcdate.getFullYear();
        							var ntcdate = tcday+' '+monthNames[tcmonthIndex]+', '+tcyear;

			                		document.getElementById("tcd").innerHTML = ' : '+ntcdate;

			                		var cpdate = new Date(value.TCIP_DATE);
							        var cpday = ("0" + cpdate.getDate()).slice(-2);
							        var cpmonthIndex = cpdate.getMonth();
							        var cpyear = cpdate.getFullYear();
        							var ncpdate = cpday+' '+monthNames[cpmonthIndex]+', '+cpyear;

			                		document.getElementById("tcipd").innerHTML = ' : '+ncpdate;
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

    			var fund = $('#f_name').val();
    			var inv_id = $('#reg_no').val();
            	var year = $('#year').val();

    			$.ajax({
			    	url: '/corporate-action/dvd_wrn_mail/'+fund+'/'+inv_id+'/'+year,
			        type: "GET",
			        data : {"_token":"{{ csrf_token() }}"},
			        success:function(data) {

			        	if(data == 'Dividend Warrant Send Successfully Done'){
                            document.getElementById("mail_msg").innerHTML=data;
                        }
                 		else{
                            document.getElementById("mail_msg_n").innerHTML='Dividend Warrant Not Send';
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