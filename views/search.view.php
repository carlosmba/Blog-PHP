<?php require 'header.php';  ?>

<div class="contenedor">
	<h2><?php if(isset($title)) echo $title; ?></h2>
	<?php foreach($array as $article) : ?>
			<div class="post">
				<article>
					<h2 class="titulo"><a href="single.php?id=<?php echo $article['id'] ?>"><?php echo $article['title']; ?></a></h2>
					<p class="fecha"><?php echo blogDate($article['date']); ?></p>
					<div class="thumb">
						<a href="single.php?id=<?php echo $article['id'] ?>">
							<img src="<?php echo RUTA; ?>/<?php echo $blogConfig['folderImg'] .'/'.$article['thumb']; ?>" alt="">
						</a>
					</div>
					<p class="extracto"><?php echo $article['extract']; ?></p>
					<a href="" class="continuar">Continuar Leyendo</a>
				</article>
			</div>
	<?php endforeach; ?>
	<?php require 'pagination.php'; ?>
	</div>