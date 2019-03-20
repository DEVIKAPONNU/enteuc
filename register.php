<!DOCTYPE HTML>
<html>
	<head>
		<title>enteUC</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.contain {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding-left: 500px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
	</head>
	<body class="no-sidebar">
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
		$pass = stripslashes($_REQUEST['pass']);
		$pass = mysqli_real_escape_string($con,$pass);
		$dept_name = stripslashes($_REQUEST['dept_name']);
		$year = stripslashes($_REQUEST['year']);
		//	$year = mysqli_real_escape_string($con,$year);
		$blood = stripslashes($_REQUEST['blood']);
		//$blood = mysqli_real_escape_string($con,$blood);
		$email= stripslashes($_REQUEST['email']);
		//	$distance = mysqli_real_escape_string($con,$distance);
		$reservation_id = stripslashes($_REQUEST['reservation_id']);
		//	$reservation_id = mysqli_real_escape_string($con,$reservation_id);

		$query = "INSERT INTO `reg`(`username`, `admno`, `dept_name`, `year`, `blood`, `email`, `pass`) VALUES ('$username','$admno','$pass','$dept_name`','$year','$blood','$email')";
		$result = mysqli_query($con,$query);
		if($result){
			if($reservation_id==4){
				$query = "INSERT INTO `sc_st` (`admission_no`, `rank_point`,`rank`)
					VALUES ('$admission_no', '$rank_point',NULL);";
					mysqli_query($con,$query);
			}
			else{
				$query = "INSERT INTO `general` (`admission_no`, `rank_point`,`rank`)
					VALUES ('$admission_no', '$rank_point',NULL);";
					mysqli_query($con,$query);
			}
            echo "<div class='form'>
			<h3>You are registered successfully.<br/>Your Username is </h3><h2>$admission_no
			<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }
?>
		<!-- Header -->
		<div id="header">
			<div class="container">

				<!-- Logo -->
				<div id="logo"><br><br>
					<h1><a href="#">എന്‍റെ UC</a></h1><br>
					<span><font size="2">Developed in ❤️ with UC</font></span>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html">HOME</a></li>
						<li><a href="enquiry.html">ENQUIRY</a></li>
						<li><a href="facility.html">FACILITY</a></li>
						<li><a href="map.html">MAP</a></li>
						<li><a href="login.php">LOGIN</a></li>
						<li class="active">REGISTER</li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Content -->
					<div id="content" class="12u skel-cell-important">
						<section>
							<header>
								<center><h2>REGISTER</h2></center>
							</header>
						</section>
					</div>

				</div>
			</div>
		</div>

		<div class="contain">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Country</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
		<!-- Footer
		<div id="featured" align="center">
			<div class="contain" align="center">
				<div class="row" align="center">
					<div class="4u" align="center">
					<b>
						<?php include('action.php'); ?>
						<form name="registration"  action="register.php" method="post" align="center" class="container" >
							<div class="contain">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>
							<div style="width: 100%" >
							USERNAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
								<input style="width:220px" type="text" name="username" required>
							</div>
							<br>
							<div style="width: 100%" >
							ADMISSION NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
								<input style="width:220px" type="text" name="admno" required>
							</div>
							<br>
							<div style="width: 100%" >
							PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
								<input style="width:220px" type="text" name="pass" required>
							</div>
							<br>
							<div style="width: 100%" >
							DEPARTMENT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
								<input style="width:220px" type="text" name="dept_name" required>
							</div>
							<br>
							<div>
							YEAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
								<select name="year" required  >
									<option value=""hidden>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							<div>
							<br>
							<div>
							BLOOD GROUP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
								<select name="blood" required  >
									<option value=""hidden>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
											<option value="O+">O+</option>
											<option value="O-">O-</option>
											<option value="AB+">AB+</option>
											<option value="AB-">AB-</option>
											<option value="A+">A+</option>
											<option value="A-">A-</option>
											<option value="B+">B+</option>
											<option value="B-">B-</option>
										</select>
									</div>
								</div>
							</div>
							<br>
							<div style="width: 100%" >
							EMAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
								<input style="width:220px" type="text" name="email" required>
							</div>
							<br>
							<br><br>
							<div align="center">
							<input type="submit" name="register" value="Register" />
							</div>
						</form>
						<?php echo $passworderr;?><br>
				</b>
				</div>
			</div>
		</div> -->
		<div id="copyright">
			<div class="container">
			</div>
		</div>

	</body>
</html>
