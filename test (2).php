<!DOCTYPE html>
<html>
<head>
	<title>Shell for Functions folder</title>
</head>
<body>
	<p>
		This is come crappy html.	
	</p>
</body>
</html>

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