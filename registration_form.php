<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="registration_form.css">
</head>
<body>
	<form action="registration.php" method="post">
		<div>
			<table cellspacing="40px" >
				<tr>
					<td colspan="2" class="t1">Registration Form</td>
				</tr>
				<tr>
					<td><input type="text" placeholder="First Name" name="first_name"  required></td>
					<td><input type="text" placeholder="Last Name" name="last_name" required></td>
				</tr>
				<tr>
					<td colspan="2"><input type="email" placeholder="Enter Email" name="email" required></td>
				</tr>
				<tr>
					<td colspan="2"><input type="password" placeholder="Enter Password" name="password" required></td>
				</tr>
				<tr>
					<td><button type="submit" name="submit">Submit</button></td>
					<td><button type="reset" name="reset">Reset</button></td>
				</tr>
			</table>
		</div>
	</form>
</body>
</html>