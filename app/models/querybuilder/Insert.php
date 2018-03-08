<?php

namespace app\models\querybuilder;

class Insert
{
	public static function sql($table, $attributtes)
	{
		$sql = "INSERT INTO {$table} (";
		$sql .= implode(',', array_keys($attributtes)).') values(';
		$sql .= ':' . implode(', :', array_keys($attributtes)).')';

		return $sql;
	}
	
}