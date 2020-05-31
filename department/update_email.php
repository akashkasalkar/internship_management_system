<!DOCTYPE html>
<html>
<head>
  <title></title>
  
  
</head>
<body>
  <?php
      include("top_nav.php");
       
    
    ?>

    <div class="container">
    <center><h1>UPDATE EMAIL</h1></center>
  
      
    
        
      <?php
      include("include/dbconn.php");
       
       $qry="select * from dept where department_name='mca'";
      $exc=mysqli_query($conn,$qry);
      while ($row=mysqli_fetch_array($exc))
      {
            
          $qry="select * from dept where email=email";
          $exc=mysqli_query($conn,$qry);
          while ($row=mysqli_fetch_array($exc))
           {
             ?>
           <?php
         }
    ?>
      <form method="post" action="">
         <div class="form-group">
          <label class="h5">Department Id=<?php echo $row['department_id']; ?></label>
        
        </div>
        <div class="form-group">
          <label class="h5">Department Name=<?php echo $row['department_name']; ?></label>
         
        </div>
        
        <div class="form-group">
          <label>HOD email</label>
          <input type="text" class="form-control" name="email"  value="<?php echo $row['email'];?>" required="">
        </div>
        
        <div class="form-group">
          <button class="btn btn-dark" name="update">Update</button>
        </div>
    </form>
      <?php } 
      ?>
      <?php 

      if (isset($_POST['update']))
       {
       
        $email=$_POST['email'];
        $sql="UPDATE `dept` SET `email`='$email' WHERE department_id='$dept_id'";
        $exc=mysqli_query($conn,$sql);
        if($exc==true){
            echo "<script>alert('data updated successfully');
              window.location='profile.php';
            </script>";
          }
          else {
              echo "<script>alert('error');
              window.location='profile.php';
            </script>"; # code...
            } 
      
        }
      ?>

    </div>
  </body>
</html>