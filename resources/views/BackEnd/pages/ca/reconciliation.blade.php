@extends('BackEnd.master_one')

@section('title')
	Reconciliation
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

		.recon{
			width: 100%;
		}

		.recon tr td{
			font-weight: 700;
			padding: 5px 15px;
			font-size: 15px;
			border:2px solid #3f485e;
			color: #000;
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
							<a href=" {{ url('corporate-action/recon') }} ">
								<i class="feather icon-link"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('corporate-action/recon') }} ">Reconciliation</a></li>
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
									<h5>Reconciliation</h5>
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
														<table class="recon">
															<tr>
																<td colspan="3">Reconciliation Process: <span id="recyr"></span></td>
															</tr>
															<tr>
																<td>Dividend Payable</td>
																<td>Total Holding*FV*Dividend%</td>
																<td id="dvd_v"></td>
															</tr>
															<tr>
																<td>Dividend Payable</td>
																<td>TDS+Net dividend <span id="tn"></span></td>
																<td id="tdsnet"></td>
															</tr>
															<tr>
																<td>Dividend Payable</td>
																<td>Amount Disburse from Bank+TDS+CIP (SUB UNIT*PX) <span id="dsb"></span></td>
																<td id="disb_trans"></td>
															</tr>
															<tr>
																<td>Difference</td>
																<td></td>
																<td id="dif"></td>
															</tr>
														</table>
						                        	</div>
						                        </div>
												</div>
					                            <button id="print_btn" class="btn btn-sm my_bg_one print">Print</button>
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

	$(document).ready(function(){
  			$("#sub_btn").on('click',function(){

  				var fund = $('#f_name').val();
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
    			else if(year === ''){
    				bootbox.alert({
						    message: "<span style='color: red;'>Select Year</span>",
						    size: 'small',
						    callback: function () { location.reload(true); }
						});
    			}
    			else{

    				$.ajax({
			            url: '/corporate-action/reconbyid/'+fund+'/'+year,
			            type: "GET",
			            data : {"_token":"{{ csrf_token() }}"},
			            success:function(data) {
			            	var el = document.getElementById("table_part");
			            	el.style.display = "block";
			            	
			            	
			            	if(data){
			                	$.each(data, function(key, value){

			                		document.getElementById("dvd_v").innerHTML = value.dvdnd_val.toFixed(2);
			                		var tds_net = value.tds + value.net_dv;
			                		document.getElementById("tdsnet").innerHTML = tds_net.toFixed(2);
			                		document.getElementById("tn").innerHTML = '( '+value.tds.toFixed(2)+' + '+value.net_dv.toFixed(2)+' )';
			                		document.getElementById("recyr").innerHTML = fname+' ('+year+')';
			                		var netpayf = value.payf - value.tdscip;
			                		var amdis = value.net_dv_cas + netpayf;
			                		var amtds = value.tds;
			                		var cippx = value.cipunit * value.BUY_PRICE;
			                		var totdisb = amdis + amtds + cippx;
			                		document.getElementById("disb_trans").innerHTML = totdisb.toFixed(2);
			                		document.getElementById("dsb").innerHTML = '\n'+ amdis.toFixed(2) +'+'+ amtds.toFixed(2) +'+'+ cippx.toFixed(2) + '('+value.cipunit+'*'+value.BUY_PRICE+')';
			                		var dif = tds_net - totdisb;
			                		document.getElementById("dif").innerHTML = dif.toFixed(2);
			                	});
			                }else{
			                }
			            }
			        });	
    				
    			}
	            
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