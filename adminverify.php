<?php 
	Session_start();

	$uname = $_POST['aname'];
	$pswd = $_POST['pwd'];

	if($aname=="dhruv" and $pswd=="123")
	{
		$_SESSION['aname']=$uname;
		header("location:welcome.php?un=".$_SESSION['aname']);
	}
	else
	{
		echo "Something went wrong";
	}
?>