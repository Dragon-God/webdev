<?php
	$numbers[0] = "one"; 
	$numbers[1] = "two"; 
	$numbers[2] = "three"; 
	$numbers[3] = "four"; 
	$numbers[4] = "five";  
	foreach( $numbers as $value ) 
	{ 
	  echo "Value is $value <br />"; 
	} 
	array_pop($numbers);
	echo"<br><br>";
	foreach( $numbers as $value ) 
	{ 
	  echo "Value is $value <br />"; 
	} 
	echo"<br><br>";
	$n = count($numbers);
	echo"$n <br>";
	$n1 = sizeof($numbers);
	echo"$n1 <br>";
	echo"<br><br>";
	print(join(" ", array_rand($numbers)));
	echo "<br/><br/><hr/><br/><br/>";
#First method to associate create array. 	
	$salaries = array(  
     "mohammad" => 2000,  
     "qadir" => 1000,  
     "zara" => 500 
    ); 
	 
    echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />"; 
	echo "Salary of qadir is ".  $salaries['qadir']. "<br />"; 
	echo "Salary of zara is ".  $salaries['zara']. "<br />"; 
#Second method to create an associative array.

	$salaries['mohammad'] = "high"; 
	$salaries['qadir'] = "medium"; 
	$salaries['zara1'] = "low"; 

	echo "<br/><br/><hr/><br/><br/>";	

	echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />"; 
	echo "Salary of qadir is ".  $salaries['qadir']. "<br />"; 
	echo "Salary of zara is ".  $salaries['zara']. "<br />";
	$salaries['fuck you'] = "FUCK YOU!!!\n\n\n\n\n\n";
	echo $salaries['fuck you'];
?>