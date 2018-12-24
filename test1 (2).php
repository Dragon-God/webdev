<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$arr = array(2, 4, 6, 10, 16, 26, 42, 68);
		$sum = 0;
		for($i = 0; $i < 3; $i++)
			$sum += $arr[$arr[$i]];
		echo"$sum <br>";
		$name = "Alafin Oluwatobi Farouk";
		$name1 = "Dragon God";
		$name2 = substr_replace($name, $name1, 0, 6);
		echo"$name2 <br>";
		$a = array(TRUE, FALSE);
		$k = 0;
		foreach ($a as $i => $var1) 
		{
			foreach ($a as $j => $var2) 
			{
				$b[$k] = $var1 XOR $var2;
				echo "$var1 XOR $var2 = ", $b[$k], "<br>";
				$k += 1;
			}
		}
		foreach ($b as $h => $value) 
		{
			
		}
	?>
</body>
</html>