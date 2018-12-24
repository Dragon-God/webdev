<!DOCTYPE html>
<html>
<head>
	<title>PHP shell</title>
</head>
<body>
	<?
		require("../Resources/Functions/displayArray.php");
	?>
	<?
		$var2 = "Alafin Oluwatobi";
		$object = (object)$var2;
	?>
	
<?php
// Static variables
/*function foo()
{
    static $bar = <<<LABEL
	Nothing in here...
LABEL;
	return $bar;
}

// Class properties/constants
class foo
{
    const BAR = <<<FOOBAR
Constant example
FOOBAR;

    public $baz = <<<FOOBAR
Property example
FOOBAR;
}*/
?>

<?displayArray($_SERVER)?>
</body>
</html>