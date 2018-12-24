<!DOCTYPE html>
<html>
<head>
	<title>Factorial function in PHP</title>
	<meta http-equiv="refresh" content="3">
</head>
<body>
<?php
	function factorial($n)
	{
		return ($n == 0)?1:($n*factorial($n-1));
	}
	$i = 0;
	while ($i <= 20) 
	{
		print"<br/>".$i."! is: ".factorial($i).".<br/>";
		$i += 1;
	}
?>
</body>
</html>