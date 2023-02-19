<?php
		$name=$_POST['cname'];
		$num=$_POST['cno'];
		$birth=$_POST['cbdate'];
		$city=$_POST['c_city'];
		$id=$_POST['cid'];
		$pass=$_POST['pwd'];
		$add=$_POST['cadd'];

		$con=mysql_connect("localhost","root");
		$db=mysql_selectdb("project");
		if($db)
			echo "Database selected successfully";
		else
			echo "Database not selected";

		$qry="insert into customer values ('$id','$pass','$name','$num','$birth','$add','$city');";
		//$qry="insert into customer values ('dhruveshpatel2005@gmail.com','321','dhruv',8746316145,'02-12-2023','dsad','anand');";
	   	$cmd=mysql_query($qry,$con);
		if($cmd)
		{
			echo "Record inserted successfully";		
		}
		else
		{
			echo "Record not inserted";
		}
	
?>
