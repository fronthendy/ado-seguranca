<?php 
require('connect.php');

if(isset($_GET["submit"]) && $_GET["submit"] == "comentar"){
	$id_noticia = $_GET["id_noticia"];
	$nome_usuario = $_GET["nome-usuario"];
	$comentario = $_GET["comentario"];
	$sql = "INSERT INTO comentarios (id_noticia, nome, comentario) VALUES (". $id_noticia.", '". $nome_usuario."', '". $comentario ."')";
	$result = $conn->query($sql);
}

$conn->close();

header('location:index.php');
?>



<!-- 

Ataque na rede social
<script>
$.ajax({
	url: "http://localhost/ado-samurai/social-samurai/actions.php",
	method: "POST",
	data: {		
		userID: 1,
		like: true
	}
});
</script> -->