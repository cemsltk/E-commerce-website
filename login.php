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
	<!-- navbar -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<a class="navbar-brand" href="mainpage.php">My Shop</a>
		<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavId">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="mainpage.php">Home<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="productPage.php">Product</a>
				</li>
			</ul>
			<ul class="navbar-nav navbar-right" style="margin-right: 40px;">
				<li class="nav-item">
					<a class="nav-link" href="login.html">
						<span class="fa fa-sign-in mr-2"></span>Login
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="register.php">
						<span class="fa fa-user-plus mr-2"></span>Register
					</a>
				</li>
				<!-- if ile giriş yapıp yapmadığı kontrol edilecek eğer giriş yapmadıysa burası görünmeyecek-->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="fa fa-user mr-2"></span>Profile</a>
					<div class="dropdown-menu" aria-labelledby="dropdownProfile">
						<a class="dropdown-item" href="myAccountPage.php">My Account</a>
						<a class="dropdown-item" href="myAdressesPage.php">My Adresses</a>
						<a class="dropdown-item" href="myOrdersPage.php">My Orders</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<span class="fa fa-sign-out"></span>Log Out</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdownCart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="fa fa-shopping-bag mr-2"></span>My Cart</a>
					<div class="dropdown-menu" aria-labelledby="dropdownCart">
						<a class="dropdown-item" href="productPage.php">Ürün 1</a>
						<a class="dropdown-item" href="#">Ürün 2</a>
						<a class="dropdown-item" href="#">Ürün 3</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="cartPage.php">
							<span class="fa fa-shopping-cart mr-2"></span>Go to Cart</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
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
								<a href="ForgotPasword.html" class="btn btn-warning">Forgot Password</a>
								<button class="btn btn-success" type="submit" name="login_user">Login</button>
							</div>
							<div class="card-footer text-muted text-center">
							<p class="footer" style="font-size: 14px;">New to MyShop?</p>
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