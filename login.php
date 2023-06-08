<html>
<head>
	<title>User login and Registration </title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>
<body>

<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-md-6 login-left">
			<h2>Login here</h2>
			<form action="validation.php" method="post">
				

	<div class="form-group">		
			<label>username</label>
				<input type="text" name="user" class="form-control" required>
	</div>
	<div class="form-group">
			<label>Password</label>
				<input type="Password" name="password" class="form-control" placeholder="Password" autocomplete="off"
	     				   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
	</div>

<button type="submit" class="btn btn-primary">login</button>
</form>
</div>

		<div class="col-md-6 login-right">
		<h2>Register here</h2>
			<form action="registration.php" method="post">
				<div class="form-group">
					
			<label>username</label>
				<input type="text" name="user" class="form-control" required>
	</div>
			<div class="form-group">
			<label>Password</label>
				<input type="Password" name="password" class="form-control" placeholder="Password" autocomplete="on"
	     				   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
	</div>

<button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>
</div>

</body>
</html>