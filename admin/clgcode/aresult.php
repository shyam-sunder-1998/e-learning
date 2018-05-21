<?php
if(!isset($_SESSION)){
	session_start();
}?>
<!DOCTYPE html>
<html>
	<head>
		<title>Results</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../quiz/style1.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="panel panel-default" style="margin-top: 8%;">
				<div class="panel-body"><br/>
					<h3 class="text-center">Results</h3><br>
					<table  class="table table-bordered table-hover">
						<thead>
						<tr>
							<th>Name</th>
							<th>Marks</th>
						</tr>
						</thead>
						<tbody>
						<?php
						include("database.php");
						$code=$_POST['code'];
						$reg=array();$i=0;
						$query="SELECT username,reg_num from users where clgcode='$code'";
						$result=mysqli_query($con,$query);
						while($row1=mysqli_fetch_row($result)){
							$reg[$i++]=$row1[1];
						}
						for($j=0;$j<$i;$j++){
							$query="SELECT reg_num,total from scores where reg_num='$reg[$j]'";
							$result=mysqli_query($con,$query);
							while($row2=mysqli_fetch_row($result)){
								echo"<tr><td>$row2[0]</td>";
								echo"<td>$row2[1]</td></tr>";
								}
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>