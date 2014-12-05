<?php
error_reporting(E_ERROR | E_PARSE);
	session_start();
	
if(isset($_SESSION['username'])) {
header('Location: login.php');
}
	?>
	
	<?php include $sitename."header.htm"; ?> 
	
<form action="_processexam.php" method="POST"> 
	What is your favorite juice? <br>
	<input type="radio" name="q1" value="1"> I LIKE VODKA
	<br>
	<input type="radio" name="q1" value="0"> I LIKE WHISKEY
	<br><br>
		
	Are you Dyslexic? <br>
	<input type="radio" name="q2" value="1"> Absolutely
	<br>
	<input type="radio" name="q2" value="0"> Npoe I am nto
	<br><br>
		
	Do you like trains? <br>
	<input type="radio" name="q3" value="1"> Definately
	<br>
	<input type="radio" name="q3" value="0"> Negativo
	<br><br>
	<input type="submit" value="Submit">
</form>

 <?php include $sitepath."footer.htm"; ?> 


