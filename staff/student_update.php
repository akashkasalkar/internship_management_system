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
            <span>Student Update</span>
          </h4>
        </div>


      </div>
      <!-- Heading -->    
      <div class="row ">
        <div class="col-lg-12">
          <div class="card">
            <h1 class="text-danger text-center">Update Student</h1>
            <?php
      include("include/dbconn.php");
        $usn=$_GET['usn'];
      $qry="select * from student where usn='$usn'";
      $exc=mysqli_query($conn,$qry);
      while ($row=mysqli_fetch_array($exc)) {
    ?>
          <div class="card-body">
            <form method="post">
              <div class="form-group">
                <label>Student USN</label>
                <input type="text"  class="form-control" name="usn" value="<?php echo $row['usn'];?>">
              </div>
              <div class="form-group">
                <label>Name</label>
                <input type="text"  class="form-control" name="name" value="<?php echo $row['name'];?>">
              </div>
              <div class="form-group">
                <label>DOB</label>
                <input type="text" name="dob" class="form-control" value="<?php echo $row['dob'];?>">
              </div>
              <div class="form-group">
                <button class="btn btn-primary" name="update">Update</button>
              </div>
            </form>
            <?php } ?>
      <?php 

      if (isset($_POST['update']))
       {
        $usn=$_GET['usn'];

        $name=$_POST['name'];

        $dob=$_POST['dob'];
        
        $sql="UPDATE `student` SET `name`='$name',`dob`='$dob' WHERE `usn`='$usn'";
        $exc=mysqli_query($conn,$sql);
        if($exc==true){
            echo "<script>alert('data updated successfully');
              window.location='view_student.php';
            </script>";
          }
          else {
              echo "<script>alert('error');
              window.location='view_student.php';
            </script>"; # code...
            } 
        
        }
      ?>
           </div>
        </div>
        </div>
      </div>
            <!--Grid row-->
    </div>
  </main>
  <!--Main layout-->

<?php include "footer.php"; ?>

 
</body>

</html>
