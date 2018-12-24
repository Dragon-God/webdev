<!DOCTYPE html>
<html>
<head>
	<title>A Demonstration of Superglobal Variables in PHP</title>
</head>
<body>
	<?
		foreach ($_SERVER as $var => $value) 
		{
   			echo "$var => $value <br />";
		}
	?>
</body>
</html>