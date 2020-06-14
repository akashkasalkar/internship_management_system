<!DOCTYPE html>
<html lang="en">
<?php include("include/dbconn.php"); ?>


<body class="grey lighten-3">

 <?php include "left_nav.php"; ?>

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body text-center justify-content-between text-danger">

          <h4> DEPARTMENT PROFILE </h4>
<?php
   $dept_username=$_SESSION['dept_username'];
  $qry="select * from dept where email='$dept_username' ";
  $exc=mysqli_query($conn,$qry);
  while ($row=mysqli_fetch_array($exc)) {
    # code...?>
          <form method="post">
            <table class="table">
              <tr>
                <th>Department ID</th>
                <td><?php echo $row['department_id'] ?></td>
              </tr>
              <tr>
                <th>Department Name</th>
                <td><?php echo $row['department_name'] ?></td>
              </tr>
              <tr>
                <th>Department Email</th>
                <td><input type="email" name="dept_email" required class="form-control" value="<?php echo $row['email'] ?>" disabled></td>
              </tr>
              <tr>
                <th></th>
                <!--td><button class="btn btn-primary btn-sm" name="update">Update</button></td-->
              </tr>
            </table>
           
          </form>
    <?php
  }
  
 ?>

        </div>
     <?php 

      if (isset($_POST['update'])) {
        $dept_username=$_SESSION['dept_username'];
        $dept_email=$_POST['dept_email'];
        $qry="update dept set email='$dept_email'";
        $exc=mysqli_query($conn,$qry);
        if ($exc) {
          # code...
          echo "<script>alert('Data Updated');
            window.location='profile.php'
          </script>";

        }
        else
        {
          echo "err";
        }
      }
     ?>

    </div>
  </main>


<?php include "footer.php"; ?>

 
</body>

</html>
