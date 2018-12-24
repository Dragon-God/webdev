<!DOCTYPE html>
<html>
<head>
	<title>A Demonstration of the Null Coalescing Operator in PHP</title>
</head>
<body>
	<?
/*
*	The null coalescing operator "??" allows the assignment of default values.
*	Syntax: a ?? b.
*	Returns a if a exists and a is not null, else returns b.
*	It is syntactic sugar for (a != null) ?: a:b.
*/
		$var = $a ?? 5;
		$a = $var**3;
		print (string)$var."<br>";
		$var = $a ?? 5;
		print (string)$var."<br>";
	?>
</body>
</html>