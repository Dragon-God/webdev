<html> 
<body> 
<?php 
	$d=date("D"); 
	switch($d)
	{
		case "Mon":
			echo"Happy Monday. <br/>";
			break;
		case "Tue":
			echo"Happy Tuesday. <br/>";
			break;
		case "Wed":
			echo"Happy Wednesday. <br/>";
			break;
		case "Thu":
			echo"Happy Thursday. <br/>";
			break;
		case "Fri":
			echo"Happy Friday. <br/>";
			break;
		case "Sat":
			echo"Happy Saturday.  <br/>";
			break;
		case "Sun":
			echo"Happy Sunday. <br/>";
			break;
		default:					
			echo"What an interesting day today is...<br/>Do have a blessed day.";
			
	}

?>  
    </body>  
</html> 