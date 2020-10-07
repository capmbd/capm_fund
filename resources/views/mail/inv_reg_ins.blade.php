<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mail</title>
	<style>
		.info{
			background: #02646f;
			padding: 5px;
		}

		.info tr td{
			padding: 5px;
			border-bottom: 1px solid #fff;
			border-right: 1px solid #fff;
			color:#fff;
		}
		.td1{
			border-left: 1px solid #fff;
			font-weight: 700;
		}
		.td2{
			border-top: 1px solid #fff;
		}
		.head_h{
			color: #02646f;
		}
		.main{
			border: 3px solid #02646f;
			padding: 5px;
			margin-top: 10px;
			width: 600px;
		}
		p{
			font-weight: 700;
			text-align: justify;
		}
	</style>
</head>
<body>
	<h3 class="head_h">Registration Completed (ID: {{$reg_no}})</h3>
	<div class="main">
		<p>Dear Valued Investor(s)</p>
		<p>Many thanks for registering with CAPM Managed Unit Funds.<br>CAPM believes your investment in our Unit Funds will capitalize the benefits of both long term capital appreciation and dividend income in a regular manner. Your registration details are given below:</p>

		<table class="info" cellspacing="0">
			<tr>
				<td class="td1 td2">Institution Name</td>
				<td class="td2">{{$name}}</td>
			</tr>
			<tr>
				<td class="td1">Mailing Address</td>
				<td>{{$address}}</td>
			</tr>
			<tr>
				<td class="td1">Trade License / Registration No.</td>
				<td>{{$trdl}}</td>
			</tr>
			<tr>
				<td class="td1">Institution ID No.</td>
				<td>{{$reg_no}}</td>
			</tr>
			<tr>
				<td class="td1">Telephone No.</td>
				<td>{{$phn}}</td>
			</tr>
		</table>

		<p>You can see your portfolio.<br>Details <a href="http://capmfunds.com/">click here</a> to login</p>

		<table class="info" cellspacing="0">
			<tr>
				<td class="td1 td2">User ID</td>
				<td class="td2">{{$reg_no}}</td>
			</tr>
			<tr>
				<td class="td1">Password</td>
				<td>{{$pass}}</td>
			</tr>
		</table>
		<p>Please keep your Investor ID No. at safe for using as reference in the time of subscription/surrender units.</p>
	</div>
</body>
</html>