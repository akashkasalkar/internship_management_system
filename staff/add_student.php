<!DOCTYPE html>
<html lang="en">

<title>Add Student</title>

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
            <form method="post">
              <div class="form-group">
                <label>Student USN</label>
                <input type="text" name="usn" class="form-control">
              </div>
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="student_name" class="form-control">
              </div>
              <div class="form-group">
                <label>DOB</label>
                <input type="date" name="dob" class="form-control"  max="<?php echo date('Y-m-d'); ?>">
              </div>
              <div class="form-group">
                <button class="btn btn-primary" name="save">Save</button>
              </div>
            </form>
           </div>
        </div>
        </div>
      </div>
      <?php
  if(isset($_POST['save'])){
    $usn=$_POST['usn'];
    $name=$_POST['student_name'];
    $dob=$_POST['dob'];
    $password=$_POST['dob'];
    $staff_username=$_SESSION['staff_username'];
    $staff_qry="select * from staff where email='$staff_username'";
    $staff_exc=mysqli_query($conn,$staff_qry);
    while ($row=mysqli_fetch_array($staff_exc)) {
      $department=$row['department'];
       $staff_id=$row['staff_id'];
    }
   
    $qry="INSERT INTO `student`(`usn`, `name`, `dob`, `department`, `password`,`staff_id`) VALUES('$usn','$name','$dob','$department','$password','$staff_id')";
    $exc=mysqli_query($conn,$qry);
    if ($exc) {
      echo "<script>alert('Data Added successfully');
          window.location='view_student.php';
      </script>";
    }
    else
    {
      echo "<script>alert('Some Problem While adding Data')</script>";
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
