<!DOCTYPE html>
<html>
<head>
	<title>A Demonstration of Classes in PHP</title>
</head>
<body>
	<?
		class Test
		{
			private $_attribute;

			function setAttribute($value)
			{
				$this->_attribute = $value;
			}
			function getAttribute()
			{
				return $this->_attribute;
			}
		}

		$sample = new Test;
		$sample->setAttribute($var2);
	?>

	<?=$sample->getAttribute()?>
</body>
</html>