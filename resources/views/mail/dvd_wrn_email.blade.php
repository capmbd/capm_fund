<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mail</title>
	<style>
		.one{
			font-weight: 700;
		}
		.one p{
			font-weight: 300;
		}
		.two span{
			font-weight: 700;
		}
		.yed{
			background: yellow;
		}
	</style>
</head>
<body>
	<div class="main">
		<p>Dear Investor</p>
		<p>Assalamu Alaikum</p>
		<p>This is a pleasure to inform you that we have already transferred the amount of Cash Dividend/Payment for Fractional CIP (Cumulative Investment Plan) Units to your respective bank account on <span class="yed">{{date("d F, Y", strtotime($tcdate))}}</span>. In addition, the entitled CIP Units have been subscribed to your respective Investor ID as per your chosen dividend option.</p>
		<p>Therefore, you are requested to check your respective Bank Account and Investor ID for dividend credit and if you found any discrepancy then please contact with us immediately. For detail breakup please find the attached dividend notice.</p>

		<p class="one">For query please call:  +8801847054877, +8801847054888<br>For any query/support please send e-mail to: <a href ="mailto: amcuf@capmbd.com">amcuf@capmbd.com</a></p>

		<p class="two">With Regards<br><span>Fund Operations</span><br><span>CAPM (Capital & Asset Portfolio Management) Company Ltd</span></p>
	</div>
</body>
</html>