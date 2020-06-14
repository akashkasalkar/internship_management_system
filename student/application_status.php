<!DOCTYPE html>
<html>
<head>
	<title>Apply</title>
	<?php 
		include "dbconn.php";
	?>
</head>
<body>
<section class="fnavbar">
	 <?php include "navbar.php"; ?>
</section>
	<h2 class="center-align" style="text-shadow: 2px 2px yellow">Application Status</h2>
	<section id="myform">
		<div class="container">
			<div class="row">
				<div class="col l12 m12 s12">
					<table class="table">
						<tr>
							
							<th>Faculty Name</th>
							<th>Company Name</th>
							
							<th>Internship Start Date</th>
							<th>Status</th>
							
						</tr>
						<?php
						 	$usn=$_SESSION['usn'];
							$qry="select * from bonafied_table where usn='$usn'";
							$exc=mysqli_query($conn,$qry);
							while ($row=mysqli_fetch_array($exc)) {
								 $status=$row['status'];
				                if ($status==1) {
				                  $status="<p class='black-text'>pending</p>";//0=reject 1=pending 2=staff accept 3=hod accept
				                }
				                elseif ($status==2) {
				                  $status="<p class='blue-text'>Staff Accepted</p>";
				                }
				                elseif($status==3)
				                {
				                  $status="<p class='green-text'>Approved</p>";
				                }
				                else
				                {
				                  $status="<p class='red-text'>Rejected</p>";
				                }
											
					 ?>
					 <tr>
					 	<?php $id=$row['id']; ?>
					 	<td><?php echo $row['faculty']; ?></td>
					 	<td><?php echo $row['cmp_name']; ?></td>
					 	<td><?php echo $row['start_date']; ?></td>
					 	
					 	<td><?php echo $status; ?></td>
					 	<td><a href="view_all_application_detail.php?id=<?php echo $id; ?>" class="btn btn-info">View More</a></td>
					 </tr>
					<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</section>
</body>

</html>