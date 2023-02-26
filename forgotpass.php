<?php
$err=" ";
$ses=" ";

if(isset($_POST['submit']))
{
	$con=mysql_connect("localhost","root");
	$db=mysql_selectdb("project");

	$id=$_POST['id'];
	$query="select cno from customer where cid='$id'";
	$cmd=mysql_query($query,$con);
	while($row=mysql_fetch_array($cmd))
	{
    		$no=$row[cno];
?>
<?php 
	echo $otp = rand(1111,9999);

    if(preg_match("/^\d+\.?\d*$/",$no) && strlen($no)==10){
		$fields = array(
			"variables_values" => "$otp",
			"route" => "otp",
			"numbers" => "$no",
		);
		
		$curl = curl_init();
		
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_SSL_VERIFYHOST => 0,
		  CURLOPT_SSL_VERIFYPEER => 0,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => json_encode($fields),
		  CURLOPT_HTTPHEADER => array(
			"authorization: 4Um7MHJiPoxvZwr1gXqyjVC8fpO30NGQDBWAdaER2slkcYz5bhr42iIERj7w6z5keFSXDCMfVuWlBo8Q",
			"accept: */*",
			"cache-control: no-cache",
			"content-type: application/json"
		  ),
		));
		
		$response = curl_exec($curl);
		$err = curl_error($curl);
		
		curl_close($curl);
		
		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  $data = json_decode($response);
		  $sts = $data->return;
		  if($sts==false){
			  $err = "OTP not send";
		  }
		  else{
			  $ses = "Your OTP is send";
		  }
		}
	}
	else{		
		$err = "Invalid Mobile Number";
	}
?>
<?php } }?>
	

<html>
<body>
<center>
	<br><br>
	<form action="forgotpass.php" method="post">
		Name: <input type="email" name="id" placeholder="Enter your email id">
		<input type="submit" name="submit" value="submit">
	</form>
	<p class="text-center text-danger"><?php echo $err; ?> </p>
	<p class="text-center text-success"><?php echo $ses; ?> </p>
</center>
</body>
</html>
