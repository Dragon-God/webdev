<?php
	$array = array(1, 2, 4, 8, 16, 32, 64, 128);
	echo "2<sup>8</sup> is: ".(2**8)."<br/><br/>";
	$i = 0;

/*
foreach ($variable as $key => $value) {
	# code...
}
	*$variable is the name of the array.
	*$key denotes the key(hash) for relational arrays(hashes).
	*$value denotes the value that key is mapped to, or value stored at that index of the array.
*/
	foreach ($array as $x) 
	{
		echo"2<sup>$i</sup> is: ".$x."<br/>";
		$i++;
	}
?>