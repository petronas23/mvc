<?php

namespace application\controllers;
use application\core\Controller;


use application\controllers\OfferController;

class OfferController extends Controller {

	public function showUserOffer() {
		
		$id= '2';
		$result = $this->model->getOffer();
		//pp($result);
	
		$data['offer'] = $result;


		$this->view->load('offer','offers/userOffers', $data);
	}

	public function addOffer()
	{
		$result = $this->model->addOffer($_POST);
		pp($result);
	}

	public function add

}