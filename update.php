<?php
	session_start(); 
	
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s\n", $mysqli->connect_error);
		exit();
	}

$fname = mysqli_real_escape_string ($_POST['fname']);
$lname = mysqli_real_escape_string ($_POST['lname']);
$email = mysqli_real_escape_string ($_POST['email']);
$cpass = mysqli_real_escape_string ($_POST['cpass']);
$pass1 = mysqli_real_escape_string ($_POST['pass1']);
$pass2 = mysqli_real_escape_string ($_POST['pass2']);
$gid = 99999999;

	if (isset($_SESSION['gid'])) {
		$gid = $_SESSION['gid'];
	}
	
$q1 = "UPDATE Guardians SET fname='".$fname."', lname='".$lname."', email='".$email."', pass1='".$pass1."' WHERE gid = '".$gid."'";
$q2 = "UPDATE Guardians SET fname='".$fname."', lname='".$lname."', email='".$email."' WHERE gid = '".$gid."'";


	if ($fname == NULL || $lname == NULL || $cpass == NULL || $email == NULL) {
		header('Location: error.php');
	}
	elseif (($pass1 != NULL || $pass2 != NULL) && ($pass1 === $pass2)) {
		//set new paass and update information
		if (!$result = $mysqli->query($q1)) {
			die('There was an error['.$mysqli->error.']');
		}
		else {
			header('Location: updateacc.php');
		}
		
	}
	else {
		//update information
		if (!$result = $mysqli->query($q2)) {
			die('There was an error['.$mysqli->error.']');
		}
		else {
			header('Location: updateacc.php');
		}
	}
	
	
	?>
