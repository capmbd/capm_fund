<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDF Report</title>

	<style>

		body {
    		font-family: Arial, Helvetica, sans-serif;
		}

		*{
			padding: 0;
			margin:0;
		}
		.main{
			border: 1px solid #265C8B;
			margin: 40px;
			padding: 1px;
		}

		.main_one{
			border: 1px solid #265C8B;
			padding: 20px;
		}


		.head_logo{
			width: 30%;
			margin-bottom:10px;
			margin-left: 238px;
		}

		.head_p{
			background: #265C8B;
		    color: #fff;
		    font-weight: 700;
		    font-size: 14px;
		    padding: 6px;
		    width: 113px;
		    border-radius: 10px;
		    margin-left: 42%;
		}

		.pdf_img{
			margin-top: 10px;
			width: 78%;
			margin-left: 12%;
		}

		.adr_p{
			font-size: 13px;
			font-weight: 700;
			margin-bottom: 60px;
			margin-left: 13%;
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
			font-size: 13px;
			padding: 5px 0px;
			border: none;
		}

		.investor tr td span{
			font-weight: 700;
		}

		.subject_p{
			font-weight: 700;
			margin-top: 20px;
		}

		.dr_p{
			font-size: 14px;
			font-weight: 700;
			margin-top: 25px;
		}

		.desc_p{
			font-size: 14px;
			margin-top: 15px;
			text-align: justify;
		}

		.desc_p span{
			font-weight: 700;
		}

		.note_p{
			font-size: 12px;
			margin-top: 30px;
			margin-bottom: 10px;
			font-weight: 700;
		}

		.not_desc{
			font-size: 11px;
			text-align: justify;
			margin-bottom: 30px;
			margin-top: 10px;
		}

		.qr_img{
			margin-top: 40px;
			width: 180px;
			margin-left: 40%;
			margin-bottom: 40px;
		}

	</style>
</head>
<body>
	<div class="main">
		<div class="main_one">
			<img class="head_logo" src="{{public_path('BackEnd/files/assets/images/logo.png')}}" alt="">
			<p class="head_p">{{$fund_name->PORTFOLIO_NAME}}</p>

			<img class="pdf_img" src="{{public_path('BackEnd/files/assets/images/pdf.JPG')}}" alt="">
			<p class="adr_p">Asset Manager: CAPM (Capital & Asset Portfolio Management) Company Limited<span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Safura Tower (5th Floor),20 Kemal Ataturk Avenue<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banani C/A, Dhaka - 1213</span></p>

			<p class="common_p">Holding Certificate No: <span>{{$qr_code_name}}</span></p>
			<p class="common_p">Trade Confirmation Date: <span>{{date("F d, Y, h:i a")}}</span></p>

			<table class="investor" cellspacing="0">
				<tr>
					<td><span>Investor ID: </span></td>
					<td>{{$REGISTRATION_NO}}</td>
				</tr>
				<tr>
					<td><span>Investor Name: </span></td>
					<td>{{$inv_info->NAME}}</td>
				</tr>
				<tr>
					<td><span>Bank Name: </span></td>
					<td>{{$inv_info->BANK_NAME}}</td>
				</tr>
				<tr>
					<td><span>Bank A/C: </span></td>
					<td>{{$inv_info->ACCOUNT_NO}}</td>
				</tr>
			</table>
			
			<p class="subject_p">Subject: Report of Total Unit Holdings.</p>
			<p class="dr_p">Dear Investor</p>

			<p class="desc_p">Your surrender request dated <span>{{date('F d, Y', strtotime($REQ_DATE))}}</span> of <span>{{$SELL_PAD_UNIT}}</span>  units of {{$fund_name->PORTFOLIO_NAME}} was successful. It is a great pleasure to confirm that now you are a registered holder of <span>{{$existing->TOTAL_UNITS}}</span> units of par value of Taka 100 each (issued under the authority provided in the Trust Deed of <span>{{$fund_name->PORTFOLIO_NAME}}</span>) as on <u>{{date("F d, Y, h:i a")}}</u></p>

			<p class="note_p"><u>Note:</u></p>
			<p class="not_desc">This Confirmation is a confidential and a legal document of subscribing {{$fund_name->PORTFOLIO_NAME}}. This Confirmation singly would provide legal right to unit holding for the Investors. Unauthorized use, disclosure or copying of this document is unlawful and strictly prohibited, and shall be treated with appropriate measures of law. This Confirmation will be void as and when any new Confirmation is issued to the same investor.</p>

			<img class="qr_img" src="{{public_path('qr_code/sell_conf/'.$qr_code_name.'.png')}}" alt="QR Code">
		</div>
	</div>
</body>
</html>