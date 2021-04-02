<?php require 'admin/config.php'; ?>
<?php require 'functions.php'; ?>

<?php
$connect = connection($dbConfig);
$id = (int)filterData($_GET['id']);
if(!$connect){
	header('Location: error.php');
	die();
}

if(empty($id)){
	header('Location: index.php');
}

$post = getArticle($connect, $id);

if(!$post){
	header('Location: error.php');
}


?>





<?php require 'views/single.view.php'; ?>