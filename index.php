<?php
// Check, if user is already logged in, then jump to secured page
if(isset($_SESSION['username'])) {
header('Location: login.php');
}
?>
	
<?php $pagetitle = "Home Page"; ?>
<?php //$sitepath="http://people.oregonstate.edu/~hamc/laforge/"; ?>
<?php $icon = "book_green.gif"; ?>
<?php include "header.htm"; ?> 
<?php 
error_reporting(E_ERROR | E_PARSE);
	session_start();
	?>
	
	
	
	
	
	
	
<div style="text-align:center;">
	<p>
	<img src="<?php echo $imgpath; ?>dsletters.jpg"/>
	</p>

</div>
	<h1>Lorem ipsum</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<h2>Sed ut perspiciatis</h2>
	<p>
	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
	</p>
 <?php 
	// UNIT TEST TO SEE IF WE COULD QUERY FROM DATABASE
	// /* Select queries return a resultset */
	// if ($result = $mysqli->query("SELECT * FROM Guardians")) {
		// printf("Select returned %d rows.\n", $result->num_rows);
		
		
	
		// /* free result set */
		// $result->close();
	// }
?>	
<?php include "footer.htm"; ?> 
