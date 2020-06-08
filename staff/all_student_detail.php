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
                  <table class="table col-lg-4  offset-4 text-center">
                    
                    <tr>
                      <th><label>USN:</label></th>
                       <td><label>2JI18MCA55</label></td>
                    </tr>
                    <tr>
                      <th>Name</th>
                      <td>Urmila Mandolkar</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>nam@gmail.com</td>
                    </tr>
                  </table>
                  <h4 class="text-center text-danger">Company Details</h4>
                 <div class="row">
                    <div class="col-lg-6">
                      <table class="table   text-center">
                        <tr>
                          <th><label>Company Name:</label></th>
                           <td><label>code villa</label></td>
                         </tr>
                        <tr>
                          <th>Company Address</th>
                          <td>belgaum</td>
                        </tr>
                        <tr>
                          <th>Company Weblink</th>
                          <td><a href="#">http://codevilla.net.in</a></td>
                        </tr>
                      </table>
                     </div>
                        <div class="col-lg-6">
                          <table class="table   text-center">
                            <tr>
                              <th><label>HR / External Guide Name:</label></th>
                               <td><label>rohan</label></td>
                            </tr>
                            <tr>
                              <th>HR / External Guide's Email ID</th>
                              <td>roh123@gmail.com</td>
                            </tr>
                            <tr>
                              <th>HR / External Guide's Phone Number</th>
                              <td>7654543456</td>
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
                           <td><label>File Management</label></td>
                         </tr>
                        <tr>
                          <th>Specialization / Domain</th>
                          <td>php</td>
                        </tr>
                        <tr>
                          <th>Stipend</th>
                          <td>1500</td>
                        </tr>
                      </table>
                     </div>
                        <div class="col-lg-6">
                          <table class="table   text-center">
                            <tr>
                              <th><label>Duration in week</label></th>
                               <td><label>5</label></td>
                            </tr>
                            <tr>
                              <th>Start Date</th>
                              <td>21-01-2020</td>
                            </tr>
                            <tr>
                              <td><button class="btn btn-outline-success">Accept</button></td>
                              <td><button class="btn btn-outline-danger">Reject</button></td>
                            </tr>
                      </table>
                    </div>
                  </div>
                  

              
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
