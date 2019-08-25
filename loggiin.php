<!DOCTYPE html>
<html>
<head>
	<title>User Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row ">
			<div class = "col-md-6 "login-left>
				<h2>Login Here</h2>
				<form action="validation.php" method="POST" >
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" required>
						</div>
						<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary">Login</button>

				</form>
			</div>
				<div class = "col-md-6" login-right>
				<h2>Registration</h2>
				<form action="registration.php" method="POST" >
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" required>
						</div>
						<div class="form-group">
						<label>Nationality</label>
						<input type="text" name="nationality" class="form-control" required>
						</div>
						<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" required>
						</div>
						<div class="form-group">
						<label>Institution</label>
						<input type="text" name="institution" class="form-control" required>
						</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" required>
						</div>
						<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary">Register</button>

				</form>
			</div>
		</div>
	</div>
	</div>

</body>
</html>