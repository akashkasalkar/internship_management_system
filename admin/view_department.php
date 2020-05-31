<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<?php
			include("top_nav.php");
			
		?>

		<div class="container">
		<center><h1>View Department</h1></center>
  
      <!--  <div class="panel-heading">Forms</div> -->
    
      	<table class="table table-bordered text-center">
				<tr>

					<th>department id</th>
					<th>department name</th>
					<th>email</th>
					
					
					<th>Deletet</th>
				</tr>
				<?php
					include("include/dbconn.php");
					$qry="select * from dept";
					$exc=mysqli_query($conn,$qry);
					while ($row=mysqli_fetch_array($exc))
					 {

				?>

						<tr>
							 <td><?php  echo $dept_id=$row['department_id'];?></td>
							 <td><?php  echo $row['department_name'];?></td>
							 <td><?php  echo $row['email'];?></td>
							
							<td><a href="delete.php?department_id=<?php echo $dept_id; ?>" class="btn btn-danger" onclick="return confirm('do you want to delete...?');">Delete</a></td>
						</tr>
						<?php
					
					}
			 ?>

			</table>
      
		</div>


		<?php include('footer.php'); ?>
</body>
</html>