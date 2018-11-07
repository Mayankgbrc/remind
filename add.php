<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add a Reminder</title>
</head>
<body>
	<form action="add.do.php" method="post">
		Select a date : <input type="date" name="date" /><br>
		Subject :	<input type="text" name="sub" /><br>
		Description :	<input type="text" name="description" /><br>
		E-mail :	<input type="text" name="email" /><br>
		Contact No. :	<input type="text" name="c_no" /><br>
		SMS No :	<input type="text" name="sms_no" /><br>
		Required for next :
		<input type="radio" name="req" value="7"> 7 Days
		<input type="radio" name="req" value="3"> 3 Days
	  	<input type="radio" name="req" value="1"> Once<br>
	  	<button type="submit"> Submit </button> 
	</form>

</body>
</html>