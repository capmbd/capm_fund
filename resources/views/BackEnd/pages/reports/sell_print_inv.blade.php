<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PDF Report</title>
		<script type="text/javascript" src=" {{ asset('BackEnd/files/bower_components/jquery/js/jquery.min.js') }} "></script>
		<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/pace.min.js') }} "></script>
		<style>
		<style>
			body {
			font-family: Arial, Helvetica, sans-serif;
			}
			*{
				padding: 0;
				margin:0;
			}
			.main{
				border: 1px solid #FF0000;
				margin: 40px;
				padding: 1px;
			}
			.main_one{
				border: 1px solid #FF0000;
				padding: 20px;
			}
			.head_p{
				background: #265C8B;
			color: #fff;
			font-weight: 700;
			font-size: 14px;
			padding: 6px;
			width: 200px;
			border-radius: 10px;
			margin-left: 36%;
			}
			.head_logo{
				width: 33%;
				margin-bottom:10px;
				margin-left: 238px;
			}
			.adr_p{
				font-size: 13px;
				font-weight: 700;
				margin-top: 10px;
				margin-bottom: 30px;
				margin-left: 22%;
			}
			.adr_p span{
				font-weight: 300;
			}
			.common_p{
				font-size: 13px;
				font-weight: 700;
				margin-bottom: 5px;
			}
			.common_p span{
				font-weight: 300;
			}
			.investor{
				margin-top: 25px;
			}
			.investor tr td{
				padding: 5px;
				font-size: 13px;
			}
			.investor tr td{
				border: 1px solid #07223a;
			}
			.investor tr td span{
				font-weight: 700;
			}
			.buy_info{
				margin-top: 25px;
			}
			.buy_info tr td{
				padding: 10px;
				font-size: 13px;
			}
			.buy_info tr td{
				border: 1px solid #07223a;
			}
			.buy_info tr td span{
				font-weight: 700;
			}
			.desc_p{
				font-size: 12px;
				margin-top: 30px;
				text-align: justify;
			}
			.desc_p span{
				font-weight: 700;
			}
			.qr_img{
				margin-top: 10px;
				width: 180px;
				margin-left: 40%;
				margin-bottom: 40px;
			}
			.border_p{
				border-top:1px dotted #000;
				width: 410px;
			}
			.bottom_p{
				font-size: 12px;
			}
			.print_btn{
				margin-bottom: 30px;
			}
			.print_btn a{
				text-decoration: none;
			    margin-left: 40px;
			    font-size: 16px;
			    background: #265c8b;
			    color: #fff;
			    font-weight: 700;
			    padding: 5px 20px;
			    border-radius: 3px;
			}
			.print_btn a:hover{
				opacity: 0.9;
			}
		</style>
	</head>
	<body>
		<div class="print_btn">
			<div id="printDiv">
				<div class="main">
					<div class="main_one">
						<img class="head_logo" src="{{public_path('BackEnd/files/assets/images/logo.png')}}" alt="">
						<p class="head_p">Surrender Acknowledgement<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Of<br>CAPM Managed Unit Funds</p>
						<p class="adr_p">CAPM (Capital & Asset Portfolio Management) Company Limited<span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Safura Tower (5th Floor),20 Kemal Ataturk Avenue<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banani C/A, Dhaka - 1213</span></p>
						<p class="common_p">Receipt No: <span>{{$qr_code_name}}</span></p>
						<p class="common_p">Trade Date: <span>{{date("F d, Y")}}</span></p>
						<table class="investor" cellspacing="0">
							<tr>
								<td><span>Fund</span></td>
								<td>{{$fund_name->PORTFOLIO_NAME}}</td>
							</tr>
							<tr>
								<td><span>Investor ID</span></td>
								<td>{{$data['REGISTRATION_NO']}}</td>
							</tr>
							<tr>
								<td><span>Investor Name</span></td>
								<td>{{$inv_info['apl_name']}}</td>
							</tr>
							<tr>
								<td><span>Bank Name</span></td>
								<td>{{$inv_info['appl_bank']}}</td>
							</tr>
							<tr>
								<td><span>Client's Bank A/C No</span></td>
								<td>{{$inv_info['appl_ac']}}</td>
							</tr>
						</table>
						<table class="buy_info" cellspacing="0">
							<tr style="background: #e4e4e4">
								<td><span>Requested Sell (No. of Units)</span></td>
								<td><span>Rate Per Unit (Tk)</span></td>
								<td><span>Total Amount (Tk)</span></td>
								<td><span>Existing Unit</span></td>
								<td><span>Pending Unit</span></td>
								<td><span>Total Unit</span></td>
							</tr>
							<tr>
								<td>{{$data['UNIT']}}</td>
								<td>{{$data['RATE']}}</td>
								<td>{{$data['TOTAL_AMOUNT']}}</td>
								<td>{{$existing_unit}}</td>
								<td>{{$existing->SELL_PADDING_UNIT}}</td>
								<td>{{$totalunit}}</td>
							</tr>
						</table>
						<p class="desc_p"><span>Important Note:</span> This Confirmation is a confidential and a legal document of purchasing <span>{{$fund_name->PORTFOLIO_NAME}}</span>. The CAPM Managed Unit Fund(Open-End) is a non-exchange trade fund registered with Bangladesh Securities and Exchange Commission (BSEC), under Bangladesh Securities and Exchange Commission (Mutual Fund) Rules, 2001. This Subscription Confirmation singly would provide legal right of unit holding to the Investors. Unauthorised use, discloser or copying of this document is strictly prohibited and may be unlawful.</p>
						<img class="qr_img" src="{{asset('qr_code/sell/'.$qr_code_name.'.png')}}" alt="QR Code">
					</div>
				</div>
			</div>
			<a id="print_report_btn" href="#">Print</a>
			<a href="{{url('/inv')}}">OK</a>
		</div>

		<script type="text/javascript">
			function printReport() {
		        var printContents = document.getElementById('printDiv').innerHTML;
		        var originalContents = document.body.innerHTML;
		        document.body.innerHTML = printContents;
		        window.print();
		        document.body.innerHTML = originalContents;
		    }

			$('#print_report_btn').on('click',function(){
				printReport();
			});

		</script>
	</body>
</html>