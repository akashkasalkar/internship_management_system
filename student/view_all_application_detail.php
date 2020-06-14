<!DOCTYPE html>
<html>
<head>
	<title>All Details </title>
	<?php 
		include "dbconn.php";
	?>
</head>
<body>
<section class="fnavbar">
	 <?php include "navbar.php"; ?>
</section>
	<h2 class="center-align" style="text-shadow: 2px 2px yellow">Application Details</h2>
	<section id="myform">
		<a href="application_status.php" class="btn waves-effect waves-light blue" style="position: fixed;margin-left: 20px ">Back</a>
		<div class="container">
			  <?php 
                $id=$_GET['id'];
                  $qry="select * from bonafied_table where id='$id'";
                  $exc=mysqli_query($conn,$qry);
                  while ($row=mysqli_fetch_array($exc)) {
                  	$status=$row['status'];
				                if ($status==1) {
				                  $status="<p class='black-text'>pending</p>";
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
			 <h4 class="center-align text-danger">Company Details</h4>
			<div class="row">
				<div class="col l5 s12 m6">
					<table class="table  text-center">
                        <tr>
                          <th>Company Name:</th>
                           <td><?php echo $row['cmp_name']; ?></td>
                         </tr>
                        <tr>
                          <th>Company Address</th>
                          <td><?php echo $row['cmp_location']; ?></td>
                        </tr>
                        <tr>
                              <th>HR / External Guide's Email ID</th>
                              <td><?php echo $row['hr_email']; ?></td>
                            </tr>
                      </table>
				</div>
				<div class="col l7 s12 m6">
					<table class="table   text-center">
						<tr>
                          <th>Company Weblink</th>
                          <td><a href="<?php echo $row['weblink']; ?>" style="color: blue;font-size: 10px"><?php echo $row['weblink']; ?></a></td>
                        </tr>
                            <tr>
                              <th>HR / External Guide Name:</th>
                               <td><?php echo $row['hr_name']; ?></td>
                            </tr>
                            
                            <tr>
                              <th>HR / External Guide's Phone Number</th>
                              <td><?php echo $row['hr_phone']; ?></td>
                            </tr>
                      </table>
				</div>
			</div>
			         
                  <h4 class="center-align text-danger">Internship Details</h4>
                  <div class="row">
                    <div class="col l6 s12 m6">
                      <table class="table   text-center">
                        <tr>
                          <th>Project Title:</th>
                           <td><?php echo $row['intr_title']; ?></td>
                         </tr>
                        <tr>
                          <th>Specialization / Domain</th>
                          <td><?php echo $row['specialization']; ?></td>
                        </tr>
                        <tr>
                          <th>Stipend</th>
                          <td><?php echo $row['stipend']; ?></td>
                        </tr>
                      </table>
                     </div>
                        <div class="col l6">
                          <table class="table   text-center">
                            <tr>
                              <th>Duration in week</th>
                               <td><?php echo $row['duration']; ?></td>
                            </tr>
                            <tr>
                              <th>Start Date</th>
                              <td><?php echo $row['start_date']; ?></td>
                            </tr>
                            <tr>
                              <th class="red-text">Status</th>
                              <td><?php echo $status ?></td>
                            </tr>
                         
                      </table>
                    <?php } ?>
			
	</section>
</body>

</html>