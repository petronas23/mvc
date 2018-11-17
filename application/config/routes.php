<?php

return [

	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

	'offer' => [
		'controller' => 'offer',
		'action' => 'showUserOffer',
	],
	
	'add-offer' => [
		'controller' => 'offer',
		'action' => 'addOffer'
	],

	'login' => [
		'controller' => 'account',
		'action' => 'login',
	],
	'storages' => [
		'controller' => 'storage',
		'action' => 'showStorageForm',
	],
	'add-storage' => [
		'controller' => 'storage',
		'action' => 'strategy',
	],
];