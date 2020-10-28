<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sell Order</title>
		<style>
			body {
			font-family: Arial, Helvetica, sans-serif;
			}
			*{
				padding: 0;
				margin:0;
			}

			#printDiv{
				margin: 40px;
				padding: 1px;
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
			#t_date{
				font-size: 13px;
				font-weight: 600;
				color: #000;
				margin-bottom: 0px;
			}

			#brk_dtl{
			font-size: 13px;
			font-weight: 600;
			color: #000;
			margin-bottom: 10px;
		}

			.head_p{
				font-size: 15px;
				color: #000;
				font-weight: 600;
				margin-bottom: 20px;
				margin-left: 16%;
			}

			#safura{
				margin-left: 10%;
			}

			#dhaka{
				font-weight: 300;
				margin-left: 25%;
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
				font-size: 15px;
				color: #000;
				font-weight: 600;
				margin-bottom: 20px;
				margin-left: 37%;
			}
			.img_logo{
				padding: 5px;
				margin: 15px 0px;
			}
			.capmLogo{
				height: 60px;
				width: 170px;
				margin-top: 7px;
				margin-left: 39%;
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

			.qr_photo{
				height: 175px;
				width: 175px;
				margin-left: 39%;
			}
			#fright{
				float: right;
			}

			.sign{
				width: 130px;
				margin-left: 78%;
			}

			.sign p{
				color:#000;
			}
		</style>
	</head>
	<body>
		<div id="printDiv">
			<div class="report_border">
				<div class="report">
					<div class="img_logo">
						<img class="capmLogo" src="{{public_path('BackEnd/files/assets/images/logo.png')}}"/>
						<div class="comp">
							<p>Phone: +880-2-9820685</p>
							<p>Fax: +880-2-9820990</p>
							<p>E-mail: contact@capmbd.com</p>
							<p>Web: www.capmbd.com</p>
						</div>
					</div>
					<p class="head_p">CAPM (Capital & Asset Portfolio Management) Company Limited <br> <span id="safura">Safura Tower (5th Floor), 20 Kemal Ataturk Avenue</span> <br> <span id="dhaka">Banani C/A, Dhaka - 1213</span></p>
					<?php $nd = date("d-m-Y",strtotime($trd))?>
					<p id="t_date">Sell Date: {{$nd}}</p>
					<p id="brk_dtl">{{$brk_info->BROKER_NAME}} ({{$brk_info->BROKER_CODE}})</p>
					
					<p class="subs_p">Sell Order Details</p>
					<table id="torder_details" cellspacing="0">
						<tr>
							<th>SL</th>
							<th>Stock</th>
							<th>Quantity</th>
							<th>Price</th>    
						</tr>
						<?php
							$n = 0;
						?>
						@foreach($order_info as $torder)
						
							<?php
								$n = $n + 1;
							?>
						
						<tr>
							<td>{{$n}}</td>
							<td>{{$torder->STOCK_NAME}}</td>
							<td>{{$torder->QUANTITY}}</td>
							<td>{{$torder->PRICE}}</td>
						</tr>
						@endforeach
					</table>

					<div class="sign">
						<p>{{ Auth::user()->name }}</p>
						<hr style="border-top: 1px solid #000">
						<p>Signature</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>