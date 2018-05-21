<?php
$con=new mysqli("localhost","root","","e-learning");
//$con=new mysqli("173.194.235.160","mastercode","sanbash","commentdb");
if ($con->connect_error) 
{
    die("Connection failed: " . $con->connect_error);
}

?>