<?php
require('db.php');
$passworderr= "";
if (isset($_POST['reg'])) {
		$username = $_POST['username'];
		$pass = $_POST['pass'];



		 $query3 = "SELECT * FROM `reg` WHERE `reg`.`username` ='$username' AND `reg`.`pass`='$pass'";
			$results3 = mysqli_query($con, $query3);

			if (!mysqli_num_rows($results3) == 1)
				{ 	$passworderr  = "Invalid Username or Password"; }

			}
if (isset($_POST['register'])) {
		$username = $_POST['username'];
		$query3 = "SELECT * FROM `reg` WHERE `reg`.`username` ='$username'";
			$results3 = mysqli_query($con, $query3);

			if (mysqli_num_rows($results3) == 1)
				{ 	$passworderr  = "Admission Number Already exists!!"; }
			else{
				$passworderr="Registered Successfully! Re Log!!";
			}
}

 ?>
