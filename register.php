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

<?php
    require_once('header.php');
    ?>

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
									<small>You can register by filling out the required information.</small>
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