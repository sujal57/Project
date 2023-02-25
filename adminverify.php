<?php 
Session_start();

$uname = $_POST[aname];
$pass = $_POST[pwd];

$con=mysql_connect("localhost","root");
$db=mysql_select_db("project");
$query="select * from admin";
$cmd=mysql_query($query,$con);
while($row=mysql_fetch_array($cmd)){
    $aid=$row[aid];
    $pwd=$row[ad_pwd];
?>

<?php 
if($uname==$aid){
	if($pass==$pwd){
		$_SESSION['name']=$uname;
		header("location:welcome.php?un=".$_SESSION['name']);
	}
	else{	
		echo "Please enter correct password";
	}
}
else{
    echo "Please enter correct email id";
}
?>

<?php } ?>
