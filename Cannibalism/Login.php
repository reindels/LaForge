<?php /* Login.php */
session_start();
session_destroy();
?>

<html>	
	<title>
		The Dyslexic Games - May the letters be ever in order
	</title>
	 <link rel="stylesheet" href="screen.css">
	
<body><div align=center> 			
			
<h2>Welcome to Game Trade!</h2>	
	<form method= "POST" action="_usercheck.php">
		<tr><td>Email: <input type="text" name="email" size ="25"</td></tr><br>
		<tr><td>Password: <input type="password" name="password" size="25"</td></tr><br>
		<input type="submit" value="Log In" >	
	
		</form>
	<form method= "POST" action="NewProfile.php">
		<input type="submit" value="Create a new Profile" >		
	</form>

</div></body>
	
</html>