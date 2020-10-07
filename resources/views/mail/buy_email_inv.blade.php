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
	</style>
</head>
<body>
	<div class="main">
		<p>Dear Investor</p>
		<p>Many thanks for your interest to invest in {{$fund}}. {{$fund}} is the smarter and the most convenient way to ‘Save & Invest’ and as well as to reduce your tax burden.<br>Please refer to the attached invoice. This is an auto-generated email.</p>

		<p class="one">For query please call:  +8801847054877, +8801847054888<br>For any query/support please send e-mail to: <a href ="mailto: tauf@capmbd.com">tauf@capmbd.com</a></p>

		<p class="two">With Regards<br><span>CAPM Company Limited</span></p>
	</div>
</body>
</html>