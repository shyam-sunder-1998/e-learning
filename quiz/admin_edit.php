<?php
if(!isset($_SESSION)){
	session_start();
}
include "db.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Add</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style1.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Admin</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="admin_add.php"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;Add</a></li>
						<li class="active"><a href="admin_edit.php"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><h4 style="color:white; line-height:1.5">Welcome <?php echo $_SESSION['admin'];?></h4></li>
						<li><a href="logout2.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-body">
					<ul class="nav nav-pills">
						<li class="active"><a href="#">Edit Subject</a></li>
						<li><a href="#">Edit Level</a></li>
						<li><a href="#">Edit Question</a></li>
					</ul><br><br>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Language</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$query="SELECT sub_name FROM sub_list";
								$result=mysqli_query($con,$query);
								while($row=mysqli_fetch_array($result)){
									echo"<tr><td>$row[0]</td>";
									echo"<td><button class='btn btn-primary'>Edit</button></td>";
									echo"<td><button class='btn btn-danger'>Delete</button></td></tr>";
								}
							?>	
						</tbody>
				</div>
			</div>
		</div>
	</body>
</html>