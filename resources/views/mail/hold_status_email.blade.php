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
		<p>
			Please find the attached  Report of your holding status as on {{date("F d, Y")}}.<br>
			Registration No: {{$id}}<br>
			Applicant name: {{$apl_name}}
		</p>
		<p class="one">For details please contact us <br> E-mail: <a href ="mailto: amcuf@capmbd.com">amcuf@capmbd.com</a> <br> +8801847054877 <br> +8801847054888</p>
		<p class="two">Thanks<br><span>CAPM Authority</span></p>
	</div>
</body>
</html>