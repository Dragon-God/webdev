<!DOCTYPE html>
<html>
<head>
	<title style="font-variant: small-caps;">A program to convert numbers between different number bases.</title>
</head>
<body>
	<?	
		function toBase10($num, $base)
		#	Converts a number from base n to base 10.
		#	"$num": number to be converted to base 10. "$base": source base of the number.
		{
			$arr = str_split(strrev(strval($num)));
			#Converts the number to an array of its constituent digits in reverse order(string datatype). This is done to ease number base conversion.
			$i = 0;	//Counter.
			$sum = 0;
			foreach ($arr as $value) 
			{
				$sum += ((int) $value)*($base**$i);
				$i++;
			}
			return $sum;
		}

		function toBaseN($num, $base)
		#	Converts a number from base 10 to base n.
		#	"$num": number to be converted to base 10. "$base": source base of the number.
		{
			$arr = array();
			while(TRUE)
			{	
				if($num == 0)	#Exits loop at algorithm end.
					break;
				$arr[] = strval($num%$base);	#Stores the remainders as strings in an array (so later implosion) is possible.
				$num = ((int)$num/$base);	#Integer division.
			}
			$result = strrev(implode($arr));	#Returns the number as a string.
			return (int)$result;
		}

		function convert($num, $source=10, $dest=2)
		#	Converts numbers between any two number bases.
		#	"$num": the number to be converted; "$source": source number base; "$dest": destination number base.
		#	Invokes "toBaseN()" to convert the number to the destination number base if the source is base 10, else it first invokes "toBase10()" to first convert the number to base 10, then subsequently invokes "toBaseN()".
		{
			if($source == 10)
				return toBaseN($num, $dest);
			else
				return toBaseN(toBase10($num, $source), $dest);	
		}
	?>
	<?=toBase10(124,5)?>
	<?=toBaseN(9,2)?>
	<?=toBaseN(9,5)?>
	<?=convert(1001, 2, 5)?>
</body>
</html>