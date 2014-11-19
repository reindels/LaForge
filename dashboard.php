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

<div style="text-align:center;">
	<p>Look a dashboard!
	</p>
        </p>
</div>
 <?php include $sitepath."footer.htm"; ?> 
