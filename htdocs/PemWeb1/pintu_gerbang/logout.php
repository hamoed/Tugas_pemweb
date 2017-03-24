<?php
	session_start();
	unset($_SESSION['Username']);
	unset($_SESSION['Username1']);
	session_destroy();
	header("Location: login.php");
?>