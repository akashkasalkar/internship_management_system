<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
  <?php


$conn =mysqli_connect("localhost","root","","intern") or die("database not connected");

?>
<div class="container">
  <h1 class="text-danger text-center">Internship Management System</h1>
  <div class="col-lg-6 offset-3">
    <div class="card">
      <h2 class="card-title text-center">Login Here</h2>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required="">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required="">
          </div>
          <div class="form-group">
            <select class="form-control" name="user" required="">
              <option  disabled selected value=".">Choose Who You Are..</option>
              <option value="student">Student</option>
              <option value="staff">Staff</option>
              <option value="department">Department</option>
              <option value="admin">Admin</option>
            </select>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" name="login">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
      session_start();
        if (isset($_POST['login'])) {
          $username=$_POST['username'];
          $password=$_POST['password'];
          $user_type=$_POST['user'];

          if ($user_type=="student") {
            $qry="select * from student where usn='$username' AND password='$password'";
            $exc=mysqli_query($conn,$qry);
            
            if(mysqli_affected_rows($conn)!=0){
              //Student Login
              $_SESSION['usn']=$username;
              
              echo "<script>alert('login successfull..');
              </script>";
              header("location:student/about.php");
            }
            else{
              echo "<script>alert('username/password incorrcet');</script>";
            }
          }
          elseif($user_type=="staff"){
            //Staff Login
            $qry="select * from staff where email='$username' AND password='$password'";
            $exc=mysqli_query($conn,$qry);
            
            if(mysqli_affected_rows($conn)!=0){
              $_SESSION['staff_username']=$username;
              
              echo "<script>alert('login successfull..');
              </script>";
              header("location:staff/view_application.php");
            }
            else{
              echo "<script>alert('username/password incorrcet');</script>";
            }
          }
          elseif($user_type=="department"){
            //Department HOD login
            $qry="select * from dept where email='$username' AND password='$password'";
            $exc=mysqli_query($conn,$qry);
            
            if(mysqli_affected_rows($conn)!=0){
              $_SESSION['dept_username']=$username;
              
              echo "<script>alert('login successfull..');
              </script>";
              header("location:department/view_application.php");
            }
            else{
              echo "<script>alert('username/password incorrcet');</script>";
            }

          }
          elseif($user_type=="admin")
          {
            //admin
        
            $qry="select * from admin where username='$username' AND password='$password'";
            $exc=mysqli_query($conn,$qry);

            
            if(mysqli_affected_rows($conn)!=0){
              $_SESSION['admin_email']=$username;
              
              echo "<script>alert('login successfull..');
              </script>";
              header("location:admin/dashboard.php");
            }
            else{
              echo "<script>alert('username/password incorrcet');</script>";
            }
          }
          else{
            echo "err";
          }
        }
       ?>
</body>
</html>
