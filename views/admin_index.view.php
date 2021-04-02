<?php require '../views/header.php'; ?>

<div class="contenedor">
	<h2>Panel de Control</h2>
	<a href="new.php" class="btn">Nuevo Post</a>
	<a href="close.php" class="btn">Cerrar Sesión</a>
	<?php foreach($post as $article) : ?>
			<div class="post">
				<article>
					<h2 class="titulo"><?php echo $article['id'] . '-'. $article['title']; ?></a></h2>
					<a href="../single.php?id=<?php echo $article['id']; ?>">Ver</a>
					<a href="edit.php?id=<?php echo $article['id']; ?>">Editar</a>
					<a href="delete.php?id=<?php echo $article['id']; ?>">Borrar</a>
				</article>
			</div>
	<?php endforeach; ?>
	<?php require '../pagination.php'; ?>
	</div>
<?php require '../views/footer.php'; ?>