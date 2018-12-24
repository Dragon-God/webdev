<!DOCTYPE html>
<html>
<head>
	<title>Displays an Array as a Table</title>
</head>
<body>
	<?
		function displayArray($arr)
		{
			print "<table> <thead> <tr> <th>Key</th> <th>Value</th> </tr> </thead>";
			print "<tbody>";
			foreach ($arr as $key => $value) 
				print "<tr> <td>{$key}</td>  <td>{$value}</td> </tr>";
			print "</tbody> </table>";
		}
	?>
	<?displayArray($GLOBALS);?>

</body>
</html>