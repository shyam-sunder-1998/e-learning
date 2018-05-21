<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<LINK REL=StyleSheet HREF="bg.css" TYPE="text/css" >
	<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" >
</head>
<body>
<div id="cmntbox">
	<h1 align="center">Query Section</h1>

	<?php
	include ("db.php");
	$a=$_POST['regno'];
		
	$query= "SELECT * FROM reply WHERE regno='$a'";
	$result = $con->query($query);

	if($result->num_rows>0)
	{
		while($row=$result->fetch_row())
		{
			
			echo" <div class='wrap'  style='margin-top:50px;'>
			<img src='css/images/avatar.png'>
			<div class='comment' data-owner='Dexter'>
				<div class='owner'>
				<p><b style='float:right;'>Idno:$row[0]</b></p>
				<h3 style='font-style:italic;'>$row[2]</h3>
				</div>
				<p style='font-size:18px;'>$row[4]</p>
				<div class='postscript'>
				<h><b style='font-size:15px';>$row[5]</b></p>
					<li class='date'>$row[3]</li>
				</div>
			</div>
		</div>";


		}
	}
	else{		
		echo "<script>alert('Please enter a valid regno./mobile no!');</script>";
		echo "<script>document.location.href='http://localhost/comment/one.html'</script>";
		
	}

	?>
</div>
</body>
</html>
