@extends('BackEnd.master_one')

@section('title')
	Sell Confirmation Reports
@endsection

@section('class4')
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

		#torder_details{
			width: 100%;
			margin-bottom: 20px;
		}

		#torder_details tr th{
			border: 1px solid #02646F;
			background: #ddd;
			padding: 5px;
			font-size: 15px;
		}

		#torder_details tr td{
			border: 1px solid #02646F;
			padding: 3px;
			font-size: 15px;
		}


		#table_part{
			display:none;
		}

		#t_date{
			font-size: 14px;
			font-weight: 600;
			color: #000;
			margin-bottom: 0px;
		}

		#brk_dtl{
			font-size: 14px;
			font-weight: 600;
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

		.img_logo{
			padding: 5px;
    		margin: 15px 0px;
		}

		.capmLogo{
			height: 60px;
    		width: 170px;
    		margin-left:40%;
		}

		.qr_photo{
			height: 175px;
    		width: 175px;
    		margin-left: 39%;
		}

		.fright{
			float: right;
		}

		.comp{
			float: right;
		}

		.comp p{
			color: #000;
		    font-size: 12px;
		    margin-bottom: 2px;
		    font-weight: 700;
		}

		.sign{
			width: 100px;
			margin-left: 85%;
		}

		.sign p{
			color:#000;
			line-height: 0px !important;
    		font-weight: 600;
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
							<a href=" {{ url('/trading/torder/conf') }} ">
								<i class="feather icon-pie-chart"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/trading/torder/conf') }} ">Sell Confirmation Reports</a></li>
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
									<h5>Sell Confirmation Reports</h5>
									<p class="text-success insert_message" id="mail_msg"></p>
									<p class="text-danger insert_message" id="mail_msg_n"></p>
								</div>
								<div class="card-block">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<div class="row form-group">
													<div class="col-sm-3">
														<label class="col-form-label">Date</label>
													</div>
													<div class="col-sm-9">
														<input type="date" id="trd_date" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-3">
														<label class="col-form-label">Select Broker</label>
													</div>
													<div class="col-sm-9">
														<select name="broker_id" id="broker_id" class="col-sm-12 form-select">
															<option value="">---Select Broker---</option>
															@foreach($brokers as $broker)
																<option value="{{$broker->BROKER_ID}}">{{$broker->BROKER_NAME}}</option>
															@endforeach
														</select>
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
															<div class="comp">
																<p>Phone: +880-2-9820685</p>
																<p>Fax: +880-2-9820990</p>
																<p>E-mail: contact@capmbd.com</p>
																<p>Web: www.capmbd.com</p>
															</div>
														
														</div>
														<p class="text-center head_p">CAPM (Capital & Asset Portfolio Management) Company Limited <br> Safura Tower (5th Floor), 20 Kemal Ataturk Avenue <br> <span>Banani C/A, Dhaka - 1213</span></p>

														<p id="t_date"></p>
														<p id="brk_dtl"></p>
														<p class="text-center subs_p">Sell Order Details</p>

														<table id="torder_details">
															<thead>
							                                <tr>
							                                    <th>SL</th>
							                                    <th>Stock</th>
							                                    <th>Quantity</th>
							                                    <th>Price</th>    
							                                </tr>
							                                </thead>
							                                <tbody></tbody>
														</table>
														<div class="sign">
															<p>{{ Auth::user()->name }}</p>
															<hr style="border: 1px solid #000">
															<p>Signature</p>
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

	$(document).ready(function(){
  		$("#sub_btn").on('click',function(){

    		var trdt = $('#trd_date').val();
            var brk_id = $('#broker_id').val();

            var td = new Date(trdt);
    		var ntd =  ("0" + td.getDate()).slice(-2)+'-'+("0" + (td.getMonth() + 1)).slice(-2)+'-'+td.getFullYear();

    		if(trdt === ''){
    			bootbox.alert({
					message: "<span style='color: red;'>Enter Trade Date</span>",
					size: 'small',
					callback: function () { location.reload(true); }
				});
    		}
    		else if(brk_id === ''){
    			bootbox.alert({
					message: "<span style='color: red;'>Select Broker</span>",
					size: 'small',
					callback: function () { location.reload(true); }
				});
    		}
    		else{

    			$.ajax({
			        url: '/trading/sorderconfbybrokId/'+brk_id+'/'+trdt,
			        type: "GET",
			        data : {"_token":"{{ csrf_token() }}"},
			        success:function(data) {
			        	var el = document.getElementById("table_part");
			            el.style.display = "block";
			            document.getElementById("t_date").innerHTML = 'Sell Date: ' + ntd;
			            	
			            if(data.length >= 1){
			            	document.getElementById("mail_btn").disabled = false;
			                $.each(data, function(key, value){
			                	document.getElementById("brk_dtl").innerHTML = value.BROKER_NAME+' ('+ value.BROKER_CODE +')';
			                	$('#torder_details').find('tbody').empty();
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

				                	$("#torder_details").find('tbody').append(
				                		'<tr><td>' + n + '</td>' +
	                                	'<td>' + data[i].STOCK_NAME + '</td>' +
	                                	'<td>' + data[i].QUANTITY + '</td>' +
	                                	'<td>' + data[i].PRICE + '</td></tr>'
	                                );
				                }
			            	});
			        	}else{
			        		$('#torder_details').find('tbody').empty();
			            	document.getElementById("mail_btn").disabled = true;
			        	}
			        }
			    });	
    				
    		}
	            
  		});
	});


	$(document).ready(function(){
  		$("#mail_btn").on('click',function(){

    		var trdt = $('#trd_date').val();
            var brk_id = $('#broker_id').val();

    		$.ajax({
			    url: '/trading/torder_mail/'+brk_id+'/'+trdt,
			    type: "GET",
			    data : {"_token":"{{ csrf_token() }}"},
			    success:function(data) {

			       	if(data == 'Trade Order Send Successfully Done'){
                        document.getElementById("mail_msg").innerHTML=data;
                    }
                 	else{
                        document.getElementById("mail_msg_n").innerHTML='Trade Order Not Send';
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