<!DOCTYPE html>
<html>
<head>
	<title>Traverse Nepal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
</head>
<body>

	<p>Traverse Nepal</p>


<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-md-6 login-left">
			<h2>Login here</h2>
			<form action="validation.php" method="post">
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" required>
					
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
					
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>

		<div class="col-md-6 login-right">
			<h2>Register here</h2>
			<form action="registration.php" method="post">
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" required>
					
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
					
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
  </div>
</div>
</body>
</html>
')
?>