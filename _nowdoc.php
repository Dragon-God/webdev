<!DOCTYPE html>
<html>
<head>
	<title>A Demonstration of PHP's Nowdoc Feature</title>
</head>
<body>
	<?
/*
*	Functions similarly to Heredoc, with the difference that the text delimited by the Nowdoc isn't parsed.
*	This feature allows the Nowdoc to be used to display code.	
*/
	echo <<<'CODE'
	<p>
		function displayArray($arr)<br>
		{<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print "&lt;table&gt; &lt;thead&gt; &lt;tr&gt; &lt;th&gt;Key&lt;/th&gt; &lt;th&gt;Value&lt;/th&gt; &lt;/tr&gt; &lt;/thead&gt;";<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print "&lt;tbody&gt;";<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach ($arr as $key =&gt; $value) <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print "&lt;tr&gt; &lt;td&gt;{$key}&lt;/td&gt;  &lt;td&gt;{$value}&lt;/td&gt; &lt;/tr&gt;";<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print "&lt;/tbody&gt; &lt;/table&gt;";<br>
		}<br>
	</p>
CODE;
	?>
</body>
</html>