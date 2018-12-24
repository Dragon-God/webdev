<!DOCTYPE html>
<html>
<head>
	<title>PHP Shell</title>
</head>
<body>
</body>
</html>

<?
	$states = array("Ohio", "New York", "California", "Texas");
	$states['f'] = "Washington";
	array_shift($states);
?>

<?=var_dump(array_values($states))?>