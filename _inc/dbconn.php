<?php
//define ("DB_SERVER", "localhost");
//	define ("DB_USER", "admin");
//define ("DB_PASSWORD", "root");
//define ("DB_DATABASE", "bank_db");
$con = mysqli_connect("localhost", "root", "root", "bank_db");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }
  $db_select=mysqli_select_db($con,'bank_db');
if(!$db_select) {
	die ("database selection failed: ". mysqli_error($con));
}
?>