<!DOCTYPE html>
<html>
<head>
	<title>A Demonstration of PHP's Heredoc Feature</title>
</head>
<body>
	<?
/*
*	Delimits text using a chosen identifier (said identifier must begin with a letter).
*	The opening identifier is prefixed by "<<<".
*	The line containing the closing identifier must contain no other characters except ";".
*	The closing delimiter must be followed by a newline.
*	Functions analogously to "..." except that no quotes need to be delimited.
*/	
		$website = "http://www.romatermini.it";
		echo <<<EXCERPT
		<p>Rome's central train station, known as <a href = "$website">Roma Termini</a>, was built in 1867. Because it had fallen into severe disrepair in the late 20th century, the government knew that considerable resources were required to rehabilitate the station prior to the 50-year <i>Giubileo</i>.</p>
EXCERPT;
	?>
</body>
</html>