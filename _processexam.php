<?php $pagetitle = "_processexam.php"; ?>
<?php $sitepath="http://people.oregonstate.edu/~hamc/laforge/_processexam.php"; ?>
<?php $icon = "book_green.gif"; 
ini_set('display_errors','On');
			error_reporting(E_ALL);
			$SQL_DIRECTORY = "oniddb.cws.oregonstate.edu";
			$MY_USERNAME = "reindels-db";
			$MY_PASSWORD = "QVUJJ2JUdAqBApEL";
			$DATABASE_NAME = "reindels-db";
			$mysqli = new mysqli($SQL_DIRECTORY,$MY_USERNAME,$MY_PASSWORD,$DATABASE_NAME);		
?>

<?php
error_reporting(E_ERROR | E_PARSE);
	session_start();

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$score = 0;

if ($q1 == "1"){
	$score = $score + 1;
}
if ($q2 == "1"){
	$score = $score + 1;
}
if ($q3 == "1"){
	$score = $score + 1;
}

$id = rand(1000000,9999999);
$did = $_SESSION['id'];

$result = $mysqli->query( 
		"INSERT INTO Scores(id, did, tid, score)
		VALUES (
			'".$id."', 
			'".$did."', 
			'".$tid."', 
			'".$score."'	);");
if(!$result){
		//echo('Failed to open mysqli: ');
		}
			
header('Location: index.php');
?>







