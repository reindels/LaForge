<?php $pagetitle = "_usercheck"; ?>
<?php $sitepath="http://people.oregonstate.edu/~hamc/laforge/_usercheck"; ?>
<?php $icon = "book_green.gif"; 
ini_set('display_errors','On');
			error_reporting(E_ALL);
			$SQL_DIRECTORY = "oniddb.cws.oregonstate.edu";
			$MY_USERNAME = "reindels-db";
			$MY_PASSWORD = "QVUJJ2JUdAqBApEL";
			$DATABASE_NAME = "reindels-db";
			$mysqli = new mysqli($SQL_DIRECTORY,$MY_USERNAME,$MY_PASSWORD,$DATABASE_NAME);
			
?>
<?php /* _usercheck.php */
error_reporting(E_ERROR | E_PARSE);
session_start(); 

$email =$_POST['email'];
$password =$_POST['password'];

	/*Select user with this username*/
	$result = $mysqli->query(
	    "SELECT *
		FROM Guardians WHERE 
		email = '". $email . "'" );
		
		if(!$result){
			//echo('Failed to open mysqli: ');
		}
				
		$num_results = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
		 //*check that username is associated with the password*/
		for($i=0; $i<$num_results; $i++){
		if($row["email"] == $email && $row["password"] == $password){
			//$_SESSION['fname'] = $fname;
			//$_SESSION['lname'] = $lname;
			$_SESSION['email'] = $email;
			$_SESSION['gid'] = $row['id'];
			$gid = $row['id'];
			//echo $_SESSION['gid'];
			header('Location: index.php');
		}
		//else
			//header('Location: index.php')
			}
		header('Location: index.php')
			
	?>