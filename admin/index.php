<?php
session_start();
require 'config.php';
require '../functions.php';

checkSession();

$connect = connection($dbConfig);

if(!$connect){
	header('Location: '. RUTA . 'error.php');
}

$post = getPost($blogConfig['postPag'],$connect);




require '../views/admin_index.view.php';
?>