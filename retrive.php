<?php 
session_start();
$id=$_POST[cname];
$pass=$_POST[pwd];

$con=mysql_connect("localhost","root");
$db=mysql_select_db("project");
$query="select c_pwd,cname from customer where cid='$id'";
$cmd=mysql_query($query,$con);
$num=mysql_num_rows($cmd);
if($num==0){
    echo "Please enter correct id";
}
while($row=mysql_fetch_array($cmd)){
    $pwd=$row[c_pwd];
    $name=$row[cname];
?>
<?php 
if($pass==$pwd){
    $_SESSION['cname']=$name;
    header("location:welcome.php?na=".$_SESSION['cname']);
}
else{
    echo "Please enter correct password";
}
?>
<?php } ?>