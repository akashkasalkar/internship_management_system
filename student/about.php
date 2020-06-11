<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<style type="text/css">
		.avatar-pic {
width: 150px;
}
	</style>
</head>
<body>
<section class="fnavbar">
	 <?php include "navbar.php"; ?>
</section>
	<h2 class="center-align" style="text-shadow: 2px 2px yellow">My Profile</h2>
	<section id="myform">
		<div class="container">
			<form class="md-form">
			<div class="row">
				<div class="col s12 l6 m6">
					
  							<table class="table">
  								<tr>
  									<th>USN:</th>
  									<td>2JI18MCA34</td>
  								</tr>
  								<tr>
									<th>Department:</th>
									<td>MCA</td>
								</tr>
  								<tr>
  									<th>Name:</th>
  									<td><input type="text" name="student_name" value="akash"></td>
  								</tr>
  								<tr>
  									<th>Email:</th>
  									<td><input type="email" name="student_email" value="abc@gmail.com"></td>
  								</tr>
  								
  								

  							</table>	
					
				</div>
				<div class="col s12 l6 m6">
						<table class="table">
							<tr>
  									<th>DOB:</th>
  									<td><input type="text" name="dob" value="28-09-1997"></td>
  								</tr>
  								<tr>
  									<th>Gender:</th>
  									<td><input type="radio" name="sex" value="male" checked=""><span>Male</span>
  									<input type="radio" name="sex" value="female" ><span>Female</span>

  									</td>
  								</tr>
							
							
						</table>
						<div class="input-field">
        				<button class="btn waves-effect waves-light green" type="submit" name="update">Update</button>
        				<button class="btn waves-effect waves-light blue" type="submit" name="update">Change Password</button>
        			</div>
					
					
				</div>
				
				
			</div>
			</form>
		</div>
	</section>
</body>

</html>