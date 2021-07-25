<!-- 
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
		  <a href="register.php" class="btn">Register</a>
  	</div>
	
  	
  </form>
</body>
</html> -->
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Login Page</title>
</head>

<body>
	<?php
	require_once('header.php');
	?>
	<?php include('errors.php'); ?>
	<div class="container">
		<form method="post" action="login.php">
			<div class="row">
				<div class="col-md-4 offset-md-4 my-4">
					<form>
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col-md-3">
										<h1>
											<span class="fa fa-user mt-3"></span>
										</h1>
									</div>
									<div class="col-md-9">
										<h2>Login</h2>
										<small>Please enter your username and password.</small>
									</div>
								</div>
							</div>
							<form action="server.php" class="was-validated">
								<div class="card-body">
									<div class="form-group">
										<input type="username" name="username" id="username" placeholder="Username" class="form-control" required>
										<div class="valid-feedback">Valid.</div>
										<div class="invalid-feedback">Please fill out this field.</div>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
										<div class="valid-feedback">Valid.</div>
										<div class="invalid-feedback">Please fill out this field.</div>
									</div>
								</div>
								<div class="card-footer text-muted text-right">
									<button class="btn btn-warning" disabled onclick="<?php echo "<script>alert('This feature is currently not available.')</script>";
																					echo "<script>window.location = 'login.php'</script>"; ?>">Forgot Password</button>
									<button class="btn btn-success" type="submit" name="login_user">Login</button>
								</div>
								<div class="card-footer text-muted text-center">
									<p class="footer" style="font-size: 14px;">New to Nostalji Plak?</p>
									<a href="register.php" class="btn" style="background-color: lightgrey;">Create your new account</a>
								</div>
							</form>
						</div>
					</form>
				</div>
			</div>
	</div>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>