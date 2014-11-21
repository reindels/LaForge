<!DOCTYPE html> 
<?php 
	$pass = "PASS";
	$fail = "FAIL";
	echo "UNIT TESTS: <br/><br/>";
	echo "Testing Database Connection: ";
	$sitename="Dyslexia Help Center"; 
	$sitedescription="Online Dyslexia Help"; 
	//$sitepath="http://people.oregonstate.edu/~ONID_USERNAME/laforge/"; 
	$imgpath=$sitepath."img/";
	ini_set('display_errors','On');
	error_reporting(E_ALL);
	$SQL_DIRECTORY = "oniddb.cws.oregonstate.edu";
	$MY_USERNAME = "reindels-db";
	$MY_PASSWORD = "QVUJJ2JUdAqBApEL";
	$DATABASE_NAME = "reindels-db";
//
	$mysqli = new mysqli($SQL_DIRECTORY,$MY_USERNAME,$MY_PASSWORD,$DATABASE_NAME);
	if ($mysqli->connect_errno)
	{echo ("$fail: ". $mysqli->connect_errno . " " . $mysqli->connect_error);}
	else
	{echo "$pass";}
	//
	//			
	echo"<br/><br/>";
	echo "Testing mySQL SELECT statement for Guardians table: ";
//
//
	$SQLquery = "SELECT fname, lname FROM Guardians";
	if(!$stmnt = $mysqli->prepare($SQLquery))
	{echo "$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass prepare";}
//
	if(!$stmnt->execute())
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass execute";}
//
	if(!$stmnt->bind_result($fname,$lname))
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass bind_result";}
//
	echo "<br/>TABLE:<br/>";
	echo "<table>";
	while($stmnt->fetch()){
		echo "<tr>";
		echo "<td>- $fname $lname</td>";
		echo "</tr>";
	}
	$stmnt->close();
	echo "</table><br/>";
//
//
	echo "Testing mySQL SELECT statement for Dependents table: ";
	$SQLquery = "SELECT fname, lname FROM Dependents";
	if(!$stmnt = $mysqli->prepare($SQLquery))
	{echo "$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass prepare";}
//
	if(!$stmnt->execute())
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass execute";}
//
	if(!$stmnt->bind_result($fname,$lname))
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass bind_result";}
//
	echo "<br/>TABLE:<br/>";
	echo "<table>";
	while($stmnt->fetch()){
		echo "<tr>";
		echo "<td>- $fname $lname</td>";
		echo "</tr>";
	}
	$stmnt->close();
	echo "</table><br/>";
//
// "Testing mySQL INSERT and DELETE statement for Dependents table: ";
        $SQLadd = "INSERT INTO Dependents (fname, lname, gid) VALUES ('unitadd', 'surname', '9001')";
        $SQLrm = "DELETE FROM Dependents WHERE fname='unitadd' AND lname='surname' AND gid ='9001'";
//  Prepare REMOVE
        if(!$stmnt = $mysqli->prepare($SQLrm))
        {echo "$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass prepare";}
//	Execute REMOVE
	if(!$stmnt->execute())
        {echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass execute";}	
	$stmnt->close();
	
//	Prepare ADD
        if(!$stmnt = $mysqli->prepare($SQLadd))
        {echo "$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass prepare";}
//	Execute ADD
        if(!$stmnt->execute())
        {echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass execute";}
// Bind Result ADD
        if(!$stmnt->bind_result($fname,$lname))
        {echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass bind_result";}
		echo "<br/>TABLE:<br/>";
	while($stmnt->fetch()){
		echo "<tr>";
		echo "<td>- $fname $lname</td>";
		echo "</tr>";
	}
	$stmnt->close();
	echo "</table><br/>";
?>
