<?
	function fact(integer $n): integer
	{
		return ($n != 0)?($n * fact($n-1)):1;
	}

	print (string)fact(4)."<br>";
/*	print (string)fact(5.0)."<br>";
	print (string)fact(5.0983)."<br>";
	print (string)fact("5")."<br>";
	print (string)fact("5xdfg")."<br>";*/
/*	print (string)fact(\x5)."<br>";
	print (string)fact(\05)."<br>";
	print (string)fact(\b101)."<br>";*/
?>