<?php 
if(isset($_POST['submit'])) 
{
	$username = $_POST['username'];
	echo "Your name is: ".$username;
}
?>
<form action="#" method="POST">
	<input type="text" name="username">

	<input type="submit" name="submit" value="Submit">
</form>