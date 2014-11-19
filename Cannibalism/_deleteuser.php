<?php /* _deleteuser.php */
session_start();
$user_id = $_SESSION['user_id'];

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
	$query = 
		"DELETE FROM User
		WHERE username = '". $user_id ."' ";
		$result = mysql_query($query);
		
		if(!$result){
			die('Fatal error(s): ' . mysql_error());
		}
		else{
			header('Location: Login.php');
		}
	?>