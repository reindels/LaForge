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
// "Testing mySQL INSERT and DELETE statement for Dependents table:
	echo "Testing mySQL INSERT and DELETE for Dependents table:";
        $SQLadd = "INSERT INTO Dependents (fname, lname, gid) VALUES ('unitadd', 'surname', 1)";
        $SQLrm = "DELETE FROM Dependents WHERE fname='unitadd' AND lname='surname' AND gid ='1'";
//  Prepare REMOVE
        if(!$stmnt = $mysqli->prepare($SQLrm))
        {echo "$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass prepare REMOVE";}
//	Execute REMOVE
	if(!$stmnt->execute())
        {echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass execute REMOVE";}	
	$stmnt->close();
// Print Dependentes	
	$SQLdeps = "SELECT fname, lname, gid FROM Dependents WHERE gid=1";
	if(!$stmnt = $mysqli->prepare($SQLdeps))
	{echo "$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass prepare";} 
	if(!$stmnt->execute())
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass execute";}
	if(!$stmnt->bind_result($fname,$lname,$gid))
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass bind_result";}
//	
	echo "<br/>Dependents:<br/>";
	echo "<table>";
	while($stmnt->fetch()){
		echo "<tr>";
		echo "<td>- $fname $lname $gid</td>";
		echo "</tr>";
	}
	$stmnt->close();
	echo "</table><br/>";	
//	Prepare ADD
        if(!$stmnt = $mysqli->prepare($SQLadd))
        {echo "$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass prepare ADD";}
//	Execute ADD
        if(!$stmnt->execute())
        {echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass execute ADD";}
		$stmnt->close();
// Print Dependents	
	$SQLdeps = "SELECT fname, lname, gid FROM Dependents WHERE gid=1";
	if(!$stmnt = $mysqli->prepare($SQLdeps))
	{echo "$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass prepare";}
	if(!$stmnt->execute())
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass execute";}
	if(!$stmnt->bind_result($fname,$lname,$gid))
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass bind_result";}
//	
	echo "<br/>Dependents:<br/>";
	echo "<table>";
	while($stmnt->fetch()){
		echo "<tr>";
		echo "<td>- $fname $lname $gid</td>";
		echo "</tr>";
	}
	$stmnt->close();
	echo "</table><br/>";	
//  Prepare REMOVE
        if(!$stmnt = $mysqli->prepare($SQLrm))
        {echo "$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass prepare REMOVE";}
//	Execute REMOVE
	if(!$stmnt->execute())
        {echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass execute REMOVE";}	
	$stmnt->close();
// Print Dependents	
	$SQLdeps = "SELECT fname, lname, gid FROM Dependents WHERE gid=1";
	if(!$stmnt = $mysqli->prepare($SQLdeps))
	{echo "$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass prepare";}
	if(!$stmnt->execute())
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass execute";}
	if(!$stmnt->bind_result($fname,$lname,$gid))
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass bind_result";}
//	
	echo "<br/>Dependents:<br/>";
	echo "<table>";
	while($stmnt->fetch()){
		echo "<tr>";
		echo "<td>- $fname $lname $gid</td>";
		echo "</tr>";
	}
	$stmnt->close();
	echo "</table><br/>";	
// UPDATE guardian test
	echo "Testing mySQL UPDATE for Guardians table:";


// "Testing mySQL Update statement for Guardians table:
$SQLupdateadd = "INSERT INTO Guardians(fname, lname, email, password) VALUES ('UPDATE TEST', 'fail', 'update@email.com', 'nopass')";
//	Prepare ADD
        if(!$stmnt = $mysqli->prepare($SQLupdateadd))
        {echo "$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass prepare INSERT Guardian";}
//	Execute ADD
        if(!$stmnt->execute())
        {echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass execute INSERT Guardian";}
		$stmnt->close();

// Print Guardians	
	$SQLgs = "SELECT fname, lname, id FROM Guardians WHERE fname='UPDATE TEST'";
	if(!$stmnt = $mysqli->prepare($SQLgs))
	{echo "$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass prepare";} 
	if(!$stmnt->execute())
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass execute";}
	if(!$stmnt->bind_result($fname,$lname,$id))
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass bind_result";}
//	
	echo "<br/>Guardians:<br/>";
	echo "<table>";
	while($stmnt->fetch()){
		echo "<tr>";
		echo "<td>- $fname $lname $id</td>";
		echo "</tr>";
	}
	$stmnt->close();
	echo "</table><br/>";	



        $SQLupdate = "UPDATE Guardians SET lname='SUCCESS' WHERE fname = 'UPDATE TEST'";
//  Prepare Update
        if(!$stmnt = $mysqli->prepare($SQLupdate))
        {echo "$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass prepare UPDATE";}
//	Execute Update
	if(!$stmnt->execute())
        {echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass execute UPDATE";}	
	$stmnt->close();
// Print Guardians	
	$SQLgs = "SELECT fname, lname, id FROM Guardians WHERE fname='UPDATE TEST'";
	if(!$stmnt = $mysqli->prepare($SQLgs))
	{echo "$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass prepare";} 
	if(!$stmnt->execute())
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass execute";}
	if(!$stmnt->bind_result($fname,$lname,$id))
	{echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
	else
	{echo "<br/>$pass bind_result";}
//	
	echo "<br/>Guardians:<br/>";
	echo "<table>";
	while($stmnt->fetch()){
		echo "<tr>";
		echo "<td>- $fname $lname $id</td>";
		echo "</tr>";
	}
	$stmnt->close();
	echo "</table><br/>";	
	$SQLrmg = "DELETE FROM Guardians WHERE fname='UPDATE TEST'";
	//  Prepare REMOVE
        if(!$stmnt = $mysqli->prepare($SQLrmg))
        {echo "$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass prepare REMOVE upd";}
//	Execute REMOVE
	if(!$stmnt->execute())
        {echo "<br/>$fail $mysqli->connecterrno $mysqli->error";}
        else
        {echo "<br/>$pass execute REMOVE upd";}	
	$stmnt->close();
?>
