<?php
//$connection = mysql_connect('35.184.153.26', 'mastercode', 'sanbash');
$con = mysqli_connect('localhost', 'root', '');
if (!$con){
 die("Server Connection Failed" . mysqli_error($con));
}
$select_db = mysqli_select_db($con,'e-learning');
if (!$select_db){
 die("Database Selection Failed" . mysqli_error($con));
}
?>