<?
/*
*	Pseudocode for retrieving the columns of a table.
*
*	Input: (array $table, array $attributes)
*		$table: An array consisting of the records of the table (themselves represented as arrays). The records are associated with their value for the primary key in the array. Within each record, all the fields under a given attribute are associated with the same key (name of said attribute).
*		$attributes: An array consisting of the attributes of the table (as strings).
*
*	Output: array $columns
*		$columns: An array consisting of all the columns of the table (represented as arrays). The columns are associated with their attribute in the array. Within each column, all the fields in a given record are associated with the same key (value of the primary key for that record).
*/

	function retrieveColumns(array $table, array $attributes)
	{
		$columns;
		foreach ($attributes as $attribute) 
		{
			$arr;
			foreach ($table as $primaryKey => $rows) 
				$arr[$primaryKey] = $rows[$attribute];	//Map the row id to the attribute in question. 
			$columns[$attribute] = $arr;	//Map the array containing the fields under an attribute to that attribute.
			unset($arr);
		}
	}
?>