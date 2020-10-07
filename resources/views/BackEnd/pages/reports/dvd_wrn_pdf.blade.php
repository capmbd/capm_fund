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
				margin-bottom: 20px;
			}
			#inv_details tr td{
				border: none;
				padding-right: 20px;
				font-size: 14px;
			}
			#apl_details{
				margin-bottom: 20px;
			}
			#apl_details tr th{
				border: none;
				padding: 2px;
				font-size: 14px;
				text-align: left;
			}
			#apl_details tr td{
				border: none;
				padding: 2px;
				font-size: 14px;
			}
			.head_p{
				font-size: 15px;
				color: #000;
				font-weight: 600;
				margin-bottom: 20px;
				margin-left: 16%;
			}

			.title_p{
				font-size: 18px;
	    		color: #000;
	    		font-weight: 600;
	    		margin-left: 38%;
	    		margin-bottom: 10px;
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
			.fleft{
				float: left;
			}
			.fright{
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
					<p class="title_p">{{$dividend_info['fname']}}</p>
					<p class="head_p">CAPM (Capital & Asset Portfolio Management) Company Limited <br> <span id="safura">Safura Tower (5th Floor), 20 Kemal Ataturk Avenue</span> <br> <span id="dhaka">Banani C/A, Dhaka - 1213</span></p>
					
					<table id="apl_details">
						<tr>
							<th>Investor ID</th>
							<td> : {{$dividend_info['reg']}}</td>
						</tr>
						<tr>
							<th>Investor Name</th>
							<td> : {{$dividend_info['name']}}</td>
						</tr>
						<tr>
							<th>Bank Name</th>
							<td> : {{$dividend_info['bank']}}</td>
						</tr>
						<tr>
							<th>Bank A/C</th>
							<td> : {{$dividend_info['ac_no']}}</td>
						</tr>
						<tr>
							<td>Subject</td>
							<th> : <u>Dividend Notice.</u></th>
						</tr>
					</table>

					<?php
						$aprvd = $dividend_info['aprvday'];  
    					$naprvd = date("F d, Y", strtotime($aprvd));

    					$yed = $dividend_info['yend'];
    					$nyed = date("F d, Y", strtotime($yed));
    					$ny = date("Y", strtotime($yed));
					?>

					<p class="dvdnd_details">
						Dear Investor,<br>We are delighted to inform you that on {{$naprvd}} the Trustee Committee of {{$dividend_info['fname']}} has approved the audited accounts of the fund for the year ended on {{$nyed}}. The Fund has reported net profit of Tk. {{number_format($dividend_info['netprof'],2)}} with earnings per unit of Tk. {{number_format($dividend_info['earn'],2)}}. Accordingly, the trustee board approved {{number_format($dividend_info['dvd_per'],2)}}% dividend for the year ended {{$nyed}} and permitted disbursement of dividend of Tk. {{number_format($dividend_info['dvd_per'],2)}} per unit of Tk. {{$dividend_info['face']}} each payable to holders of the units on {{$nyed}} as Cash or CIP or both.
					</p>
					<br>
					<p class="dvdnd_details">As per our record, your Unit holding position as on {{$nyed}} and entitlement of Dividend (Cash or CIP or Both) for the year {{$ny}} are as follows:</p>
					<br>
					<table id="inv_details" cellspacing="0">
						<tr>
							<td>1. Number of Units Hold</td>
							<td> : {{number_format($dividend_info['holding'],2)}} </td>
						</tr>
						<tr>
							<td>2. Preferred Dividend Type</td>
							<td> : {{$dividend_info['dvd_type']}} </td>
						</tr>
						<tr>
							<td>3. Fund Values</td>
							<td> : {{number_format($dividend_info['fund_value'],2)}} </td>
						</tr>
						<tr>
							<td>4. Dividend Amount @ {{$dividend_info['dvd_per']}}% / Per Unit</td>
							<td> : {{number_format($dividend_info['dvd_amount'],2)}} </td>
						</tr>
						<tr>

							<?php
								if($dividend_info['porcat'] == 'ind'){?>
									<td>5. Deduction of Income Tax (@ {{number_format($dividend_info['percen_tage'],2)}}% Individual Investment)</td>
			                	<?php
			                	}else if($dividend_info['porcat'] == 'inst'){?>
			                		<td>5. Deduction of Income Tax (@ {{number_format($dividend_info['percen_tage'],2)}}% Institutional Investment)</td>
			                	<?php
			                	}else if($dividend_info['porcat'] == 'mf'){?>
			                		<td>5. Deduction of Income Tax (@ {{number_format($dividend_info['percen_tage'],2)}}% Mutual Fund Investment)</td>
			                	<?php
			                	}
							?>

							<td> : {{number_format($dividend_info['did_inct'],2)}} </td>
						</tr>
						<tr>
							<td>6. Entitlement of CIP (Units)</td>
							<td> : {{number_format($dividend_info['cip_unit'],2)}} </td>
						</tr>
						<tr>
							<td>7. Payment for Fractional Units (Taka)</td>
							<td> : {{number_format($dividend_info['fract_val'],2)}} </td>
						</tr>
						<tr>
							<td>8. Date of Transfer of Cash / Fractional Amount of CIP Units</td>
							<td> : {{date("d F, Y", strtotime($dividend_info['tcd']))}} </td>
						</tr>
						<tr>
							<td>9. Date of Transfer of CIP Units</td>
							<td> : {{date("d F, Y", strtotime($dividend_info['tcipd']))}} </td>
						</tr>
					</table>
					<br>
					<p class="dvdnd_details">The CIP Units against your holdings have already been credited to your respective investor ID and Cash Dividend for fractional units have been transferred to your respective bank account. If you have not received any of the dividends or have any further query then please contact with us at 01847-054877, 01847-054888.</p>
					<br>
					<p class="dvdnd_details">Best Regards</p>
					<br>
					<p class="br">Fund Operations<br>CAPM Company Limited</p>
				</div>
			</div>
		</div>
	</body>
</html>