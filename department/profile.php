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

          

</div>
      
      <div class="row wow fadeIn">
        <div class="container-fluid col-lg-8">
          <div class="table table-bordered">
        
          <div class="card">
            
            <div class="card-body text-center">
              
      <!-- Heading -->    
      <?php
     
      $qry="select * from dept where department_name='mca'";
      $exc=mysqli_query($conn,$qry);
      while ($row=mysqli_fetch_array($exc)) {
    ?>
      <form method="post" action="">
        <div class="form-group">
          <label class="h5">Department Id=<?php echo $row['department_id']; ?></label>
        
        </div>
        <div class="form-group">
          <label class="h5">Department Name=<?php echo $row['department_name']; ?></label>
         
        </div>
        <div class="form-group">
          <label class="h5">HOD email</label>
          <input type="text"  name="email"  value="<?php echo $row['email'];?>" required="">
        </div>
        
      
          
        <div class="form-group">
          <button class="btn btn-dark" name="update">Update</button>
        </div>
      
    </form>
  </div>

  </div>

      <?php } 
      ?>
      <?php 

      if (isset($_POST['update']))
       {
       
            echo "<script>
              window.location='update_email.php';
            </script>";
         
        
        }
      ?>
    
      </div>
</div>
      </div>
     

    </div>
  </main>


<?php include "footer.php"; ?>

 
</body>

</html>
