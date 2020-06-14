<!DOCTYPE html>
<html lang="en">

<title>Staff Change Password</title>

<body class="grey lighten-3">

 <?php include "left_nav.php"; ?>

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="dashboard.php" >Home Page</a>
            <span>/</span>
            <span>Add New Student</span>
          </h4>
        </div>

      </div>
      <!-- Heading -->    
      <div class="row ">
        <div class="col-lg-12">
          <div class="card">
          <div class="card-body">
             
            
            <h1 class="text-danger text-center  ">Change Password</h1>
              <form method="post" class="col-lg-6 offset-3">

      <div class="form-group">
      <label class="h6">Old Password:</label>
      <input type="password"  name="old_pass" required="" class="form-control">
    </div>
    <div class="form-group">
      <label class="h6">Change Password:</label>
      <input type="password"  name="new_pass" required="" class="form-control">
    </div>
    <div class="form-group">
      <label class="h6">Confirm Password:</label>
      <input type="password"  name="confirm_pass" required="" class="form-control">
    </div>  
    <div class="card-footer text-muted">
      <button  class="btn btn-info black-text" name="change_pwd">Change Password</button>
    </div>
  </form>
            </div>
           
      
           </div>
        </div>
        </div>
      </div>
      <?php 
              if (isset($_POST['change_pwd'])) {
                $oldpassword=$_POST['old_pass'];
                $newpassword=$_POST['new_pass'];
                $confirm_pass=$_POST['confirm_pass'];

                $staff_username=$_SESSION['staff_username'];
                $qry="select * from staff where email='$staff_username'";
                $exe=mysqli_query($conn,$qry);
                
                while ($row=mysqli_fetch_array($exe)) {
                  $password=$row['password'];
                  if ($oldpassword!=$password) {
                  echo "<script>alert('old password is wrong')</script>";
                  }
                  elseif ($newpassword!=$confirm_pass) {
                    echo "<script>alert('new password is wrong')</script>";
                  }
                  else
                  {

                    $qry1="update `staff` set `password`='$newpassword' where `email`='$staff_username'";
                    $exc2=mysqli_query($conn,$qry1);
                    if ($exc2) {
                      echo "<script>alert(' password changed...Login again with new Password');
                      window.location='logout.php';</script>";
                    }

                  }
                }

              }
          ?>
     

      <!--Grid row-->
    </div>
  </main>
  <!--Main layout-->

<?php include "footer.php"; ?>

 
</body>

</html>
