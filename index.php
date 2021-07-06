<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {  	
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();  
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home</h2>
</div>
<form>  	
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <br><br><br><br><br>
    	<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
    <?php endif ?>
</form>
</body>
</html>