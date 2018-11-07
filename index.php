<?php
	session_start();
?>
<?php
	$conn =new mysqli("localhost","root","","reminder");
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Reminder</title>
</head>
<body>
	Hi <?php echo $_SESSION['name']; ?>.<br>
	<?php
		$uid = $_SESSION['uid'];
		$sql = "SELECT * FROM time where user='$uid'";
		$result = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($result);
		echo "You have currently ".$count." reminders";
	?><br>
	<a href="view.php"> View Reminder </a><br>
	<a href="add.php">+ Add</a><br>
	<a href="delete.php"> Delete </a><br>
	<a href="modify.php"> Modify </a><br>
	<a href="enable.php"> Enable a reminder</a><br>
	<a href="disable.php"> Disable a reminder</a><br>
</body>
</html>
