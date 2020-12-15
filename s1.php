<?php
session_start();

 $name = "";
 $email= "";
 $errors = array();

$db = mysqli_connect('localhost', 'root', '', 'urcart');


if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$pwd = mysqli_real_escape_string($db, $_POST['pwd']);

	if (empty($name)) {
		array_push($errors,"Username is required");
	}
	if (empty($email)) {
		array_push($errors,"Email is required");
	}
	if (empty($pwd)) {
		array_push($errors,"Password is required");
	}

	//if no error save user to database
	if (count($errors) == 0) {
		$password = md5($pwd);
		$sql = "INSERT INTO users (usersName, usersEmail, usersPwd) VALUES ('$name','$email','$password')";
		mysqli_query($db, $sql);
		$_SESSION['name'] = $name;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php');
	}
}

   // log the user in
   if (isset($_POST['login'])) {
   	$name = mysqli_real_escape_string($db, $_POST['name']);
	$pwd = mysqli_real_escape_string($db, $_POST['pwd']);

	if (empty($name)) {
		array_push($errors,"Username is required");
	}
	if (empty($pwd)) {
		array_push($errors,"Password is required");
	}
	if (count($errors) == 0) {
		$password = md5($pwd);
		$query = "SELECT * FROM users WHERE usersName ='$name' AND usersPwd ='$password'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['name'] = $name;
		    $_SESSION['success'] = "You are now logged in";
		    header('location: index.php');
		} else {
			array_push($errors, "wrong name/password combination");
		}
	}
}



  // logout
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['name']);
  	header('location: login.php');
  }
//sales
 if (empty($_SESSION['name'] )) {
 	//
 }
 else{
 	if(isset($_POST['sale'])){
$name= $_SESSION['name'] ;
$pid = "3";
$quer = "INSERT INTO userprod (usersId, pid) VALUES ('$name','$pid')";
mysqli_query($db,$quer);}}
?>