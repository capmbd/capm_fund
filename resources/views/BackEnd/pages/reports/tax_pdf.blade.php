<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TAX Report</title>
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
			#syear{
				font-size: 15px;
				color: #000;
				margin-bottom: 10px;
			}
			#date_time{
				border:none;
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
			.concern{
				font-size: 13px;
				color: #000;
				text-align: justify;
				margin-left: 0.5%;
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
				margin-top: 7px;
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
			#fright{
				float: right;
			}
		</style>
	</head>
	<body>
		<div id="printDiv">
			<div class="report_border">
				<div class="report">
					<div class="img_logo">
						<img class="capmLogo" src="{{public_path('BackEnd/files/assets/images/logo.png')}}"/>
						<img class="ufLogo" src="{{public_path('BackEnd/files/assets/images/unitfund.png')}}"/>
					</div>
					<p class="head_p">CAPM (Capital & Asset Portfolio Management) Company Limited <br> <span id="safura">Safura Tower (5th Floor), 20 Kemal Ataturk Avenue</span> <br> <span id="dhaka">Banani C/A, Dhaka - 1213</span></p>
					<p class="concern">July 1, {{$investor_info['year']}}</p>
					<p class="subs_p">To Whom It May Concern</p>
					<p class="concern">This is to certify that Mr./ Mrs./ Ms. <span>{{$investor_info['name']}}</span> is a registered investor of <span>CAPM Unit Fund</span>. His/Her details information are given below:</p>
					<table id="apl_details">
						<tr>
							<th>Investment Period:</th>
							<td>01-Jul-{{$investor_info['pyear']}} to 30-Jun-{{$investor_info['year']}}</td>
						</tr>
						<tr>
							<th>Investor ID:</th>
							<td>{{$investor_info['reg']}}</td>
						</tr>
						<tr>
							<th>Investor Name:</th>
							<td>{{$investor_info['name']}}</td>
						</tr>
						<tr>
							<th>Father's / Husband Name:</th>
							<td>{{$investor_info['father']}}</td>
						</tr>
						<tr>
							<th>Mother's Name:</th>
							<td>{{$investor_info['mother']}}</td>
						</tr>
					</table>
					<p class="subs_p">Investment Details</p>
					<table id="inv_details" cellspacing="0">
						<tr>
							<th>Balance(Units) as on 1st Jul {{$investor_info['pyear']}}</th>
							<td><span id="fright">{{number_format($investor_info['prev'],2)}}</span></td>
						</tr>
						<tr>
							<th>Unit Subscribed During this Period</th>
							<td><span id="fright">{{number_format($investor_info['b_curr'],2)}}</span></td>
						</tr>
						<tr>
							<th>Unit Surrendered During this Period</th>
							<td><span id="fright">{{number_format($investor_info['s_curr'],2)}}</span></td>
						</tr>
						<tr>
							<th>Balance(Units) as on 30th June {{$investor_info['year']}}</th>
							<?php
								$reb_temp = $investor_info['prev'] + $investor_info['b_curr'];
			                	$currblnc = $reb_temp - $investor_info['s_curr'];
							?>
							<td><span id="fright">{{number_format($currblnc,2)}}</span></td>
						</tr>
						<tr>
							<th>Tax Rebateable Unit For This Year ({{$investor_info['pyear']}} - {{$investor_info['year']}})</th>
							<td><span id="fright">{{number_format($investor_info['blnc'],2)}}</span></td>
						</tr>
						<tr>
							<th>Tax Rebateable Investment For This Year ({{$investor_info['pyear']}} - {{$investor_info['year']}})</th>
							<td>BDT <span id="fright">{{number_format($investor_info['rebat'],2)}}</span></td>
						</tr>
					</table>
					<div class="qr_img">
						<img class="qr_photo" src="{{public_path($qr_name)}}"/>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>