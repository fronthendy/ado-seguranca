<?php
	session_start();

	require('connect.php');

	if (isset($_POST['like']) && isset($_POST['userID']) && $_POST['userID'] > 0 && isset($_POST['token']) && $_POST['token'] === $_SESSION['token']) {
		$userID = $_POST["userID"];
		$sql = "INSERT INTO likes (id_usuario) VALUES (". $userID.")";
		$result = $conn->query($sql);
		header("Location: index.php");
		
	} else {
		header("Location: login.php?message=ops");
	}

?>


