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
                <th>Name</th>
                <th>Internship Title</th>
                <th>Company Name</th>
              </tr>
              <tr>
                <td>2JI18MCA75</td>
                <td>namrata arun chougule</td>
                <td>File Management</td>
                <td>Code Villa</td>
                <td><button class="btn btn-primary">View More</button></td>
                <td><button class="btn btn-danger">Reject</button></td>
              </tr>
              <tr>
                <td>2JI18MCA55</td>
                <td>Urmila Mandolkar</td>
                <td>online Bidding System</td>
                <td>Code Villa</td>
                <td><button class="btn btn-primary">View More</button></td>
                <td><button class="btn btn-danger">Reject</button></td>
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
