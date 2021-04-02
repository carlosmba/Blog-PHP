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
	$id = $_POST['id'];
	$title = filterData($_POST['title']);
	$extract = filterData($_POST['extract']);
	$text = $_POST['text'];
	$image = $_FILES['image']['name'];
	$imageLoad = $_POST['imageload'];
	$destination = '../'. $blogConfig['folderImg'].$_FILES['image']['name'];

	if(empty($image)){
		$image = $imageLoad; 
	}else{
		move_uploaded_file($_FILES['image']['tmp_name'], $destination);
	}


		$statement = $connect->prepare('UPDATE articles SET title=:title, extract=:extract, text=:text, thumb=:thumb WHERE id=:id');

		$statement->execute(array(':title' => $title, ':extract' => $extract, ':text' => $text, ':thumb' => $image, ':id' => $id));

		header('Location: index.php');
}else{

	$id = (int)filterData($_GET['id']);

	if(empty($id)){
		header('Location: index.php');
	}
	$post = getArticle($connect,$id);

	if(!$post){
		header('Location: index.php');
	}



}



?>
<?php require '../views/edit.view.php'; ?>