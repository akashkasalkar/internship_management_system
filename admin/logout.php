<?php
		session_start();
		unset($_SESSION['admin_email']);
		session_destroy();
		header("location:../index.php");

 ?>