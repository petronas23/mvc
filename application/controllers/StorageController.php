<?php

namespace application\controllers;
use application\core\Controller;


use application\controllers\OfferController;

class StorageController extends Controller {



	private function insertFile($data)
	{
		echo 2;
	}

	public function insertDatabase($data)
	{
		echo 1;
	}

	public function showStorageForm() {
		$data['Storage'] = 'Storage';


		$this->view->load('storage','storage/storagesList', $data);
	}

	public function strategy()
	{
		$data = [
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'storage' => $_POST['storage']
		];
		//if($_POST['strategy'] == 'database')
			insertDatabase();

		die;
		//pp($_POST['strategy']);
		$this->$_POST['strategy']();
		$result = $this->model->addOffer($_POST);
		pp($result);
	}
	
	

}