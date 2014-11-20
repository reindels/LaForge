<?php
// Inialize session
session_start();
// Check, if user is already logged in, then jump to secured page
if(isset($_SESSION['username'])) {
header('Location: login.php');
}
?>
<?php $pagetitle = "Update Account"; ?>
<?php $sitepath="http://people.oregonstate.edu/~reindels/LaForge/"; ?>
<?php $icon = "book_green.gif"; ?>
<?php include "header.htm"; ?> 
<div style="text-align: center;">
<h4>Add Child</h4>
<form action="addchild.php" method="post">
First Name: <input type="text" name="fname"><br>
Last Name: <input type="text" name="lname"><br>
<input type="submit">
</form>
<h4>Remove Child</h4>
<form action="rmchild.php" method="post">
First Name: <input type="text" name="fname"><br>
Last Name: <input type="text" name="lname"><br>
<input type="submit">
</form>
<h4>Update Guardian Info</h4>
<form action="update.php" method="post">
First Name: <input type="text" name="fname"><br>
Last Name: <input type="text" name="lname"><br>
E-mail: <input type="text" name="email"><br>
Current Password: <input type="text" name="cpass"><br>
New Password: <input type="text" name="pass1"><br>
Match New Password: <input type="text" name="pass2"><br>
<input type="submit">
</form>
</div>
<?php include "footer.htm"; ?> 
