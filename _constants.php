<!DOCTYPE html>
<html>
<head>
	<title>A Demonstration of Constants in PHP</title>
</head>
<body>
	<?
		const EX = 2.71828;
		define('PIX', 3.141592);
		
	?>
	<?= (string)EX."<br>".PIX."<br>"?>


	<?
		if (EX == 2.71828)
			print "TRUE";
	?>
</body>
</html>