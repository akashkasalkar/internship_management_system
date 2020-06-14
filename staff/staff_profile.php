<!DOCTYPE html>
<html lang="en">

<title>Staff Profile</title>
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
            <span>Profile</span>
          </h4>
        </div>

      </div>
      <!-- Heading -->    
      <div class="row wow fadeIn">

        <div class="col-lg-12 ">
          <div class="card">
            <div class="card-body">
              <?php
                $staff_username=$_SESSION['staff_username'];
                $qry="select * from staff where email='$staff_username'";
                $exc=mysqli_query($conn,$qry);
                while ($row=mysqli_fetch_array($exc)) {
                ?>

              <form method="post">
                 <table class="table table-bordered">
                    <tr>
                     <th>ID</th>
                     <td><?php echo $row['staff_id']; ?></td>
                   </tr>
                   <tr>
                     <th>Department</th>
                     <td><?php echo $row['department']; ?></td>
                   </tr>
                   <tr>
                     <th>Email</th>
                     <td><?php echo $row['email']; ?></td>
                   </tr>
                   <tr>
                     <th>Name</th>
                     <td><input type="text" name="name" value="<?php echo $row['staff_name']; ?>" class="form-control" required></td>
                   </tr>
                   
                   <tr>
                     <th>Phone</th>
                     <td><input type="phone" name="phone" value="<?php echo $row['phone']; ?>" class="form-control" required=""></td>
                   </tr>
                   <tr>
                     <th></th>
                     <td><button class="btn btn-success btn-sm" name="update">Update</button></td>
                   </tr>
                   
                  </table>
              </form>

                <?php
                }

               ?>
             
            </div>
            <?php 

            if (isset($_POST['update'])) {
              # code...
              $staff_username=$_SESSION['staff_username'];
             $name=$_POST['name'];
             $phone=$_POST['phone'];
              $qry="update staff set staff_name='$name',phone='$phone' where email='$staff_username'";
              $exc=mysqli_query($conn,$qry);
              if ($exc) {
                # code...
                echo "<script>alert('Data Updated');
                      window.location='staff_profile.php';
                </script>";
              }
              else
              {
                echo "err";
              }
            }
             
            ?>
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