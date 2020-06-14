<!DOCTYPE html>
<html>

<head>
    <title>Add Department</title>
</head>

<body>
    <?php include "top_nav.php";
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
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!--Welcome page for admin-->
                <h3> Welcome <a href="welcomeadmin">Admin</a></h3>
                <form method="post" action="">
                    <div class="form-group">
                        <label>Department Id</label>
                        <input type="text" class="form-control" name="department_id" required="">
                    </div>
                    <div class="form-group">
                        <label>Department Name</label>
                        <input type="text" name="department_name" class="form-control">
                    </div>



                    <div class="form-group">
                        <label>HOD Email</label>
                        <input type="text" class="form-control" name="email" required="">
                    </div>
                    <!-- <div class="form-group">
					<label>password</label>
					<input type="password" class="form-control" name="password" required="">
				</div> -->
                    <div class="form-group">
                        <button class="btn btn-primary" name="submit">Save</button>

                    </div>


                </form>


            </div>
        </div>
    </div>



    <?php
	if (isset($_POST['submit'])) {
		$dept_id = $_POST['department_id'];
		$dept_name = $_POST['department_name'];
		$email = $_POST['email'];

		


		$qry1 = "select * from dept where department_id='$dept_id'";
		$exc1 = mysqli_query($conn, $qry1);
		$result = mysqli_affected_rows($conn);
		if ($result) {
			echo "ID already existed";
		} else {

			$password = substr($dept_id . strtotime("now"), 6);
			$qry = "INSERT INTO `dept`(`department_id`, `department_name`, `email`, `password`) VALUES('$dept_id','$dept_name','$email','$password')";
			$exe = mysqli_query($conn, $qry);
			if ($exe == true) {
				$subject = "Login details";
				$content = "Use your email id as username,<br>";
				$content .= "Password : $password";
				phpmailsend($email, $subject, $content);

				echo " <script> alert('data inserted');
			window.location='view_department.php';
		</script>";
			} else {
				echo "<script> alert('error');
			
		</script>";
			}
		}
	}

	?>




    <?php include('footer.php'); ?>
    </form>
</body>

</html>