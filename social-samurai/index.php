<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Social - Samurai</title>
</head>
<body>
<?php session_start() ?>
	<div class="container social">
		<div class="row">
			<div class="col-sm-6">
				<img src="social-logo.png" class="logo" alt="News">
			</div>
			<div class="col-sm-6 ">
				<?php 
					if(isset($_SESSION['nome_usuario'])){
				?>
					<p class="text-right">Olá, <?php echo  $_SESSION["nome_usuario"] ?> | <a href="logout.php">Logout</a></p>
				<?php 
					}else{
				?>
				<p class="text-right"><a href="login.php">Login</a></p>
				<?php
					}
				?>
			</div>
		</div>
		<div class="col-sm-5">
			<img src="photo.jpg" class="img-responsive">
			<?php
				require('connect.php');

				$sql = "SELECT * FROM likes";
				$result = $conn->query($sql);    	
			?>	
				<form action="actions.php" method="POST">
					<input type="hidden" name="userID" value="<?php echo($_SESSION['userID']) ?>">
					<!--<input type="hidden" name="token" value="<?php // echo($_SESSION['token']) ?>"> -->
					<button type="submit" name="like" class="like"><img src="icon.ico" class="icon"> <?php echo $result->num_rows ?></button>
				</form>
	    	<?php
	    		$conn->close();
			?>
		</div>
		<div class="col-sm-7">
			<h2>John Doe</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

	<script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
