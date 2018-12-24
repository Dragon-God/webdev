<!DOCTYPE html>
<html>
<head>
	<title>Working With Global Variables in PHP.</title>
	<!--<meta http-equiv="refresh" content="3">-->
</head>
<body>
	<table border="7" cellpadding="5" cellspacing="5" width="100%" style="font-size: 20px">
	<thead style="font-style: Times New Roman; font-size: 36px; color: #000080; background-color: #00ff00">
		<tr><th colspan="2"><b><i>The Fibonacci Sequence</i></b></th></tr>
	</thead>
	<tfoot style="font-style: Times New Roman; font-size: 24px; color: #000080">
		<tr><th colspan="2">Courtesy of Alafin Oluwatobi</th></tr>
	</tfoot>
	<tbody>
<?php
	define("SEED1", 0);
	define("SEED2", 1); 

	print "<tr><td align=
	'center'>0</td><td>".SEED1."</td></tr><tr><td align=
	'center'>1</td><td>".SEED2."</td></tr>";
	$count = 2;
	function fibonacci($num)
	{
		GLOBAL $count;
		STATIC $var1 = SEED1; 
		STATIC $var2 = SEED2;		#The initial seeding. This code will only execute the first time around.
/*		
	$var1 will store the odd numbers of the Fibonacci sequence.
	$var2 will store the even numbers of the Fibonacci sequence.
	$var1 will store the ith element in the form {i: i = 1+2n}.
	$var2 will store the jth element in the form {j: j = 2i}.
	$var1 moves from F_i to F_i+2 by the formula F_i+2 = F_i+F_i+1.
	$var2 moves from F_j to F_j+2 by the formula F_j+2 = F_j + F_j+1.
	$num is the number of times the fibonacci sequence would run.
*/		
		while($num > 0)
		{
			$var1 += $var2;
			$var2 += $var1;
			print "<tr><td align='center'>$count</td><td>".$var1."</td></tr>";
			$count++;
			print "<tr><td align='center'>$count</td><td>".$var2."</td></tr>";
			$count++;
			$num -= 2;
		}
	}
	fibonacci(10) ;
	fibonacci(10) ;
?>
	</tbody>
	</table>
</body>
</html>