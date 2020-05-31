<!DOCTYPE html>
<html lang="en">



<body class="grey lighten-3">

 <?php include "left_nav.php"; ?>
 <main class="pt-5 mx-lg-5">

  <div class="container-fluid mt-5 col-lg-8">

          <div class="card  fadeIn border-info mb-3" style="width:30rem;">
          	<div class="row">
       
      
        <div class="col-lg-12">

          	
            <h1 class="text-danger text-center  ">Change Password</h1>
        </div>
            </div>
            <div class="card-body text-center justify-content-between ">
			<form method="post">

			<div class="form-group">
			<label class="h6">Old Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text"  name="old_pwd" required="">
		</div>
		<div class="form-group">
			<label class="h6">Change Password:</label>
			<input type="text"  name="change_pwd" required="">
		</div>
		<div class="form-group">
			<label class="h6">Confirm Password:</label>
			<input type="text"  name="confirm_pwd" required="">
		</div>	
		<div class="card-footer text-muted">
			<button name="submit" class="btn-btn-primary bg-info">Save Password</button>
		</div>
	</form>
</div>
</div>

</div>


<?php
if(isset($_POST['submit']))
{

}
?>
</div>


</div>
</div>
</body>
</html>