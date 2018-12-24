<!DOCTYPE html>
<html>
<head>
	<title>Working With Global Variables in PHP.</title>
	<meta http-equiv="refresh" content="3">
</head>
<body>
<?php
	$somevar = 15; 
	function addit() 
	{ 
		GLOBAL $somevar; 
		$somevar++; 
		print "<br/>Somevar is $somevar. <br/>"; 
	} 
	addit();
	print"<br/>Somevar is $somevar. <br/>" ;
?>
</body>
</html>