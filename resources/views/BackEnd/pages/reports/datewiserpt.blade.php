@extends('BackEnd.master_one')

@section('title')
	Date Wise Holding Report
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

		#holding_table{
			width: 100%;
		}

		#holding_table tr th{
			border: 1px solid #02646F;
			background: #ddd;
			padding: 15px;
		}

		#holding_table tr td{
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

		#total_holding{
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
							<a href=" {{ url('/subscription-redumption/datewiseholding') }} ">
								<i class="feather icon-pie-chart"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/subscription-redumption/datewiseholding') }} ">Date Wise Holding Report</a></li>
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
														<label class="col-form-label">Date</label>
													</div>
													<div class="col-sm-8">
														<input type="date" name="hdate" id="hdate" class="form-control autonumber">
													</div>
												</div>
													<br>
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
														<p class="text-center subs_p">Date Wise Holding Report</p>
														<p id="fndnm"></p>
														<p id="frmto"></p>
														<p id="total_holding"></p>
							                            <table id="holding_table">
							                                <thead>
								                                <tr>
								                                    <th>Registration No</th>
								                                    <th>Name</th>
								                                    <th>Holding Unit</th>
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

    			var fid = $('#fund').val();
    			var hdate = $('#hdate').val();
    			var hd = new Date(hdate);
    			var nhd =  ("0" + hd.getDate()).slice(-2)+'-'+("0" + (hd.getMonth() + 1)).slice(-2)+'-'+hd.getFullYear();
    			var e = document.getElementById('fund');
    			var fund_name = e.options[e.selectedIndex].text;
    			
    			if(fid === ''){
    				bootbox.alert({
						    message: "<span style='color: red;'>Select Fund</span>",
						    size: 'small',
						    callback: function () { location.reload(true); }
						});
    			}
    			else if(hdate === ''){
    				bootbox.alert({
						    message: "<span style='color: red;'>Select Date</span>",
						    size: 'small',
						    callback: function () { location.reload(true); }
						});
    			}
    			else{

    				$.ajax({
			            url: '/subscription-redumption/datewise/'+fid+'/'+hdate,
			            type: "GET",
			            data : {"_token":"{{ csrf_token() }}"},
			            success:function(data) {
			            	var el = document.getElementById("table_part");
			            	el.style.display = "block";
			            	document.getElementById("frmto").innerHTML = 'Date: '+nhd;
			            	document.getElementById("fndnm").innerHTML = fund_name;
			            	$('#holding_table').find('tbody').empty();
			            	var sum = 0;
			            	for (var i = 0; i < data.length; i++) {

			            		var sum = sum + data[i].holding;

				                $("#holding_table").find('tbody').append(
				                	'<tr><td>' + data[i].id + '</td>' +
				                	'<td>' + data[i].name + '</td>' +
	                                '<td>' + data[i].holding.toLocaleString() + '</td></tr>'
	                            );
			            	}

			            	document.getElementById("total_holding").innerHTML = 'Total Holding: '+sum.toLocaleString();
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