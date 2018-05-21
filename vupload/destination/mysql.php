<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
	
</head>
<body>

<form action="form.php" method="post" style="float:right"> 
<b>Search:</b> <input type="text" name="term" /> 

</form><br/><br/> 
<?php
$sql= new mysqli("localhost","root","","db1");
//$sql= new mysqli("173.194.235.160","mastercode","sanbash","db1");
$query=$sql->query( "SELECT description,code FROM user where language=8" );
 
while ($row = $query->fetch_array(MYSQLI_ASSOC))
{ 

$descriptionvalue= $row['description'];
$embedd=$row['code'];
 echo"<font face=arial size=4/>$descriptionvalue</font>
<div align=center>$embedd</div>";
}
?>
</body>
</html>

