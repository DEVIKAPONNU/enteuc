<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Student Profile</title>
<link rel="stylesheet" href="css/cas.css" />
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body style="background-image: url('images/banner.jpg'); background-repeat: no-repeat;">
<div class="wrapper">
<div id="formContent" >
	<div class="card card-4" >
					<div class="card-body" >
<h2><b>PROFILE</b></h2><br/>

<table border="1px" height="200" width="600" >
<tr >
  <td width="150">Name:</td>
  <td width="150"> <?php echo $_SESSION['username']; ?></td>
</tr>
<tr>
  <td width="150"  >Admission No:</td>
  <td width="150"><?php echo $_SESSION['admno']; ?></td>
</tr>
<tr>
  <td width="150"  >Department Name:</td>
  <td width="150"><?php echo $_SESSION['dept_name']; ?></td>
</tr>
<tr>
  <td width="150">Year:</td>
  <td width="150"><?php echo $_SESSION['year']; ?></td>
</tr>
<tr>
  <td width="150">Blood Group:</td>
  <td width="150"><?php echo $_SESSION['blood']; ?></td>
</tr>
<tr>
  <td width="150">Email:</td>
  <td width="150"><?php echo $_SESSION['email']; ?></td>
</tr>
</table>
<br/>
<p><a href="edit.php">Edit Profile</a></p>
<p><a href="delete.php">Delete Profile</a></p>
<p><a href="logout.php">Logout</a></p>
</div></div></div></div>
</body>
</html>
