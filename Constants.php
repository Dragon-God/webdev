<?php
// Valid constant names 
define("ONE",     "first thing"); 
define("TWO2",    "second thing"); 
define("THREE_3", "third thing");
// Invalid constant names 
define("__THREE__", "third value");

echo "<br/>".__THREE__."<br/>"; 
?>