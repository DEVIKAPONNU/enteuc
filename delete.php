<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<?php
require('db.php');
// If form submitted, insert values into the database.
$ad=$_SESSION['admno'];

$query = "delete from `reg`
WHERE `reg`.`admno` = '$ad';";
$result=mysqli_query($con,$query);
if($result){
  header("Location: login.php");
}
?>
