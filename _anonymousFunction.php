<?
	function fact($n)
	{
		return ($n == 0)?1:($n * fact($n - 1));
	};
	$closure = "fact";
?>

<?=$closure(4)?>
<?=fact(3)?>