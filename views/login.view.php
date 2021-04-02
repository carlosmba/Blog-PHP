<?php require 'header.php'; ?>

<div class="contenedor">
	<div class="post">
		<h2 class="titulo">Iniciar Sesión</h2>
		<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="formulario">
			<input type="text" name=user placeholder="USUARIO">
			<input type="password" name="pass" placeholder="CONTRASEÑA">
			<p><?php if(isset($msg)) echo $msg; ?></p>
			<input type="submit" value="Iniciar Sesión">	
		</form>
	</div>
</div>


<?php require 'footer.php'; ?>