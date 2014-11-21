<?php include $sitename."header.htm"; ?> 
					
			
<h2>Create a New Profile:</h2>	
	<form method= "POST" action="_createprofile.php">
		<tr><td>First Name..:<input type="text" name="fname" size ="25"></td></tr>
		<br>
		<tr><td>Last Name...:<input type="text" name="lname" size ="25"></td></tr>
		<br>
		<tr><td>Email..........:<input type="text" name="email" size ="25"></td></tr>
		<br>
		<tr><td>Password.....:<input type="password" name="password" size="25"></td></tr>
		<br>		
		<input type="submit" value="Create Profile" >		
	</form>
	
 <?php include $sitepath."footer.htm"; ?> 