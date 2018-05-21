<html>
<head>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style1.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-left">
  <a class="navbar-brand" href="#">Year</a>
  <ul class="nav navbar-nav">
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">I Year<span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
      <li><a href="http://localhost/boot/vupload/destination/eng.php">English</a></li>
      <li><a href="http://localhost/boot/vupload/destination/chem1.php">Chemistry-1</a></li>
      <li><a href="http://localhost/boot/vupload/destination/m1.php">Maths-1</a></li>
      <li class="divider"></li>
      <li><a href="http://localhost/boot/vupload/destination/pds-1.php">Pds-1</a></li>
      <li><a href="#">Chemistry-2</a></li>
	  <li><a href="#">Maths-2</a></li>
     </ul>
   </li> 
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">II Year<span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
      <li><a href="http://localhost/boot/vupload/destination/dbms.php">DBMS</a></li>
      <li><a href="#">Pds-2</a></li>
      <li><a href="#">ADC</a></li>
      <li class="divider"></li>
      <li><a href="#">MicroProcessor</a></li>
      <li><a href="#">Operating System</a></li>
     </ul>
   </li>  
   </li>    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">III Year<span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
      <li><a href="#">Sub Menu1</a></li>
      <li><a href="#">Sub Menu2</a></li>
      <li><a href="#">Sub Menu3</a></li>
      <li class="divider"></li>
      <li><a href="#">Sub Menu4</a></li>
      <li><a href="#">Sub Menu5</a></li>
     </ul>
   </li> 
  </ul>
</div>
<div class="container">
 <div class="row">
  <div id="container">
  <center><h3>Click the link below to download the file..</h3></center>
<?php

//$sql= new mysqli("173.194.235.160","mastercode","sanbash","db1");
$sql= new mysqli("localhost","root","","db1");

$query=$sql->query( "SELECT description,filename,file_extension FROM user1 where sub='sem1-2'" );

 
while ($row = $query->fetch_array(MYSQLI_ASSOC))
{
$doc_field= $row['filename'];
$descriptionvalue= $row['description'];
echo"<div><ul>
<li><a href=documents/$doc_field download>$descriptionvalue</a></li>
</ul></div>";
 
}
?>
</div>

 </div>
</div>

</body>
</html>