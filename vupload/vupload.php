<?php 

//$connection= new mysqli("173.194.235.160","mastercode","sanbash","db1");
$connection= new mysqli("localhost","root","","e-learning");
if ($connection->connect_error)
{
    die("Connection failed: " . $connection->connect_error);
}



$description= $_POST['description'];
$value=$_POST['lang'];
$embedd=$_POST['embedd'];
if (isset($embedd)) 
{
	if (!empty($description&&$embedd))		
	{
		
		$a=$connection->query("INSERT INTO user (id,language,description,code)VALUES ('','$value','$description','$embedd')");
		if($a)
		{
		
		echo "<script>alert('Uploaded Successfully!');</script>";
		echo "<script>document.location.href='http://localhost/boot/vupload/vupload.html'</script>";
		}
		else
		{
			echo "<script>alert('Upload Failure!');</script>";
		}
	
	}
			
}

?>
