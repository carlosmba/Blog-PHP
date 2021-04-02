<?php session_start(); ?>
<?php require 'config.php'; ?>
<?php require '../functions.php'; ?>

<?php
checkSession();


$connect = connection($dbConfig);

if(!$connect){
	header('Location: ' .RUTA.'error.php');
	die();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$title = filterData($_POST['title']);
	$extract = filterData($_POST['extract']);
	$text = $_POST['text'];
	$image = $_FILES['image']['tmp_name'];
	$destination = '../'. $blogConfig['folderImg'].$_FILES['image']['name'];

	if(checkImage($image)){
		move_uploaded_file($image, $destination);

		$statement = $connect->prepare('INSERT INTO articles(id,title,extract,text,thumb) VALUES(null,:title,:extract,:text,:thumb)');

		$statement->execute(array(':title' => $title, ':extract' => $extract, ':text' => $text, ':thumb' => $_FILES['image']['name']));

		header('Location: index.php');





	}else{
		$msg = 'La imagen es invalida o es muy pesada';
	}



}



?>
<?php require '../views/new.view.php'; ?>