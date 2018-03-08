<?php 

namespace app\traits;

use app\models\querybuilder\Insert;

trait PersistDb
{
	public function insert($attributtes)
	{
		$sql = (new Insert)->sql($this->table, $attributtes);

		$insert = $this->connection->prepare($sql);

		return $insert->execute($attributtes);
	}

	public function update()
	{
		
	}
	
	
}