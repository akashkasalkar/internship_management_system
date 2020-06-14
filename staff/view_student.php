<!DOCTYPE html>
<html lang="en">

<title>View Student</title>
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
            <span>View Student</span>
          </h4>
        </div>

      </div>
      <!-- Heading -->    
      <div class="row wow fadeIn">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <table class="table table-bordered">
                <tr>
                  <th>USN</th>
                  <th>Name</th>
                  <th>DOB</th>
                  
           
                </tr>
                <?php 
                include("include/dbconn.php");
                  $qry="select * from student";
                  $exc=mysqli_query($conn,$qry);
                  while($row=mysqli_fetch_array($exc)){
               ?>
                <tr>
                  <td><?php echo $usn=$row['usn']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['dob']; ?></td>
                  <!--td><a href="student_update.php?usn=<?php echo $usn;?>" class="btn btn-primary">Edit</a></td-->
              <td><a href="delete_student.php?usn=<?php echo $usn;?>" class="btn btn-danger" onclick="return confirm('do you want to delete...?');">Delete</a></td>
               </tr>

                    <?php
                  }
                ?>
               
              </table>
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