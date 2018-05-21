<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
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
    width: 30%;
}
</style>
</head>
<body>

<form action="cform.php" method="post" > 
<input type="text" name="term" placeholder="Search.." style="margin-left:20px;"/> 

</form><br/><br/> 

<?php
$sql= new mysqli("localhost","root","","db1");
//$sql= new mysqli("173.194.235.160","mastercode","sanbash","db1");
$query=$sql->query( "SELECT description,code FROM user where language=1" );
 
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

