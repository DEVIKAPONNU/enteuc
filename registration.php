
<!DOCTYPE html>
<html>
<head>
<title>enteUC</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/reg.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body style="background-image: url('images/banner.jpg');">
	<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
			// removes backslashes
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$admno = stripslashes($_REQUEST['admno']);
			//escapes special characters in a string
	$admno = mysqli_real_escape_string($con,$admno);
	$dept_name = stripslashes($_REQUEST['dept_name']);
	$year = stripslashes($_REQUEST['year']);
	//	$year = mysqli_real_escape_string($con,$year);
	$blood = stripslashes($_REQUEST['blood']);
	//$blood = mysqli_real_escape_string($con,$blood);
	$email= stripslashes($_REQUEST['email']);
	//	$distance = mysqli_real_escape_string($con,$distance);
	$pass = stripslashes($_REQUEST['pass']);
	$pass = mysqli_real_escape_string($con,$pass);

	$query = "INSERT INTO `reg`(`username`, `admno`, `dept_name`, `year`, `blood`, `email`, `pass`) VALUES ('$username','$admno','$pass','$dept_name`','$year','$blood','$email')";
	$result = mysqli_query($con,$query);
}
?>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				 <?php include('action.php'); ?>
				<form  action="registration.php" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required=""><br>
					<input class="text" type="text" name="admno" placeholder="Admission No" required=""><br>
					<input class="text" type="text" name="dept_name" placeholder="Department" required=""><br>
					<input class="text" type="text" name="year" placeholder="year" required=""><br>
					<input class="text" type="text" name="blood" placeholder="blood" required=""><br>
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="pass" placeholder="Password" required="">
					<?php echo $passworderr;?>
					<input type="submit" value="SIGNUP">
				</form>

				<p><a href="index.html">Home  </a>Already have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->

		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>
