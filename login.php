<?php require 'admin/config.php'; ?>
<?php require 'functions.php'; ?>

<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$user = filterData($_POST['user']);
	$pass = filterData($_POST['pass']);

	if(empty($user) or empty($pass)){
		$msg = 'Por favor llene todos los campos';
	}else{
		if($user == $blogAdmin['user'] && $pass == $blogAdmin['pass']){
			$_SESSION['admin'] = $blogAdmin['user'];
			header('Location: '. RUTA . 'admin');
		}else{
			$msg = 'Datos Incorrectos';
		}


	}
}





?>


<?php require 'views/login.view.php'; ?>