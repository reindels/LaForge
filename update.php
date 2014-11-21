<?php 
	$SQL_DIRECTORY = "oniddb.cws.oregonstate.edu";
	$MY_USERNAME = "reindels-db";
	$MY_PASSWORD = "QVUJJ2JUdAqBApEL";
	$DATABASE_NAME = "reindels-db";
	$mysqli = new mysqli($SQL_DIRECTORY,$MY_USERNAME,$MY_PASSWORD,$DATABASE_NAME);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s\n", $mysqli->connect_error);
		exit();
	}
/*
foreach ($_POST as $key => $value) {
    //do something
    echo $key . ' has the value of ' . $value;
    echo '<br />';
}
 */
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$cpass = $_POST['cpass'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$oldpass= "pacifier";
$gid = 9999;

	if (isset($_SESSION['gid'])) {
		$gid = $_SESSION['gid'];
	}
	
$q1 = "UPDATE Guardians SET fname='$fname', lname='$lname', email='$email', password='$pass1' WHERE id = '$gid'";
$q2 = "UPDATE Guardians SET fname='$fname', lname='$lname', email='$email' WHERE id = '$gid'";


	if ($fname == NULL || $lname == NULL || $cpass == NULL || $email == NULL) {
		header('Location: error.php');
	}
	elseif (($pass1 != NULL || $pass2 != NULL) && ($pass1 === $pass2)) {
		//set new paass and update information
		if (!$mysqli->query($q1)) {
			 printf("Error: %s\n", $mysqli->sqlstate);
		}
		else {
			header('Location: updateacc.php');
		}
		
	}
	else {
		//update information
		if (!$mysqli->query($q2)) {
			 printf("Error: %s\n", $mysqli->sqlstate);
		}
		else {
			header('Location: updateacc.php');
		}
	}
	
	
	?>
