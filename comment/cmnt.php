<?php

include ("db.php");

$no=$_POST['regno'];
$name=$_POST['username'];
$cmnt=$_POST['comment'];
$b="INSERT INTO reply VALUES('','$no','$name',NOW(),'$cmnt','No replies yet')";
if(!empty($no&&$name))
{

	if($con->query($b))
	{
		echo "<script>alert('Posted Successfully!');</script>";
		echo "<script>document.location.href='http://localhost/comment/one.html'</script>";
		
	}
	else
	{
		echo "<script>alert('Sorry!Couldn't Submit your queries');</script>";
	}
	
}
else
{
	echo "please fill all the fields";
}


?>