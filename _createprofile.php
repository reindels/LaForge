<?php $pagetitle = "_createprofile.php"; 
//NOTE: for whatever reason it wont accept the header
//THIS IS THE MOST ANNOYING ERROR BECAUSE STUPID  
?>
<?php $pagetitle = "_createprofile"; ?>
<?php $sitepath="http://people.oregonstate.edu/~hamc/laforge/_createprofile.php"; ?>
<?php $icon = "book_green.gif"; 
ini_set('display_errors','On');
			error_reporting(E_ALL);
			$SQL_DIRECTORY = "oniddb.cws.oregonstate.edu";
			$MY_USERNAME = "reindels-db";
			$MY_PASSWORD = "QVUJJ2JUdAqBApEL";
			$DATABASE_NAME = "reindels-db";
			$mysqli = new mysqli($SQL_DIRECTORY,$MY_USERNAME,$MY_PASSWORD,$DATABASE_NAME);
			
//error_reporting(E_ERROR | E_PARSE);
session_start(); 
?>

<?php // Create profile and add to database
$email =$_POST['email'];
$password =$_POST['password'];
$fname =$_POST['fname'];
$lname =$_POST['lname'];  
trim($username); trim($password); trim($fname); trim($lname);

	/*Give username a unique user_id*/
	$gid = rand(1000000,9999999);
	//$query = "SELECT * FROM User";
	$result = $mysqli->query(	"SELECT * 
								FROM Guardians");
	/*Create new user in database*/		
	$result = $mysqli->query( 
		"INSERT 
		INTO Guardians(id, fname, lname, email, password)
		VALUES (
			'".$gid."', 
			'".$fname."', 
			'".$lname."', 
			'".$email."', 
			'".$password."'	)");
			
		header('Location: index.php');
				
		//if(!$result){
		//	die('Fatal error(s): ' . mysql_error());
		//}
		//else{
				
			//header('Location: index.php');
		//}

?>