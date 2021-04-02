<?php
require 'admin/config.php';
require 'functions.php';

$connect = connection($dbConfig);

if(!$connect){
	header('Location: error.php');
	die('Error en el servidor');
}

$post = getPost($blogConfig['postPag'], $connect);

if(!$post){
	header('Location: error.php');
}

require 'views/index.view.php';
?>