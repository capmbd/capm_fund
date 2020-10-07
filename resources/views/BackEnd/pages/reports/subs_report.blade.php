@extends('BackEnd.master_one')

@section('title')
	Subscription Report
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

		#subs_table{
			width: 100%;
		}

		#subs_table tr th{
			border: 1px solid #02646F;
			background: #ddd;
			padding: 15px;
		}

		#subs_table tr td{
			border: 1px solid #02646F;
			padding: 5px;
		}

		#table_part{
			display:none;
		}

		#frmto{
			font-size: 15px;
			color: #000;
			font-weight: 600;
			margin-bottom: 10px;
		}

		#fndnm{
			font-size: 15px;
			color: #2b8a78;
			font-weight: 600;
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

		.report{
			border: 2px solid #02646F;
			padding: 5px;
		}

		.print{
			color: #fff;
			margin-top: 5px;
		}

		.subs_p{
			font-size: 16px;
    		color: #2b8a78;
    		font-weight: 600;
    		margin-bottom: 20px;
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
							<a href=" {{ url('/subscription-redumption/subscription_report') }} ">
								<i class="feather icon-pie-chart"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/subscription-redumption/subscription_report') }} ">Subscription Report</a></li>
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
									<h5>Subscription Report</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Registration No</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="reg_no" id="reg_no" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Portfolio</label>
													</div>
													<div class="col-sm-8">
														<select name="fund" id="fund" class="col-sm-12 form-select">
															<option value="">------Select Portfolio------</option>
															@foreach($portfolios as $portfolio)
																<option value="{{$portfolio->PRO_REG_ID}}">{{$portfolio->PORTFOLIO_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div>
											
											<div class="col-md-6 col-sm-6">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">From Date</label>
													</div>
													<div class="col-sm-8">
														<input type="date" name="fdate" id="fdate" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">To Date</label>
													</div>
													<div class="col-sm-8">
														<input type="date" name="tdate" id="tdate" class="form-control autonumber">
													</div>
												</div>
													
												<div class="col-sm-8">
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
													<div class="report">
														<p class="text-center head_p">CAPM (Capital & Asset Portfolio Management) Company Limited <br> Safura Tower (5th Floor),20 Kemal Ataturk Avenue <br> <span>Banani C/A, Dhaka - 1213</span></p>
														<p class="text-center subs_p">Subscription Report</p>
														<p id="fndnm"></p>
														<p id="frmto"></p>
							                            <table id="subs_table">
							                                <thead>
							                                <tr>
							                                    <th>SL</th>
							                                    <th>Registration No</th>
							                                    <th>Name</th>
							                                    <th>Unit</th>
							                                    <th>Rate</th>
							                                    <th>Total Amount</th>
							                                    <th>Date</th>
							                                </tr>
							                                </thead>
							                                <tbody></tbody>
							                            </table>
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

    			var rid = $('#reg_no').val();
    			var fid = $('#fund').val();
    			var fdate = $('#fdate').val();
    			var tdate = $('#tdate').val();
    			var fd = new Date(fdate);
    			var nfd =  ("0" + fd.getDate()).slice(-2)+'-'+("0" + (fd.getMonth() + 1)).slice(-2)+'-'+fd.getFullYear();
    			var td = new Date(tdate);
    			var ntd =  ("0" + td.getDate()).slice(-2)+'-'+("0" + (td.getMonth() + 1)).slice(-2)+'-'+td.getFullYear();
    			var e = document.getElementById('fund');
    			var fund_name = e.options[e.selectedIndex].text;

    			if(rid == ''){
    				rid = 'no';
    			}

    			if(fid === ''){
    				bootbox.alert({
						    message: "<span style='color: red;'>Select Fund</span>",
						    size: 'small',
						    callback: function () { location.reload(true); }
						});
    			}
    			else if(fdate === ''){
    				bootbox.alert({
						    message: "<span style='color: red;'>Select From Date</span>",
						    size: 'small',
						    callback: function () { location.reload(true); }
						});
    			}
    			else if(tdate === ''){
    				bootbox.alert({
						    message: "<span style='color: red;'>Select To Date</span>",
						    size: 'small',
						    callback: function () { location.reload(true); }
						});
    			}else{

    				$.ajax({
			            url: '/subscription-redumption/subsreport/'+rid+'/'+fid+'/'+fdate+'/'+tdate,
			            type: "GET",
			            data : {"_token":"{{ csrf_token() }}"},
			            success:function(data) {
			            	var el = document.getElementById("table_part");
			            	el.style.display = "block";
			            	document.getElementById("frmto").innerHTML = 'From: '+nfd+' To: '+ntd;
			            	document.getElementById("fndnm").innerHTML = fund_name;
			            	$('#subs_table').find('tbody').empty();
			            	var n = 0;
			                for (var i = 0; i < data.length; i++) {

			                	n = n + 1;
			                	var edate = data[i].created_at.split(' ')[0];
			                	var mydate = new Date(edate);
							    var day = ("0" + mydate.getDate()).slice(-2);
							    var nmonth = mydate.getMonth() + 1;
						        var month = ("0" + nmonth).slice(-2);
						        var year = mydate.getFullYear();
			                	var newdate = day + '-' + month + '-' + year;

			                	$("#subs_table").find('tbody').append(
			                		'<tr><td>' + n + '</td>' +
                                	'<td>' + data[i].REGISTRATION_NO + '</td>' +
                                	'<td>' + data[i].NAME + '</td>' +
                                	'<td>' + data[i].UNIT + '</td>' +
                                	'<td>' + data[i].RATE + '</td>' +
                                	'<td>' + data[i].TOTAL_AMOUNT + '</td>' +
                                	'<td>' + newdate + '</td></tr>'
                                );
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