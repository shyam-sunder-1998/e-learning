<?php

include ("db.php");
$id=$_POST['idno'];
$reply=$_POST['reply'];
$b="UPDATE reply SET reply='$reply' WHERE id='$id' ";
	if($con->query($b))
	{
			echo "<script>alert('Replied Successfully!');</script>";
		echo "<script>document.location.href='http://localhost/boot/comment/retrieve.php'</script>";
	}
	else
	{
		echo "failure";
	}

	
?>
