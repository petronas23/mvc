<?php

namespace application\models;

use application\core\Model;

class Storage extends Model {

	private $table = 'offers';

	public function getStorages() {
		$result = $this->db->rows('SELECT * FROM storages');
		return $result;
	}

	public function addStorage($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function updateStorage($data, $cond)
	{
		return $this->db->update($this->table, $data, $cond);
	}

}