<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<title>News - Samurai</title>
</head>
<body>
	<div class="container">
		<img src="news-logo.png" class="logo" alt="News">

		<?php
			require('connect.php');

			$sql = "SELECT * FROM noticias";
			$id_noticia = null;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$id_noticia = $row["id_noticia"];
    	?>	
    	<article class="new">

    		<h2><?php echo $row["titulo"] ?></h2>
    		<small class="info">Autor: <?php echo $row["autor"] ?> | Publicado em <?php echo $row["data"] ?></small>
    		<p><?php echo $row["descricao"] ?></p>

			<section class="comments">
				<h3>Comentários</h3>
				<ul>
				<?php 
					$sql = "SELECT * FROM comentarios WHERE id_noticia =".$row["id_noticia"];

					$result_comentarios = $conn->query($sql);
					if ($result_comentarios->num_rows > 0) {
					    // output data of each row
					    while($row = $result_comentarios->fetch_assoc()) {
				    	
				 ?>
					<li>
						<small><?php echo $row["nome"] ?></small>
						<p><?php echo $row["comentario"] ?></p>
					</li>
			 	<?php 
					    }
					} else {
					    echo "Nenhum comentário para exibir.";
					}
			  	?>
				</ul>
				<hr>
				<form method="GET" action="actions.php">
					<p>Envie um comentário</p>
					<div class="form-group">
						<input class="form-control" type="text" name="nome-usuario" placeholder="Nome" required>
					</div>
					<div class="form-group">
						<textarea class="form-control" name="comentario" placeholder="Deixe seu comentário" required></textarea>
					</div>
					<input type="hidden" name="id_noticia" value="<?php echo $id_noticia ?>">
					<div class="form-group">
						<button class="pull-right btn btn-primary" type="submit" name="submit" value="comentar">Enviar</button>
					</div>
					<div class="clearfix"></div>
				</form>
			</section>
		</article>
    	<?php			        
			    }
			} else {
			    echo "0 results";
			}

			$conn->close();
		?>

		<hr>
	</div>
	
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>