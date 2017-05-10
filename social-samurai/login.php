<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Seu banco</title>
	<meta charset="UTF-8">
</head>
<body>
<h1>Seu banco. Um banco todo seu!</h1>
<p>Logando ...</p>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Usuário: <input type="text" name="username"/>
	Senha  : <input type="password" name="password"/>
	<input type="submit" name="submit" value="Entrar"/>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//if the session is registered to a valid user then allow update
	if (!strcmp($_POST['username'],'admin') && !strcmp($_POST['password'],'pipoca')) {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['logged'] = 5;
		echo "Login bem sucedido!<br />";
	} else {
		$_SESSION['logged'] = 2;
		echo "Login mal sucedido!<br />";
	}
}

?>

<input type="button" value="Voltar" onClick="document.location.href='profile.php'" />

</body>
</html>
