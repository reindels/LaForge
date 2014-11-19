<?php
// Check, if user is already logged in, then jump to secured page
if(isset($_SESSION['username'])) {
header('Location: login.php');
}
?>


	<?php if(!isset($_SESSION['gid'])) { ?>
		<form method="POST" action="">
			<table>
				<tr>
					<td>Email: </td>
					<td><input type="text" name="email" size="25"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password" size="25"></td>
				</tr>
				<input type="hidden" name="login_attempted" value="yes">
			</table>
		</form>
	<?php }else{ ?>
	
	
	
	<?php } ?>












<?php $pagetitle = "Home Page"; ?>
<?php $sitepath="http://people.oregonstate.edu/~hamc/laforge/"; ?>
<?php $icon = "book_green.gif"; ?>
<?php include $sitename."header.htm"; ?> 

<div style="text-align:center;">
	<p>
	<img src="<?php echo $imgpath; ?>dsletters.jpg"/>
	</p>
</div>






// UNIT TEST TO SEE IF WE COULD QUERY FROM DATABASE
 <?php 
	// /* Select queries return a resultset */
	// if ($result = $mysqli->query("SELECT * FROM Guardians")) {
		// printf("Select returned %d rows.\n", $result->num_rows);
		
		
	
		// /* free result set */
		// $result->close();
	// }
?>	
<?php include $sitepath."footer.htm"; ?> 
