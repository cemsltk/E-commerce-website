<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Register Page</title>
</head>

<body>

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
					<a class="nav-link" href="login.php">
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

	<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="row">
			<div class=" col-md-4 offset-md-4 my-4">
				<form>
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-md-3">
									<h1>
										<span class="fa fa-user-plus mt-3"></span>
									</h1>
								</div>
								<div class="col-md-9">
									<h3>Register</h3>
									<small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, voluptatem!</small>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="form-group">
								<input type="text" name="username" placeholder="Username" class="form-control" value="<?php echo $username; ?>" required>
								<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
							</div>
							<div class="form-group">
								<input type="password" name="password_1" placeholder="Password" class="form-control" required> 
								<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
							</div>
							<div class="form-group">

								<input type="password" name="password_2" placeholder="Confirm Password" class="form-control" required>
								<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
							</div>
							<div class="form-group">

								<input type="email" name="email_1" placeholder="E-mail" class="form-control" value="<?php echo $email_1; ?>" required>
								<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
							</div>
							<div class="form-group">

								<input type="email" name="email_2" placeholder="Confirm E-mail" class="form-control" value="<?php echo $email_2; ?>" required>
								<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
							</div>
							<div class="form-group">

								<input type="phoneNumber" placeholder="Phone Number" name="phoneNumber" class="form-control" required>
								<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
							</div>
							<div class="card-footer text-muted text-right">
								
								<button type="submit" class="btn btn-success" name="reg_user">Register</button>

							</div>
							<div class="card-footer text-muted text-center">
							<small>Already have an account?</small>
							<a href="login.php" class="btn" style="color: #1338BE;">Login</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>


	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>

</html>