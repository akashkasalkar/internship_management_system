<?php
		session_start();
		unset($_SESSION['staff_username']);
		session_destroy();
		header("location:../index.php");

 ?>