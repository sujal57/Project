<?php 
	Session_start();

	if(isset($_SESSION['cname']))
	{
		echo "Welcome ".$_SESSION['cname'];
	}
	else
	{
		echo "Something went wrong";
	}
?>

<html>
<body>
	<a href="Logout.php">Logout</a>
</body>
</html>
