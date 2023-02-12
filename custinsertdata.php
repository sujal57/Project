<?php

	$name=$_POST[cname];
	$num=$_POST[cno];
	$birth=$_POST[cbdate];
	$city=$_POST[c_city];
	$id=$_POST[cid];
	$pass=$_POST[pwd];
	$add=$_POST[cadd];

	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"project");
	$query="insert into customer values('$id',$pass,'$name',$num,$birth,'$add','$city');";
	$cmd=mysqli_query($con,$query);
	if($cmd)
		echo "Record inserted successfully";
	else
		echo "Not inserted";
?>