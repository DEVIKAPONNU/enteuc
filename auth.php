<?php
session_start();
if(!isset($_SESSION["admission_no"])){
header("Location: login.php");
exit(); }
?>
