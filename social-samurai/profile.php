<?php
session_start();

function update_profile ($email){
// read in the data from $POST and send an update
// to the database
//SendUpdateToDatabase($_SESSION['username'], $email);
	echo "Seu perfil foi atualizado com o endereço: $email";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Seu banco</title>
	<meta charset="UTF-8">
</head>
<body>
<h1>Seu banco. Um banco todo seu!</h1>
<p>Processando transação ...</p>

<?php
if (isset($_POST['firstname']))
	$_SESSION['firstname'] = $_POST['firstname'];
if (isset($_POST['lastname']))
	$_SESSION['lastname'] = $_POST['lastname'];
if (isset($_POST['email']))
	$_SESSION['email'] = $_POST['email'];

//if the session is registered to a valid user then allow update
if (isset($_SESSION['logged'])) {
	if ($_SESSION['logged']==5) {
		// The user session is valid, so process the request
		// and update the information
		update_profile($_SESSION['email']);
	} else {
		echo "Não está logado! Por favor fazer login.";
		// Redirect user to login page
		// header("Location: login.html"); /* Redirect browser */
		// sleep(2);
		// exit;
	}
} else {
	echo "Não está logado! Por favor fazer login.";
}
?>

<br />

<script type="text/javascript">
function newDoc() {
    window.location.assign("login.php")
}
</script>

<br />
<input type="button" value="Logar" onclick="newDoc()">
<br />
<a href="logout.php">Logout</a>

</body>
</html>
