<!DOCTYPE html>
<html>
<head>
	<title>PHP Test File</title>
</head>
<body>
	<?php 
		echo("<h1>PHP short tagging</h1>"); 
		$var1 = print(strval(5**3)."<br>");
		$var2 = "Alafin Oluwatobi";
		echo "My name is ".$var2.".<br>";
		echo strval($var1)."<br>";
		//unset($var2);
		echo "My name is ".$var2.".<br>";
		$str =  "Hello World."
	?>

	<?=$str."<br>"?>
	<!--
		The above is an example of PHP short circuit syntax.
	-->

	<?php
    	$title = "<h1>Outputting content</h1>";
    	$body = "<p>The content of the paragraph...</p>";
		echo $title , $body ;
		$str1 = "Good morning."
	?>

	<?=$str1, $var2?>

	<?="<br>My name is $var2. <br>"?>
	<br><br>
	<?="{$title} {$body}<p>Additional content</p>";?>

	<?="<br>$title$body\$var<br>"?>

	<?printf("Bar inventory: %d bottles of tonic water. <br>", 100456.99);?>

	<?
		$arr = str_split($var2);
		$i = 0;
		foreach ($arr as $key => $value) 
		{
			print("Array[{$i}] = $value<br>");
			$i++;
		}
	?>
</body>
</html>