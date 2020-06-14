<!DOCTYPE html>
<html lang="en">


<head><title>View Application</title></head>
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
            <a href="dashboard.php" target="_blank">Home Page</a>
            <span>/</span>
            <span>View Application</span>
          </h4>
        </div>


      </div>
      <!-- Heading -->    
      <div class="row wow fadeIn">
        <div class="col-lg-12">
          <div class="card">
            <h1 class="text-danger text-center">View Application</h1>
            <table class="table table-bordered">
              <tr>

                <th>USN</th>
                <th>Student Name</th>
                <th>Student Phone</th>
                <th>Internship Title</th>
                <th>Company Name</th>
               
              </tr>
              <?php
              $dept_username=$_SESSION['dept_username'];
              $dept_qry="select * from dept where email='$dept_username'";
              $dept_exc=mysqli_query($conn,$dept_qry);
              while ($row1=mysqli_fetch_array($dept_exc)) {
                $department=$row1['department_name'];
              }

               $qry="select * from bonafied_table where department='$department' AND status='2' ";
               $exc=mysqli_query($conn,$qry);
               while ($row=mysqli_fetch_array($exc)) {
               
                $usn=$row['usn'];
                $qry2="select * from student where usn='$usn'";
                $exc2=mysqli_query($conn,$qry2);
               while ($row2=mysqli_fetch_array($exc2)) {
                $name=$row2['name'];
                $email=$row2['email'];
                $phone=$row2['phone'];
              }
                ?>
                <?php $id=$row['id']; ?>
                <td><?php echo $usn ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $phone ?></td>
                <td><?php echo $row['intr_title']; ?></td>
                <td><?php echo $row['cmp_name']; ?></td>
          
                <td><a href="all_student_detail.php?id=<?php echo $id; ?>" class="btn btn-primary">View More</a></td>
                
                <?php 
              }
             ?>
              <tr>
                
              </tr>
            </table>
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
