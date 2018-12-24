<!DOCTYPE html>
<html>
<head>
	<title>Display Names in Alphabetical Order</title>
</head>
<body>
	<p style="font-size: 20px; color: #ffffff">
		<ul>
			<li><a href="index.html">Menu</a></li>
		</ul>
	</p>
	<?php
		$names = array('Adam', 'Kim', 'Frederick', 'Lautner', 'Benjamin', 'Michael', 'Gideon', 'Near', 'Charlotte', 'Ophis' , 'Helen', 'Daniel', 'Irene', 'Emilie', 'Joseph');
		echo "This is the array before sorting: <br>";
		foreach($names as $value) 
		{
			
			echo "$value <br/>";
		}
		echo "<hr>This is the array after sorting: <br>";
		$sorted = asort($names);
		foreach($names as $key => $value) 
		{
			
			echo "$value <br/>";
		}
	?>
</body>
</html>