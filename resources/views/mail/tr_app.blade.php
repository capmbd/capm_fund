<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mail</title>
	<style>
		.two span{
			font-weight: 700;
		}
		.name{
			font-weight: 700;
		}
	</style>
</head>
<body>
	<div class="main">
		<p>Dear Concern</p>
		<p>The {{$type}} request for <span class="name">{{$unit}}</span> units and Receipt No:{{$rcpt_no}} is Approved.<br>For details please contact us<br>E-mail: <a href ="mailto: amcuf@capmbd.com">amcuf@capmbd.com</a><br>+880 1847 054877<br>+880 1847 054888</p>

		<p class="two">Thanks<br><span>CAPM Authority</span></p>
	</div>
</body>
</html>