<?php require '../views/header.php'; ?>

<div class="contenedor">
			<div class="post">
				<article>
					<h2 class="titulo">Nuevo Articulo</h2>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" class="formulario">
						<input type="text" placeholder="Titulo del Articulo" name="title">
						<input type="text" placeholder="Extracto del Articulo" name="extract">
						<textarea name="text" placeholder="Texto del Articulo"></textarea>
						<input type="file" name="image">

						<input type="submit" value="Publicar Articulo">
					</form>
					
				</article>
			</div>

<?php require '../views/footer.php'; ?>