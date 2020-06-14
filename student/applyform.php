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
	<h2 class="center-align" style="text-shadow: 2px 2px yellow">Application for Internship Certificate</h2>
	<section id="myform">
		<div class="container">
			<div class="row">
				<form method="post">
					
				
				<div class="col s12 l10 m10  ">
        		  <h5 class=" black-text "><b>Internal Guide's / Mentor's Details</b></h5>
					
					 <div class="input-field ">
					  <select id="faculty" name="faculty">
					  	 <option value="" disabled selected>Choose your Faculty</option>
					  	<?php
					  		$qry="select * from staff where department='mca'";
					  		$exc=mysqli_query($conn,$qry);
					  		while ($row=mysqli_fetch_array($exc)) {
					  			?>

					  			<option value="<?php echo $row['staff_name'] ?>"><?php echo $row['staff_name'] ?></option>
					  			<?php
					  			# code...
					  		}
					  	 ?>
						
					</select>
					 </div> 
					  <p>
					  	<h6>Is faculty your guide or Mentor?</h6>
     					 <label>
       						 <input name="guide" type="radio" value="mentor" checked />
       						 <span>Mentor</span>
    					  </label>
    					  <label>
       						 <input name="guide" type="radio" value="guide"  />
       						 <span>Guide</span>
    					  </label>
   					 </p>

				</div>
				<div class="col s12 l10 m10  ">
						  <h5 class=" black-text "><b>Company Details</b></h5>
					<div class="row">
						<div class="col s12 l6 m6">
							<div class="input-field ">
					  	<input type="text" name="cmp_name" id="company_name" >
        				 <label for="company_name">Company Name</label>
					 </div>  
					 <div class="input-field">
       						<input type="text" name="cmp_location" id="company_location" >
       					 <label for="company_location">Company Location/Address</label>
     				 </div>
					 <div class="input-field ">
					  	<input type="url" name="weblink" id="company_weblink" >
        				 <label for="company_weblink">Company Weblink</label>
					 </div> 
						</div>
						<div class="col s12 l6 m6">
							<div class="input-field ">
					  	<input type="text" name="hr_name" id="hr_name" >
        				 <label for="hr_name">HR / External Guide Name</label>
					 </div> 
					 <div class="input-field">
        				<input type="email" name="hr_email" id="hr_email" class="validate">
        				<label for="hr_email">HR / External Guide's Email ID</label>
        			</div>	
        			<div class="input-field">
        				<input type="number" name="hr_phone" id="hr_phone" class="validate">
        				<label for="hr_phone">HR / External Guide's Phone Number</label>
        			</div>
						</div>
					</div>
        	
					 
					 

				</div>
				<div class="col s12 l10 m10  ">
        		  <h5 class=" black-text "><b>Internship Details</b></h5>
					<div class="input-field ">
					  	<input type="text" name="intr_title" id="title" >
        				 <label for="title">Title</label>
					 </div>  
					 
					 <div class="input-field ">
					  	<input type="text" name="specialization" id="specialization" >
        				 <label for="specialization">Specialization / Domain</label>
					 </div>  
					 <div class="input-field ">
					  	<input type="text" name="stipend" id="stipend" >
        				 <label for="stipend">Stipend</label>
					 </div> 
					 	
        			<div class="input-field">
        				<input type="number" name="duration" id="duration" >
        				<label for="duration">Duration in week</label>
        			</div>
        			<div class="input-field">
        				<input type="date" name="start_date" id="start_date" >
        				<label for="start_date">Start Date</label>
        			</div>
        			<div class="input-field">
        				<button class="btn waves-effect waves-light" type="submit" name="submit">Apply</button>
        			</div>
        			  

				</div>
				</form>
				<?php 
					if (isset($_POST['submit'])) {
						$usn=$_SESSION['usn'];
						$qry="select * from student where usn='$usn'";
						$exc=mysqli_query($conn,$qry);
						while($row=mysqli_fetch_array($exc)){
							$department=$row['department'];
							$name=$row['name'];
						}
						$x=rand(1,100);
					
						
						$id=$usn.$name.$x;
						$faculty=$_POST['faculty'];
						$guide=$_POST['guide'];
						$cmp_name=$_POST['cmp_name'];
						$cmp_location=$_POST['cmp_location'];
						$weblink=$_POST['weblink'];
						$hr_name=$_POST['hr_name'];
						$hr_email=$_POST['hr_email'];
						$hr_phone=$_POST['hr_phone'];
						$intr_title=$_POST['intr_title'];
						$specialization=$_POST['specialization'];
						$stipend=$_POST['stipend'];
						$duration=$_POST['duration'];
						$start_date=$_POST['start_date'];
						$status="1"; ////0=reject 1=pending 2=staff accept 3=hod accept
						$date1=date('Y-m-d');


						echo "$date1";

						$qry="INSERT INTO `bonafied_table`(`id`,`usn`, `department`, `faculty`, `guide`, `cmp_name`, `cmp_location`, `weblink`, `hr_name`, `hr_email`, `hr_phone`, `intr_title`, `specialization`, `stipend`, `duration`, `start_date`, `status`, `application_date`) VALUES('$id','$usn','$department','$faculty','$guide','$cmp_name','$cmp_location','$weblink','$hr_name','$hr_email','$hr_phone','$intr_title','$specialization','$stipend','$duration','$start_date','$status','$date1')";
						$exc=mysqli_query($conn,$qry);
						if ($exc) {
							echo "<script>alert('Data Added Successfully..');
											window.location='application_status.php';
								</script>";
						}
						else
						{
							echo "<script>alert('Error while adding data')</script>";
						}

					}
				?>
			</div>
		</div>
	</section>
</body>

</html>