<?php 
include '../dbconnect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/student_login.css">
</head>
<body>

 <div class="login-page">
 	<div class="box">
 		<div class="left">
 			<h3>Create Account</h3>
 			<button type="button" class="register-btn">Register</button>

 		</div>
 		<div class="right">
 			<h3>Have an Account ?</h3>
 			<button type="button" class="login-btn">Login</button>
 		</div>
 		<div class="form">
 			 <!-- Login form Start -->
 			 <div class="login-form">
 			 	<form id="login" action="" method="POST">
 			 	<h3>Log In</h3>
 			 	<div class="form-group">
 			 		<input type="text" name="username" placeholder="Username*" class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<input type="password" name="password" placeholder="Password*" class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<label>
 			 			<input type="checkbox"> Remember Me
 			 		</label>
 			 	</div>
 			 	<button type="submit" class="submit-btn">Login</button>
 			 	<p><a href="#" class="lost-pass-btn">Lost Your Password ?</a></p>
 			 	</form>
 			 </div>
 			 <!-- Login form End -->

             <!-- Register form Start -->
 			 <div class="register-form form-hidden">
 			 	<form id="register" action="" method="POST">
 			 	<h3>Register</h3>
 			 	<div class="form-group">
 			 		<input type="text" name="name" placeholder="Name" class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<input type="email" name="email" placeholder="Email" class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<input type="text" name="contact" placeholder="Contact No." class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<input type="text" name="college" placeholder="Select College" class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<input type="text" name="dept" placeholder="Select Department" class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<select id="college_year" name="year" class="form-control">
  					<option value="" disabled selected>--Select Year--</option>
					<option value="FE">FE</option>
  					<option value="SE">SE</option>
 					<option value="TE">TE</option>
  					<option value="BE">BE</option>
  				</select>
 			 	</div>
 			 	<div class="form-group">
 			 		<input type="text" name="col_id" placeholder="College Login ID" class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<input type="text" name="username" placeholder="Username" class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<input type="password" name="password" id="password" placeholder="Password" class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<input type="password" name="cpassword" placeholder="Confirm Password" class="form-control">
 			 	</div>
 			 	<button type="submit" class="submit-btn">Register</button>
 			 	<p><a href="#" class="lost-pass-btn">Lost Your Password ?</a></p>
 			 	</form>
 			 </div>
 			 <!-- Register form End -->

 			 <!-- Lost Password form Start -->
 			 <div class="lost-password-form form-hidden">
 			 	<h3>Lost Your Password ?</h3>
 			 	<h5>You will receive a link to create a new password via email.</h5>
 			 	
 			 	<div class="form-group">
 			 		<input type="text" placeholder="Email Address*" class="form-control">
 			 	</div>
 			 	
 			 	
 			 	<button type="button" class="submit-btn">Reset Password</button>
 			 	<p><a href="#" class="login-btn">Login</a> | <a href="#" class="register-btn">Register</a></p>
 			 </div>
 			 <!-- Lost Password form End -->

 		</div>

 	</div>
 </div>

 <script src="../js/student_login.js"></script>
 <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
 <script type="text/javascript" src="../assets/js/jquery-3.5.1.min.js"></script>
 <script type="text/javascript" src="../assets/js/jquery.validate.min.js"></script>
 <script type="text/javascript" src="../assets/js/validation.js"></script>
 <script type="text/javascript" src="../assets/js/newvalidation.js"></script>
</body>
</html>