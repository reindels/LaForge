<?php /* _createuser.php */
session_start();
$username =$_POST['username'];
$password =$_POST['password'];
$background =$_POST['background'];
trim($username); trim($password);

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
		

	/*Give username a unique user_id*/
	$user_id = rand(1000000,9999999);
	$query = "SELECT * FROM User";
	$result = mysql_query($query);
	if(!$result){
			die('Fatal error(s): ' . mysql_error());
		}
	/*Create new user in database*/		
	$query = 
		"INSERT 
		INTO User(user_id, username, password, user_text, rank)
		VALUES (
			'".$user_id."', 
			'".$username."', 
			'".$password."', 
			'".$background."', 
			'0'
			)";
	$result = mysql_query($query) ;
		if(!$result){
			die('Fatal error(s): ' . mysql_error());
		}
		else{
			header('Location: index.php');
		}

?>