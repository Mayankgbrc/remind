<?php
	session_start();
?>
<h2>
<?php
	$conn =new mysqli("localhost","root","","reminder");
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$sql = "SELECT * FROM user where email='$email' and pass ='$pass'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	$count = mysqli_num_rows($result);
	if ($count == 1){
		echo "Your id number is ".$row['uid'];
		echo "<br>Your name is ".$row['name'];
		$_SESSION['uid'] = $row['uid'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['email'] = $email;
		$_SESSION['dob'] = $row['dob'];
	} 
	else{
		echo "Wrong id or password";
	}
?>
</h2>