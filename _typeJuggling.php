<!DOCTYPE html>
<html>
<head>
	<title>A Demonstration of Type Juggling in PHP</title>
</head>
<body>
	<?
		$a = 5;
		$b = "3";
		$c = $a**$b;
		echo (string)$c."<br>";

		$d = "12 days of christmas";
		echo (string)($d*$d)."<br>";

		$f = "1.44E2 kwkwnkwn";
		echo (string)($f*$a)."<br>";
	?>
</body>
</html>