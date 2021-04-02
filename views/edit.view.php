<?php require '../views/header.php'; ?>

<div class="contenedor">
			<div class="post">
				<article>
					<h2 class="titulo">Editar Articulo</h2>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" class="formulario">
						<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
						<input type="text" placeholder="Titulo del Articulo" name="title" value="<?php echo $post['title']; ?>">
						<input type="text" placeholder="Extracto del Articulo" name="extract" value="<?php echo $post['extract']; ?>">
						<textarea name="text" placeholder="Texto del Articulo"><?php echo $post['text']; ?></textarea>
						<input type="file" name="image">
						<input type="hidden" name="imageload" value="<?php echo $post['thumb']; ?>">

						<input type="submit" value="Actualizar Articulo">
					</form>
					
				</article>
			</div>

<?php require '../views/footer.php'; ?>