<?php
session_start();
isset($_GET['logout']);

	session_destroy();
	header("location:signin.html");

?>
