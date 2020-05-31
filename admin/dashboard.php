<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
<?php include "top_nav.php" ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<!--Welcome page for admin-->
			<h3> Welcome <a href="welcomeadmin">Admin</a></h3>

			<a href="add_department.php" class="btn btn-primary">Add Department</a>
			<a href="view_department.php" class="btn btn-success">View Department</a>
			<a href="add_staff.php" class="btn btn-primary">Add Staff</a>
			<a href="view_staff.php" class="btn btn-success">View Staff</a>
			

		</div>
		<?php include('footer.php'); ?>
	</div>

	
</div>
</body>
</html>