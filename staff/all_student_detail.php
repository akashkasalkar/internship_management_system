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
            <a href="dashboard.php" target="">Home Page</a>
            <span>/</span>
            <span>View Application</span>
          </h4>
        </div>


      </div>
      <!-- Heading -->    
      <div class="row wow fadeIn">
        <div class="col-lg-12">
          <div class="card">
            <h1 class="text-danger text-center"></h1>
            <h4 class="text-center text-danger">Student Details</h4>
              <div class="student_details">
                <form method="post">
                  <table class="table col-lg-4  offset-4 text-center">
                    <?php
                      $id=$_GET['id'];
                         $qry1="select * from bonafied_table where id='$id'";
                       $exc1=mysqli_query($conn,$qry1);
                    while ($row=mysqli_fetch_array($exc1)) {
                        $usn=$row['usn'];
                    }
        
                      $qry2="select * from student where usn='$usn'";
                       $exc2=mysqli_query($conn,$qry2);
                       while ($row2=mysqli_fetch_array($exc2)) {

                     ?>
                    <tr>
                      <th><label>USN:</label></th>
                       <td><label><?php echo $row2['usn']; ?></label></td>
                    </tr>
                    <tr>
                      <th>Name</th>
                      <td><?php echo $row2['name']; ?></td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td><?php echo $row2['email']; ?></td>
                    </tr>
                  </table>
                <?php } ?>
                <?php 
                $id=$_GET['id'];
                  $qry="select * from bonafied_table where id='$id'";
                  $exc=mysqli_query($conn,$qry);
                  while ($row=mysqli_fetch_array($exc)) {
              ?>
                  <h4 class="text-center text-danger">Company Details</h4>
                 <div class="row">
                    <div class="col-lg-6">
                      <table class="table   text-center">
                        <tr>
                          <th><label>Company Name:</label></th>
                           <td><label><?php echo $row['cmp_name']; ?></label></td>
                         </tr>
                        <tr>
                          <th>Company Address</th>
                          <td><?php echo $row['cmp_location']; ?></td>
                        </tr>
                        <tr>
                          <th>Company Weblink</th>
                          <td><a href="<?php echo $row['weblink']; ?>" style="color: blue"><?php echo $row['weblink']; ?></a></td>
                        </tr>
                      </table>
                     </div>
                        <div class="col-lg-6">
                          <table class="table   text-center">
                            <tr>
                              <th><label>HR / External Guide Name:</label></th>
                               <td><label><?php echo $row['hr_name']; ?></label></td>
                            </tr>
                            <tr>
                              <th>HR / External Guide's Email ID</th>
                              <td><?php echo $row['hr_email']; ?></td>
                            </tr>
                            <tr>
                              <th>HR / External Guide's Phone Number</th>
                              <td><?php echo $row['hr_phone']; ?></td>
                            </tr>
                      </table>
                    </div>
                  </div>
                  <h4 class="text-center text-danger">Internship Details</h4>
                  <div class="row">
                    <div class="col-lg-6">
                      <table class="table   text-center">
                        <tr>
                          <th><label>Project Title:</label></th>
                           <td><label><?php echo $row['intr_title']; ?></label></td>
                         </tr>
                        <tr>
                          <th>Specialization / Domain</th>
                          <td><?php echo $row['specialization']; ?></td>
                        </tr>
                        <tr>
                          <th>Stipend</th>
                          <td><?php echo $row['stipend']; ?></td>
                        </tr>
                      </table>
                     </div>
                        <div class="col-lg-6">
                          <table class="table   text-center">
                            <tr>
                              <th><label>Duration in week</label></th>
                               <td><label><?php echo $row['duration']; ?></label></td>
                            </tr>
                            <tr>
                              <th>Start Date</th>
                              <td><?php echo $row['start_date']; ?></td>
                            </tr>
                            <tr>
                              <td><button class="btn btn-outline-success" name="accept">Accept</button></td>
                              <td><button class="btn btn-outline-danger" name="reject">Reject</button></td>
                            </tr>
                      </table>
                    </form>
                    <?php } ?>
                    </div>
                  </div>
                  
                  <?php
                    if (isset($_POST['accept'])) {
                      $id=$_GET['id'];
                      $qry="update bonafied_table set status='2' where id='$id'"; 
                      //0=reject 1=pending 2=staff_accept 3=hod accept
                      $exc=mysqli_query($conn,$qry);
                      if ($exc) {
                        # code...
                        echo "<script>alert('Application Accepted');
                            window.location='view_application.php';
                        </script>";
                      }
                      else
                      {
                        echo "err";
                      }

                    }


                    if (isset($_POST['reject'])) {
                      # code...
                      $id=$_GET['id'];
                      $qry="update bonafied_table set status='0' where id='$id'"; 
                      //0=reject 1=pending 2=staff_accept 3=hod accept
                      $exc=mysqli_query($conn,$qry);
                      if ($exc) {
                        # code...
                        echo "<script>alert('Application Rejected');
                            window.location='view_application.php';
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
        

       

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

<?php include "footer.php"; ?>

 
</body>

</html>
