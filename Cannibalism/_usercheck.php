<?php /* _usercheck.php */
session_start();
$email =$_POST['email'];
$password =$_POST['password'];

//??? WHAT IS THE DATABASE CONNECTION ???
	$dbcnx = mysql_connect("mysql.cs.orst.edu","cs275_tuckerch", "2213"); 
		if (!$dbcnx){
			echo 'Connection failure!';
			exit();
		}
	$db = mysql_select_db("cs275_tuckerch", $dbcnx);

		if (!$db) {
			echo 'Database failure! ';
			exit();	
		}
	
	/*Select user with this username*/
	$query = 
		"SELECT *
		FROM User WHERE 
		username = '". $username . "'"; 
		
	$result = mysql_query($query);
		if(!$result){
			die('Fatal error(s): ' . mysql_error());
		}
		$row = mysql_fetch_array($result);
		/*check that username is associated with the password*/
		if($row["username"] == $username && $row["password"] == $password){
			$_SESSION['username'] = $username;
			$_SESSION['user_id'] = $row['user_id'];
			header('Location: Homepage.php');
		}
		else{
			header('Location:index.php');
		}
		
	?>