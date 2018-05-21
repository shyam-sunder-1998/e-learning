<?php
//$connection = mysql_connect('35.184.153.26', 'mastercode', 'sanbash');
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
 die("Database Connection Failed" . mysqli_error());
}
$select_db = mysqli_select_db($connection,'e-learning');
if (!$select_db){
 die("Database Selection Failed" . mysqli_error());
}
?>