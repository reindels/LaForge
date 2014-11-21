<?php
	//session_start(); 
	
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
	//Testing the header redirect without output as required by header()
 foreach ($_POST as $key => $value) {
    //do something
    echo $key . ' has the value of ' . $value;
    echo '<br />';
} 
*/

	
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gid = 1;

$query = "DELETE FROM Dependents WHERE fname='$fname' AND lname='$lname' AND gid ='$gid'";

if ($fname == NULL || $lname == NULL) {
		header('Location: error.php');
}
else {
	if (!$mysqli->query($query)) {
			 printf("Error: %s\n", $mysqli->sqlstate);		
	} else {
		header('Location: updateacc.php');
	}
}
	
	?>
