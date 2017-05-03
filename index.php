<!DOCTYPE html>
<html>
<head>
	<title>News - Samurai</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

</head>
<body>
	<div class="container">
		<img src="news-logo.png" class="logo" alt="News">

		<?php
			require('connect.php');

			$sql = "SELECT * FROM noticias";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo $row["titulo"]. " " . $row["descricao"]. "<br>";
			        
			    }
			} else {
			    echo "0 results";
			}

			$conn->close();
		?>
		<article class="new">
			<h2>De onde surgiu a palavra “meme”?</h2>
			<small class="info">Autor: Jane Doe | Publicado em 02/05/2017 20:30</small>
			<p>É criação do biólogo britânico Richard Dawkins, no livro O Gene Egoísta. A intenção era batizar uma unidade de informação cultural – assim como gene é uma unidade de informação genética.</p>

			<p>Exemplos: uma melodia assobiada que se espalha pelo escritório, um jeito de usar boné que vira moda na escola ou aquele vídeo que você e mais meio milhão curtiram e compartilharam no Facebook.</p>
			<p>Na busca por uma palavra que lembrasse gene, o autor reduziu o termo grego mimesis (imitação).</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco.</p>

			<section class="comments">
			<h3>Comentários</h3>
				<ul>
					<li>
						<small>Bianca Kaiser</small>
						<p>uau, que maneiro!</p>
					</li>
					<li>
						<small>Gabriel Ferreira</small>
						<p>Achei uma bosta, odeio todo mundo</p>
					</li>
				</ul>
				<hr>
				<form>
					<p>Envie um comentário</p>
					<div class="form-group">
						<input class="form-control" type="text" name="nome-usuario" placeholder="Nome">
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Deixe seu comentário"></textarea>
					</div>
					<div class="form-group">
						<button class="pull-right btn btn-primary" type="submit">Enviar</button>
					</div>
					<div class="clearfix"></div>
				</form>
			</section>
		</article>
		<hr>
	</div>
	<script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>