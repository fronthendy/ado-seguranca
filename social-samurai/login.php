<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Social - Login</title>
</head>
<body>
	<div class="container social">
		<div class="col-xs-12">
			<img src="social-logo.png" class="logo" alt="News">
		</div>
		<div class="col-xs-12">
			<?php 
				if(isset($_GET['message']))
					echo "<h5 class='text-center'>Ops, você precisa estar logado para curtir a foto!</h5>";
			?>
		</div>
		<form class="login" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="form-group">
				Usuário <input type="text" name="username" class="form-control"/>
				Senha <input type="password" name="password" class="form-control"/>
			</div>
			<input  class="btn btn-primary pull-right" type="submit" name="submit" value="Entrar"/>
		</form>

		<?php
		require('connect.php');

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if(isset($_POST['username']) && isset($_POST['password'])){
				$user = $_POST["username"];
				$pass = $_POST["password"];
				$sql = "SELECT * FROM usuarios WHERE nome_usuario='".$user."' AND senha='". $pass. "'";
				$result = $conn->query($sql);
				if($result->num_rows > 0){
					echo "Login realizado com sucesso";
					 while($row = $result->fetch_assoc()) {
						$_SESSION["userID"] = $row["id_usuario"];
						$_SESSION["nome_usuario"] = $row["nome_usuario"];
					}
	 				header("Location: index.php");
					
				}else{
					echo "usuario e/ou senha invalido";
				}
			}
		}

		?>

		
	</div>
</body>
</html>
