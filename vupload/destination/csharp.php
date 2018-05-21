<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
</head>
<body>
<?php

$sql= new mysqli("173.194.235.160","mastercode","sanbash","db1");
$query=$sql->query( "SELECT description,filename FROM user where language=5" );
 
while ($row = $query->fetch_array(MYSQLI_ASSOC))
{ 
$videos_field= $row['filename'];
$video_show= "vupload/destination/videos/$videos_field";
$descriptionvalue= $row['description'];
 echo"<font face=arial size=4/>$descriptionvalue</font>
<div align=center><video width='320' height ='320' controls><source src=videos/$videos_field >
	</video></div>";
}
?>
</body>
</html>

