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
		    width: 185px;
		    border-radius: 10px;
		    margin-left: 37%;
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
	</style>
</head>
<body>
	<div class="main">
		<div class="main_one">
			<p class="head_p">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Holding Report<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Of<br>CAPM Managed Unit Funds</p>

			<p class="adr_p">CAPM (Capital & Asset Portfolio Management) Company Limited<span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Safura Tower (5th Floor),20 Kemal Ataturk Avenue<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banani C/A, Dhaka - 1213</span></p>

			<table class="investor" cellspacing="0">
				<tr>
					<td><span>Fund</span></td>
					<td>{{$data->PORTFOLIO_NAME}}</td>
				</tr>
				<tr>
					<td><span>Investor ID</span></td>
					<td>{{$r_id}}</td>
				</tr>
				<tr>
					<td><span>Investor Name</span></td>
					<td>{{$c_name}}</td>
				</tr>
			</table>

			<table class="buy_info" cellspacing="0" width="100%">
				<tr style="background: #e4e4e4">
					<td><span>Pending Subscription (Units)</span></td>
					<td><span>Pending Surrender (Units)</span></td>
					<td><span>Holding (Units)</span></td>
				</tr>
				<tr>
					<td>{{$data->BUY_PADDING_UNIT}}</td>
					<td>{{$data->SELL_PADDING_UNIT}}</td>
					<td>{{$data->TOTAL_UNITS}}</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>