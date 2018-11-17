<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function base_url($url = ''){
	$doc_root = explode('/', $_SERVER['DOCUMENT_ROOT']);
	return $base_url ='http://' . end($doc_root) . $url;
}

function dd($str) {
	echo '<pre>';
	var_dump($str);
	echo '</pre>';
	exit;
}

function p($str) {
	echo '<pre>';
	print_r($str);
	echo '</pre>';
}

function pp($str) {
	echo '<pre>';
	print_r($str);
	echo '</pre>';
	die;
}
