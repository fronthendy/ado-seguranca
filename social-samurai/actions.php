<?php
	session_start();

	require('connect.php');

	if (isset($_POST['like']) && isset($_POST['userID']) && $_POST['userID'] > 0) {
		$userID = $_POST["userID"];
		$sql = "INSERT INTO likes (id_usuario) VALUES (". $userID.")";
		$result = $conn->query($sql);
		header("Location: index.php");
		
	} else {
		header("Location: login.php?message=ops");
	}

?>


