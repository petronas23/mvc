<?php

namespace application\models;

use application\core\Model;

class Offer extends Model {

	private $table = 'offers';

	public function getOffer() {
		$result = $this->db->rows('SELECT * FROM offers');
		return $result;
	}

	public function addOffer($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function update_offer($data, $cond)
	{
		return $this->db->update($this->table, $data, $cond);
	}

}