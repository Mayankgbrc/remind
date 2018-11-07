<?php
	$conn=new mysqli("localhost","root","","reminder");
	$name = $_POST['name'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$pass = $_POST['pass'];
	$sql ="INSERT INTO user(name,email,dob,pass) VALUES('$name','$email','$dob','$pass')";
	if($conn->query($sql)===TRUE){
		echo "Registration Successful";
	}
	else{
		echo "Error";
	}
?>