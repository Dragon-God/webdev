<!DOCTYPE html>
<html>
<head>
	<title>Contact Display Page</title>
</head>
<body>
	<?php
		$firstName= $_POST['firstName'];
		$lastName= $_POST['lastName'];
    	$email= $_POST['email'];
    	$phone= $_POST['phone'];
    	$message= $_POST['message'];
	?>
	<table>
		<tr> <td>First Name:</td> <td><?php echo "$firstName";?></td> </tr>
		<tr> <td>Last Name:</td> <td><?php echo "$lastName";?></td> </tr>
		<tr> <td>Email:</td> <td><?php echo "$email";?></td> </tr>
		<tr> <td>Phone Number:</td> <td><?php echo "$phone";?></td> </tr>
		<tr> <td>Message:</td> <td><?php echo "$message";?></td> </tr>
	</table>
</body>
</html>