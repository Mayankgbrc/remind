<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Reminder</title>
</head>
<body>
	Hi <?php echo $_SESSION['name']; ?>.<br>
	<?php
		$conn =new mysqli("localhost","root","","reminder");
		$uid = $_SESSION['uid'];
		$sql = "SELECT * FROM time where user='$uid'";
		$result = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($result);
		echo "You have currently ".$count." reminders";
		$i = 1;

		while($row = mysqli_fetch_assoc($result)){
			?>
			<div style="border: 4px solid red;">
			<?php
			echo "Id No: ".$i."<br>";
			echo "Date : ".$row['date']."<br>";
			echo "Subject : ".$row['sub']."<br>";
			echo "Description : ".$row['description']."<br>";
			echo "E-mail : ".$row['email']."<br>";
			echo "Contact No : ".$row['contact']."<br>";
			echo "SMS No : ".$row['sms']."<br>";
			echo "Required for ".$row['req']." days.<br>";
			$i += 1;
			?>
				</div><br>
			<?php
		}
	?>

</body>
</html>
