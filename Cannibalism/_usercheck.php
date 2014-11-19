<?php /* _usercheck.php */
session_start();
$email =$_POST['email'];
$password =$_POST['password'];

//??? WHAT IS THE DATABASE CONNECTION ???
	$dbcnx = mysql_connect("oniddb.cws.oregonstate.edu","reindels-db", "QVUJJ2JUdAqBApEL"); 
		if (!$dbcnx){
			echo 'Connection failure!';
			exit();
		}
	$db = mysql_select_db("reindels-db", $dbcnx);

		if (!$db) {
			echo 'Database failure! ';
			exit();	
		}
	
	/*Select user with this username*/
	$query = 
		"SELECT *
		FROM Guardians WHERE 
		email = '". $email . "'"; 
		
	$result = mysql_query($query);
		if(!$result){
			die('Fatal error(s): ' . mysql_error());
		}
		$row = mysql_fetch_array($result);
		/*check that username is associated with the password*/
		if($row["email"] == $username && $row["password"] == $password){
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['email'] = $email;
			$_SESSION['id'] = $row['id'];
			header('Location: Homepage.php');
		}
		else{
			header('Location:index.php');
		}
		
	?>