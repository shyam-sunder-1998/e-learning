<?php 

//$connection= new mysqli("173.194.235.160","mastercode","sanbash","db1");

$connection= new mysqli("localhost","root","","db1");
if ($connection->connect_error)
{
    die("Connection failed: " . $connection->connect_error);
}


$name= $_FILES['filename']['name'];
$tmp_name= $_FILES['filename']['tmp_name'];
$type= $_FILES['filename']['type'];
$sub= $_POST['sub'];
$description= $_POST['description'];
if (isset($name)) 
{
	if (!empty($name))		
	{
		$a=move_uploaded_file($tmp_name,"destination/documents/".$name);
		$b=$connection->query("INSERT INTO user1 (id,sub,description, filename,file_extension)VALUES ('','$sub','$description', '$name','$type')");
		if($a&&$b)
		{
			echo "<script>alert('Uploaded Successfully!');</script>";
			echo "<script>document.location.href='http://localhost/boot/vupload/vupload.html'</script>";			
		}	
	
	}
			
}

?>