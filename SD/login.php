<html>
<head>
	<title> User Login and Registration</title>
	<link rel = "stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	</head>
	<body>
		<a href="index.php">Go Home!</a>
		<div class = "container">
			<div class = "row">
			<div class = "col-md-6">
				<h2>
					Login Here
				</h2>
				<form action = "validation.php" method = "post">
					<div class = "form-group">
					<label>Username</label>
					<input type = "text" name = "user" class = "form-control" required>


					</div>
					<div class = "form-group">
					<label>Password</label>
					<input type = "text" name = "password" class = "form-control" required>


					</div>
					<button type = "submit" class = "btn btn-primary"> Login </button>
				</form>
			</div>
			<div class = "col-md-6">
				<h2>
					Register  Here
				</h2>
				<form action = "registration.php" method = "post">
					<div class = "form-group">
					<label>Username</label>
					<input type = "text" name = "user" class = "form-control" required>


					</div>
					<div class = "form-group">
					<label>Password</label>
					<input type = "text" name = "password" class = "form-control" required>


					</div>
					<button type = "submit" class = "btn btn-primary"> Register </button>
				</form>
			</div>
			</div>
		</div>
	</body>
</html>>