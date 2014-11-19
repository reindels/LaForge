<?php
// Inialize session
session_start();
// Check, if user is already logged in, then jump to secured page
if(isset($_SESSION['username'])) {
header('Location: login.php');
}
?>
<?php $pagetitle = "Home Page"; ?>
<?php $sitepath="http://people.oregonstate.edu/~hamc/laforge/"; ?>
<?php $icon = "book_green.gif"; ?>
<?php include $sitename."header.htm"; ?> 

<table name = "subjects">

<?php 
   $SQLquery = "SELECT fname, lname FROM dependants";
   if(!$stmnt = $mysqli->prepare($SQLquery))
      {echo "bad things happened";}

   if(!$stmnt->execute())
      {echo "bad things 2";}

   if(!$stmnt->bind_result($fname,$lname))
      {echo "even more bad things";}



   while($smtnt->fetch()){
      echo "<tr>";
      echo "<td>$fname $lname</td>";
      echo "</tr>";
   }

   $stmnt->close();

?>

</table>
   

 <?php include $sitepath."footer.htm"; ?> 
