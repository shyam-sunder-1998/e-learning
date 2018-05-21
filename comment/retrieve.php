<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" >
	 <link rel="stylesheet" href="content/bootstrap.min.css">
  <script src="content/jquery.min.js"></script>
  <script src="content/bootstrap.min.js"></script>
  			    <!-- jQuery -->
		<script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color:#34495e;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color:#34495e;
  }
  .modal-body{
	  background-color:#fcfcfc;
  }
  #myBtn{
	  float:right;
	  
  }
  table{
	  margin:auto;
  }
  </style>
</head>
<body>
  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">JuzCode</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li style="padding-left:700px">
                        <a href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav><br/><br/>
	<h1 align="center">Query Section</h1>

<div class="container">
  <button type="button" class="btn btn-default btn-lg" id="myBtn">Reply</button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="padding:20px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Reply Here</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="reply.php" method="post">
            <div class="form-group">
              <label for="usrname">Id no.</label>
              <input type="text" class="form-control" id="idno" name="idno" placeholder="Enter idno" required>
            </div>
            <div class="form-group">
              <label for="psw"><span>Reply</span> </label>
              <input type="text" class="form-control" id="reply" name="reply" placeholder="Enter your reply" required>
            </div>
              <button type="submit" class="btn btn-primary btn-block">Reply</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 
</div>

<div id="cmntbox">
<?php

include("db.php");
	
$query= "SELECT * FROM reply Order by id desc";
$result = $con->query($query);
if ($result->num_rows>0)
{
	while($row=$result->fetch_row())
	{
		
		echo" <div class='wrap'>
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
else
	echo "no";

?>
</div> 
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>


</body>
</html>