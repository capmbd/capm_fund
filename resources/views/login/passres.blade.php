<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Password Reset</title>
		<style type="text/css">
			.main{
				width: 400px;
				margin: 0 auto;
				margin-top: 50px;
				background: #008080;
				padding: 30px;
			}

			table tr td{
				padding: 5px;
			}

			label{
				color:#fff;
			}

			input{
				width: 250px;
				border:none;
				font-size: 15px;
				padding: 3px 5px;
			}

			.btn{
				width: 70px;
				border:none;
				cursor: pointer;
				font-weight: 700;
			}

			p{
				color: #fff;
			}

		</style>
	</head>
	<body>
		<div class="main">
			<form action="{{ url('/preset') }}" method="POST">
				@csrf

				<table>
					<tr>
						<td><label>ID</label></td>
						<td><input type="text" name="regno" minlength="12" maxlength="12" required></td>
					</tr>
					<tr>
						<td><label>Password</label></td>
						<td><input type="password" name="password" required></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="btn" type="submit" value="Submit"></td>
					</tr>
					<tr>
						<td></td>
						<td><p> <b> {{ Session::get('message') }} </b> </p></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>