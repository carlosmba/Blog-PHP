<?php
require 'admin/config.php';
require 'functions.php';


$connect = connection($dbConfig);

if(!$connect){
	header('Location: error.php');
	die();
}

if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['search'])){
	$search = filterData($_GET['search']);

	$statement = $connect->prepare('SELECT * FROM articles WHERE title LIKE :search or extract LIKE :search');
	$statement->execute(array(':search' => "%$search%"));
	$array = $statement->fetchAll();

	if(empty($array)){
		$title = 'No se encontraron articulos con el resultado: '. $search;
	}else{
		$title = 'Resultados de la busqueda: '. $search;
	}

}else{
	header('Location:'. RUTA .'index.php');
}



require 'views/search.view.php';
?>