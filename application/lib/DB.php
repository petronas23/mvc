<?php

namespace application\lib;

use PDO;

class Db {

	protected $db;
	
	public function __construct() {
		$config = require 'application/config/db.php';
		$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);
	}

	public function query($sql, $params = []) {
		$stmt = $this->db->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				$stmt->bindValue(':'.$key, $val);
			}
		}
		$stmt->execute();
		return $stmt;
	}

	public function rows($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function insert($table, $data=[]) {
		$keys = '';
		$values = '';
		foreach($data as $key => $value){
			$keys .= $key . ',';
			$values .= ':'. $key . ',';
		}
	
		$query= 'INSERT INTO ' . $table .'('. trim($keys, ',') .') VALUES ('. trim($values,',') .')';
		$stmt= $this->db->prepare($query);
		$stmt->execute($data);

		/**Return las inserted */
		$stmt = $this->db->query("SELECT LAST_INSERT_ID()");
		$lastId = $stmt->fetchColumn();
		return $lastId;
	}
	 
	public function update($table, $data, $conds) {

		$data = [
			'name' => $name,
			'surname' => $surname,
			'sex' => $sex,
			'id' => $id,
		];

		$to_update = '';
		foreach($data as $key => $value){
			$to_update .= $key . '=:' . $key;
		}

		foreach($conds as $cond){
			
		}

		$sql = 'UPDATE '. $table .' SET'. $to_update . 'WHERE id=:id';
		$stmt= $dpo->prepare($sql);
		$stmt->execute($data);

		

	}

}