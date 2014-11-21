<?php
	session_start(); 
	
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s\n", $mysqli->connect_error);
		exit();
	}
	
$fname = mysqli_real_escape_string ($_POST['fname']);
$lname = mysqli_real_escape_string ($_POST['lname']);

$query = "INSERT INTO Dependents (fname, lname, gid) VALUES ('$fname', '$lname', '$gid')";

if ($fname == NULL || $lname == NULL) {
		header('Location: error.php');
}
else {
	if (!$result = $mysqli->query($q2)) {
			die('There was an error['.$mysqli->error.']');
			
		}
	else {
		header('Location: updateacc.php');
	}
}
	
	?>