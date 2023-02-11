<?php 
	Session_start();

	if(isset($_SESSION['aname']))
	{
		echo "Welcome admin"
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