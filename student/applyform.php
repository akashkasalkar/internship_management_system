<!DOCTYPE html>
<html>
<head>
	<title>Apply</title>
	<!-- font -->
	<link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
	

	<!-- icon -->
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Actual M  -->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- custome css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section id="myfnavbar">
	 <div class="navbar-fixed ">
	    <nav>       
	      <div class="nav-wrapper">
	        <a href="#!" class="brand-logo"><img src="img/logo2.jpg" height="60" width="70" style="padding: 5px"></a>

	        <ul class="right hide-on-med-and-down">

	          <li><a href="#"></a></li>
	          <li><a href="#">About</a></li>
	          
	        </ul>
	      </div>
	    </nav>
	  </div>		
	</section>
	<h2 class="center-align" style="text-shadow: 2px 2px yellow">Application for Internship Certificate</h2>
	<section id="myform">
		<div class="container">
			<div class="row">
				<form method="post">
					<div class="col s12 l10 m10 ">
					
        				  <h5 class=" black-text "><b>Student Information</b></h5>
        				  	
        				  		<div class="input-field">
        				  			<input type="text" name="name" id="name" class="validate">
        				  			<label for="name">Your Full Name</label>
        				  		</div>
        				  		<div class="input-field">
        				  			<input type="text" name="usn" id="usn" required="">
        				  			<label for="usn">Your USN</label>
        				  		</div>
        				  		<div class="input-field">
        				  			<input type="email" name="email" id="email" class="validate">
        				  			<label for="email">Your Email</label>
        				  		</div>			
					</div>
				
				<div class="col s12 l10 m10  ">
        		  <h5 class=" black-text "><b>Internal Guide's / Mentor's Details</b></h5>
					<div class="input-field ">
					  <select id="department">
						 <option value="" disabled selected>Choose your Department</option>
							  <option>MCA</option>
							  <option>MBA</option>
						</select>
					 </div>  
					 <div class="input-field ">
					  <select id="department">
						 <option value="" disabled selected>Choose your Faculty</option>
							  <option>veena Desai</option>
							  <option>B.M.Patil</option>
							  <option>Minal Patil</option>
						</select>
					 </div> 
					  <p>
					  	<h6>Is faculty your guide or Mentor?</h6>
     					 <label>
       						 <input name="group1" type="radio" checked />
       						 <span>Mentor</span>
    					  </label>
    					  <label>
       						 <input name="group1" type="radio"  />
       						 <span>Guide</span>
    					  </label>
   					 </p>

				</div>
				<div class="col s12 l10 m10  ">
						  <h5 class=" black-text "><b>Company Details</b></h5>
					<div class="row">
						<div class="col s12 l6 m6">
							<div class="input-field ">
					  	<input type="text" name="company_name" id="company_name" >
        				 <label for="company_name">Company Name</label>
					 </div>  
					 <div class="input-field">
       						<input type="text" name="company_location" id="company_location" >
       					 <label for="company_location">Company Location/Address</label>
     				 </div>
					 <div class="input-field ">
					  	<input type="url" name="company_weblink" id="company_weblink" >
        				 <label for="company_weblink">Company Weblink</label>
					 </div> 
						</div>
						<div class="col s12 l6 m6">
							<div class="input-field ">
					  	<input type="text" name="hr_name" id="hr_name" >
        				 <label for="hr_name">HR / External Guide Name</label>
					 </div> 
					 <div class="input-field">
        				<input type="email" name="hr_email" id="hr_email" class="validate">
        				<label for="hr_email">HR / External Guide's Email ID</label>
        			</div>	
        			<div class="input-field">
        				<input type="number" name="hr_phone" id="hr_phone" class="validate">
        				<label for="hr_phone">HR / External Guide's Phone Number</label>
        			</div>
						</div>
					</div>
        	
					 
					 

				</div>
				<div class="col s12 l10 m10  ">
        		  <h5 class=" black-text "><b>Internship Details</b></h5>
					<div class="input-field ">
					  	<input type="text" name="title" id="title" >
        				 <label for="title">Title</label>
					 </div>  
					 
					 <div class="input-field ">
					  	<input type="text" name="specialization" id="specialization" >
        				 <label for="specialization">Specialization / Domain</label>
					 </div>  
					 <div class="input-field ">
					  	<input type="text" name="stipend" id="stipend" >
        				 <label for="stipend">Stipend</label>
					 </div> 
					 	
        			<div class="input-field">
        				<input type="number" name="duration" id="duration" >
        				<label for="duration">Duration in week</label>
        			</div>
        			<div class="input-field">
        				<input type="date" name="start_date" id="start_date" >
        				<label for="start_date">Start Date</label>
        			</div>
        			<div class="input-field">
        				<button class="btn waves-effect waves-light" type="submit" name="submit">Apply</button>
        			</div>
        			  

				</div>
				</form>
				
			</div>
		</div>
	</section>
</body>
<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- loadre -->
    <script type="text/javascript" src="js/loader.js"></script>
</html>