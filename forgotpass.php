<html>
<body>
<center>
	<br><br>
	<form action="forgotpass.php" method="post">
		Email id: <input type="text" name="id" placeholder="Enter email id">
		<input type="submit" name="idsubmit" value="submit">
	</form>

	<?php 
		if(isset($_POST['idsubmit']))
			echo "We sent OTP into your mobile number";
		else
			echo "Something went wrong";

		$id = $_POST[id];
		$con=mysql_connect("localhost","root");
		$db=mysql_selectdb("project");
		if($db)
			echo "DATABASE SELECTED SUCCESSFULLY";
		else
			echo "DATABASE NOT SELECTED";
		$qry="select * from customer where cid = $id";
		$cmd=mysql_query($qry,$con);
		if($cmd)
			echo "QUERY RUN SUCCESSFULLY";
		else
			echo "QUERY NOT RUN";
	
		if(isset($_POST['idsubmit']))
		{
			$otp = rand(1111,9999);
			$no = $_POST['cno'];
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
  echo $response;
  $data = json_decode($response);
  $sts = $data->return;
  if($sts == false){
	$err = "OTP NOT SEND";
  }
  else
	$ses = "YOUR OTP IS SEND";
}
			}
			else
				$err = "Invalid Mobile Number";
		}
		
	?>

	<form action="newpass.php" method="post">
		Verify OTP: <input type="text" name="verify" value="Enter send OTP">
		<input type="submit" name="otpsubmit" value="submit">
	</form>
</center>
</body>
</html>