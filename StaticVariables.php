<!DOCTYPE html>
<html>
<head>
	<title>Working With Static Variables in PHP.</title>
	<meta http-equiv="refresh" content="3">
</head>
<body>
<?php

	function keep_track() 
	{ 
	   STATIC $count = 0; 
	   $count++; 
	   print $count." "; 
	}
	keep_track();
	keep_track();
	keep_track();
?>
</body>
</html>