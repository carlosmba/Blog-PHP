<?php

function connection($dataBase){
	try{
		$connect = new PDO('mysql:host=localhost;dbname='. $dataBase['dbname'], $dataBase['user'], $dataBase['pass']);
		return $connect;
	}catch(PDOExeption $e){
		echo 'Error: '. $e->getmessage();
		return false;
	}
}

function filterData($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	$datos = filter_var($datos, FILTER_SANITIZE_STRING);
	return $datos;
}

function currentPag(){
	$current = isset($_GET['p']) ? (int)$_GET['p'] : 1;
	return $current;
}


function getPost($postPag, $connect){
	$start = (currentPag() > 1) ? currentPag() * $postPag - $postPag : 0;

	$statement = $connect->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articles LIMIT $start, $postPag");

	$statement->execute();
	
	return $statement->fetchAll();

}

function getPages($postPag,$connect){
	$statement = $connect->prepare('SELECT FOUND_ROWS()');
	$statement->execute();
	$statement = $statement->fetch()['FOUND_ROWS()'];

	$total = ceil($statement / $postPag);
	return $total;
}


function getArticle($connect, $id){

	$statement = $connect->query("SELECT * FROM articles WHERE id = $id LIMIT 1");
	$statement = $statement->fetch();
	return ($statement) ? $statement : false;
}

function blogDate($fecha){
	$timestamp = strtotime($fecha);
	$months = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
	$day = date('d', $timestamp);
	$month = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);
	
	$date = $day . ' de '. $months[$month] . ' del '. $year;
	return $date;
	
}

function checkSession(){
	if(!isset($_SESSION['admin'])){
		header('Location: '. RUTA);
	}
}

function checkImage($image){
	$imageInfo = getimagesize($image);
	$imageType = $imageInfo[2];
	return (bool)(in_array($imageType, array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)));

}

?>