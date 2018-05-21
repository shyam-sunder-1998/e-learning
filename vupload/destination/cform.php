<?php
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db($cn,'e-learning')  or die("Could connect to Database");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
	<style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>
    <body>
<form action="" method="post">  
<input type="text" name="term" placeholder="Search.." />
</form> <br/><br/> 
<?php

if (!empty($_REQUEST['term']))
{
$count=0;
$term = mysql_real_escape_string($_REQUEST['term']);     

$sql = "SELECT * FROM user WHERE description LIKE '%".$term."%' and language=1"; 

$r_query = mysql_query($sql); 
while ($row = mysql_fetch_array($r_query))
{
	$description=$row['description'];
	$code=$row['code'];
	 echo"<font face=arial size=4/>$description</font>
	<div align=center>$code</div>";
	
$count++;
} 
if($count==0)
   echo "<b><center><h1>No videos found for your request</h1></center></b>"; 

}
?>
    </body>
</html>