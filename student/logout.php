<?php
		session_start();
		unset($_SESSION['usn']);
		session_destroy();
		header("location:../index.php");

 ?>