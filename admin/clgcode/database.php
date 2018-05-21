<?php
$con = mysqli_connect('localhost', 'root', '');
//$connection = mysql_connect('173.194.235.160', 'mastercode', 'sanbash');
if (!$con){
 die("Database Connection Failed" . mysqli_error($con));
}
$select_db = mysqli_select_db($con,'e-learning');
if (!$select_db){
 die("Database Selection Failed" . mysqli_error($con));
}
?>