<!DOCTYPE html>
<html>
<head>
	<title>A Demonstration of Variable Assignment by Reference in PHP</title>
</head>
<body>
	<?
		$a = 25;
		$b = 2;
		$c =  &$a;	//$a is assigned to $c by reference. $c becomes a pointer to $a.
		$a **= $b;	//The value of $a is updated to 625.
		$c **= 0.5;	//If the assignment by reference is successful, $c should be 25, else if the assignment to $c was by value, $c should be 5.
		print($c)
	?>
</body>
</html>