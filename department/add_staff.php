<!DOCTYPE html>
<html lang="en">



<body class="grey lighten-3">

	<?php include "left_nav.php";
	require "../Phpmailer/class.phpmailer.php";
	require "../Phpmailer/class.smtp.php";
	function phpmailsend($to, $subject, $content)
	{
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Host = 'smtp.gmail.com'; //
		$mail->SMTPAuth = TRUE;
		$mail->Username = "jain.internship2020@gmail.com";
		$mail->Password = "jain@123";
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = "587";

		$mail->SMTPDebug = 0;
		$mail->SetFrom('jain.internship2020@gmail.com', "JAIN COLLEGE BELGAUM");
		// $mail->addReplyTo("akkyabakkya@gmail.com", "Gogte Institude Of Technology");
		$mail->AddAddress($to); //we can add here multiple email 
		// $mail->addCC('kasalkar16@gmail.com');
		// $mail->addBCC('kasalkar16@gmail.com');
		$mail->isHTML(true);
		//$mail->Mailer   = "smtp";



		$mail->Subject = $subject;
		$mail->Body = $content;


		if (!$mail->Send()) {
			echo $mail->ErrorInfo;
		} else {
			echo "sent";
		}
	}
	?>

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
						<span>Add Staff</span>
					</h4>
				</div>

			</div>
			<!-- Heading -->
			<div class="row wow fadeIn">
				<div class="col-lg-12">
					<div class="card">
						<h1 class="text-danger text-center">Add Staff</h1>
						<div class="card-body">
							<form method="post" action="">
								<div class="form-group">
									<div class="form-group">
										<label>Staff Id</label>
										<input type="text" class="form-control" name="staff_id" required="">
									</div>
									<div class="form-group">
										<label>Staff Name</label>
										<input type="text" class="form-control" name="staff_name" required="">
									</div>
									<!--div class="form-group">
					<label>Department</label>
					<input type="text" class="form-control" name="department" required="" placeholder="department shoud add automatically">
				</div-->
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control" name="email" required="">
									</div>
									<!-- <div class="form-group">
					<label>password</label>
					<input type="password" class="form-control" name="password" required="">
				</div> -->
									<div class="form-group">
										<button class="btn btn-primary" name="submit">INSERT</button>

							</form>
						</div>
					</div>
				</div>
				<?php
				include("include/dbconn.php");

				if (isset($_POST['submit'])) {

					 $dept_username=$_SESSION['dept_username'];
			          //echo $dept_username;
			          $dept_qry="select * from dept where email='$dept_username'";
			          $dept_exc=mysqli_query($conn,$dept_qry);
			          while ($row=mysqli_fetch_array($dept_exc)) {
			            $dept_name=$row['department_name'];
			            $dept_id=$row['department_id'];
			          }

					$staff_id = $_POST['staff_id'];
					$staff_name = $_POST['staff_name'];
					//$department=$_POST['department'];
					$email = $_POST['email'];
					// $password = $_POST['password'];

					$password = substr($staff_id . strtotime("now"), 6);
					$qry1 = "select * from staff where staff_id='$staff_id'";
					$exc1 = mysqli_query($conn, $qry1);
					$result = mysqli_affected_rows($conn);
					if ($result) {
						echo "ID already existed";
					} else {

						$qry = "INSERT INTO `staff`(`staff_id`, `staff_name`, `department`, `email`, `password`, `dept_id`) VALUES('$staff_id','$staff_name','$dept_name','$email','$password','$dept_id')";
						$exe = mysqli_query($conn, $qry);
						if ($exe == true) {
							$subject = "Login details";
							$content = "Use your email id as username,<br>";
							$content .= "Password : $password";
							phpmailsend($email, $subject, $content);
							phpmailsend($to, $subject, $content);
							echo " <script> alert('data inserted');
			window.location='view_staff.php';
		</script>";
						} else {
							echo "<script> alert('error');
		
		</script>";
						}
					}
				}



				?>
			</div>






		</div>
		<!--Grid row-->

		</div>
	</main>
	<!--Main layout-->

	<?php include "footer.php"; ?>


</body>

</html>