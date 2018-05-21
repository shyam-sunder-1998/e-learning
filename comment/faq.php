
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
</head>
<body>
	<h1 align="center">FAQ</h1>

<?php

include("db.php");
	
$query= 'SELECT id, regno, name, comment,reply FROM reply';
if ($result = $con->query($query))
{
	echo "<table border=2 align=center><tr class=style 3><td align width=80>id <td align width=80> Name <td align width=80>Comment<td align width=80>Reply";

	while($row=$result->fetch_row())
	{

		
		echo "<tr class=style6><td align=width 400>$row[0]<td align=center> $row[2]<td align=center> $row[3]<td align=center> $row[4]";


	}
}

?>


</body>
</html>