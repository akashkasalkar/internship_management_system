<!DOCTYPE html>
<html lang="en">


<head><title>View Staff</title></head>
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
            <h1 class="text-danger text-center">View Staff</h1>
             <div class="col-lg-6">
       
      </div>
    
            <table class="table table-bordered text-center">
        <tr>

          <th>Staff id</th>
          <th>Staff name</th>
          <th>Phone</th>
          <th>Email</th>
          
       
        </tr>
        <?php
          include("include/dbconn.php");
          $dept_username=$_SESSION['dept_username'];
          //echo $dept_username;
          $dept_qry="select * from dept where email='$dept_username'";
          $dept_exc=mysqli_query($conn,$dept_qry);
          while ($row=mysqli_fetch_array($dept_exc)) {
            $dept_name=$row['department_name'];
          }
          $qry="select * from staff where `department`='$dept_name'";
          $exc=mysqli_query($conn,$qry);
          
          while ($row=mysqli_fetch_array($exc))
           {

        ?>

            <tr>
               <td><?php  echo $staff_id=$row['staff_id'];?></td>
               <td><?php  echo $row['staff_name'];?></td>
               <td><?php  echo $row['phone'];?></td>
               <td><?php  echo $row['email'];?></td>
               
                  

              
              <!--td><a href="update_staff.php?staff_id=<?php echo $staff_id;?>" class="btn btn-primary">Edit</a></td-->
              <td><a href="delete_staff.php?staff_id=<?php echo $staff_id;?>" class="btn btn-danger" onclick="return confirm('do you want to delete...?');">Delete</a></td>
            </tr>
            <?php
          
          }
       ?>

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
