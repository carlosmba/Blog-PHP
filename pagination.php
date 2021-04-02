<?php $pages = getPages($blogConfig['postPag'], $connect); ?>
<section class="paginacion">
	<ul>
		<!-- Mostramos el boton para retroceder una pagina -->
		<?php if(currentPag() === 1) : ?>
			<li class="disabled">&laquo;</li>
		<?php else : ?>
			<li><a href="?p=<?php echo currentPag() - 1; ?>">&laquo;</a></li>
		<?php endif; ?>

		<?php for($i=1;$i<=$pages;$i++) : ?>

			<?php if( $i === currentPag()) : ?>
				<li class="active"><?php echo $i; ?></li>
				<?php else : ?>
				<li><a href="?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php endif; ?>
		<?php endfor; ?>
		<!-- Mostramos el boton para avanzar una pagina -->
		<?php if(currentPag() == $pages) : ?>
			<li class="disabled">&raquo;</li>
		<?php else : ?>
			<li><a href="?p=<?php echo currentPag() + 1; ?>">&raquo;</a></li>
		<?php endif; ?>


	</ul>
</section>