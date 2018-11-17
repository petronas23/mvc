<?php

namespace application\controllers;
use application\core\Controller;


class OfferController extends Controller {

	public function showUserOffer() {
		$id= '2';
		$result = $this->model->getOffer();
		
		$this->view->load('offer','offers/userOffers', $data);
	}

}