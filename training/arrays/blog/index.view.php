<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
</head>
<body>

	<h1><?= $titulo; ?></h1>

	<?php for($i=1; $i <= sizeof($postagens); $i++) :?>

		<article class="postagem">
			
			<footer class="info">
				
				<span><strong>Autor:</strong><?= $postagens[$i]['autor']; ?></span><br><br>

				<span><strong>Data postagem:</strong><?= $postagens[$i]['data']; ?></span>

				<span><strong>As:</strong><?= $postagens[$i]['horario'] ?></span>

			</footer>

			<section class="titulo">
				
				<h1><?= $postagens[$i]['titulo']; ?></h1>

			</section>

			<section class="texto">
				
				<p>
					<?= $postagens[$i]['texto']; ?>					
				</p>

			</section>

		</article>

		<br><br><br>

	<?php endfor; ?>

</body>
</html>