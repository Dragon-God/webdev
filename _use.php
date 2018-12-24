<!DOCTYPE html>
<html>
<head>
	<title>Use</title>
</head>
<body>

</body>
</html>

<?
	$a = 15;
	$b = 7;
	$example = function() 
	{
		$a += 100;
		echo $a . "<br>";
		$b += $a;
		echo $b."<br>";
	};
	$example();
	echo $a . "<br>";
	echo $b."<br>";

	$a = 15; 
	$b = 7;
	$example = function() use ($a, $b) 
	{
		$a += 100;
		echo $a . "<br>";
		$b += $a;
		echo $b."<br>";
	};
	$example();
	echo $a . "<br>";
	echo $b."<br>";

	$a = 15;
	$b = 7;
	$example = function() use (&$a, &$b) 
	{
		$a += 100;
		echo $a . "<br>";
		$b += $a;
		echo $b."<br>";
	};
	$example();
	echo $a . "<br>";
	echo $b."<br>";
?>