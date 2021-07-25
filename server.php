<?php
session_start();
$username = "";
$email_1 = "";
$email_2 = "";
$phoneNumber="";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'e-commerce',3340);

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email_1 = mysqli_real_escape_string($db, $_POST['email_1']);
  $email_2 = mysqli_real_escape_string($db, $_POST['email_2']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $phoneNumber = mysqli_real_escape_string($db,$_POST['phoneNumber']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error into $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email_1)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if(empty($phoneNumber)) { array_push($errors,"Mobile Phone is required");}
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match!");
  }
  if($email_1 != $email_2) {
    array_push($errors, "These two emails do not match!");
  }
  if(!str_contains($email_1,"@")){
    array_push($errors,"You must use your mail.");
  }
  if(!(strlen($_POST["password_1"]) == 8)){
    array_push($errors,"Password must have 8 character.");
  }
  if(!preg_match("#[0-9]#",$password_1)){
    array_push($errors,"Password must contain 1 number.");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email_1='$email_1' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
    if ($user['email_1'] === $email_1) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO users (username, email_1, password, mobilePhone) 
  			  VALUES('$username', '$email_1', '$password', '$phoneNumber')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	header('location: signedInMainPage.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;          
          header('location: signedInMainPage.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>