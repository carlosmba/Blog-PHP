<?php require 'config.php'; ?>
<?php require '../functions.php'; ?>

<?php

$id = (int)filterData($_GET['id']);

if(empty($id)){
	header('Location: index.php');
	die();
}

$connect = connection($dbConfig);

if(!$connect){
	header('Location: '. RUTA .'error.php');
	die();
}

$pdo = $connect->prepare('DELETE FROM articles WHERE id=:id');

$pdo->execute(array(':id' => $id));

header('Location: '. RUTA. 'admin');




?>

