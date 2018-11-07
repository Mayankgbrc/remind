<?php
	session_start();
?>
<?php
	$conn =new mysqli("localhost","root","","reminder");
	$user = $_SESSION['uid'];
	$date = $_POST['date'];
	$sub = $_POST['sub'];
	$description = $_POST['description'];
	$email = $_POST['email'];
	$c_no = $_POST['c_no'];
	$sms_no = $_POST['sms_no'];
	$req = $_POST['req'];
	$sql = "INSERT INTO time(user, date, sub, description, email, contact, sms, req) VALUES('$user','$date','$sub','$description','$email','$c_no','$sms_no','$req')";
	if($conn->query($sql)===TRUE){
		echo "Entry successful";
	}
	else{
		echo "Error";
	}
?>
<a href="index.php" > Home </a>