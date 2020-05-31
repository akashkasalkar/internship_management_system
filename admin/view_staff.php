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
		<center><h1>View Staff</h1></center>
  
      <!--  <div class="panel-heading">Forms</div> -->

      <div class="col-lg-6">
      	<form method="post">
      		<div class="form-group">
      			<label>Select Department</label>
      			<select name="department_name" class="form-control ">
								
									<?php
									include("include/dbconn.php");
									$qry="select * from dept";
									$exc=mysqli_query($conn,$qry);
									while($row=mysqli_fetch_array($exc))
									 {
									 ?>
									 	<option><?php echo $row['department_name'];?></option>
									 
								 	<?php
								 }

						?>		
					</select>
      		</div>
      		<div class="form-group">
      			<button class="btn btn-success" name="view">View</button>
      		</div>
      		
      	</form>
      </div>
      <?php 
      	if (isset($_POST['view'])) {
      		$department_name=$_POST['department_name'];
      		?>
      			<table class="table table-bordered text-center">
				<tr>

					<th>Staff id</th>
					<th>Staff name</th>
					<th>Department</th>
					<th>Email</th>
					
					<th>Edit</th>
					<th>Deletet</th>
				</tr>
				<?php
					include("include/dbconn.php");
					$qry="select * from staff where `department`='$department_name'";
					$exc=mysqli_query($conn,$qry);
					
					while ($row=mysqli_fetch_array($exc))
					 {

				?>

						<tr>
							 <td><?php  echo $staff_id=$row['staff_id'];?></td>
							 <td><?php  echo $row['staff_name'];?></td>
							 <td><?php  echo $row['department'];?></td>
							 <td><?php  echo $row['email'];?></td>
							 
									

							
							<td><a href="update_staff.php?staff_id=<?php echo $staff_id;?>" class="btn btn-primary">Edit</a></td>
							<td><a href="delete_staff.php?staff_id=<?php echo $staff_id;?>" class="btn btn-danger" onclick="return confirm('do you want to delete...?');">Delete</a></td>
						</tr>
						<?php
					
					}
			 ?>

			</table>



      		<?php 
      		# code...
      	}
      ?>
    
      	
      
		</div>


		<?php include('footer.php'); ?>
</body>
</html>