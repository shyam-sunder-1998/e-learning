<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:http://localhost/boot/");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Portal</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/round-about.css" rel="stylesheet">
	<LINK REL=StyleSheet HREF="css/style.css" TYPE="text/css" MEDIA=screen>


</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">JuzCode</a>
            </div>
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li style="padding-left:700px">
                        <a href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
      
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Welcome To Faculty Portal
                    
                </h1>
                
            </div>
        </div>

        <div class="row">
           
            <div class="col-lg-4 col-sm-6 text-center">
                <a href="http://localhost/boot/vupload/vupload.html"><img class="img-circle img-responsive img-center" src="css/images/a4.jpeg" alt=""></a>
                <h3>Uploads
                    
                </h3>
               
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <a href="http://localhost/boot/quiz/index.php"><img class="img-circle img-responsive img-center" src="css/images/s2.jpg" alt=""></a>
                <h3>Online Test
                    
                </h3>
                
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <a href="http://localhost/boot/admin/clgcode/"><img class="img-circle img-responsive img-center" src="css/images/a5.jpg" alt=""></a>
                <h3>Mark List
                  
                </h3>
                
            </div>
           
            <div class="col-lg-4 col-sm-6 text-center">
                <a href="http://localhost/boot/comment/retrieve.php"><img class="img-circle img-responsive img-center" src="css/images/a3.jpg" alt=""></a>
                <h3>Query section
                    
                </h3>
              
            </div>
            
        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Juzcode</p>
                </div>
            </div>
        </footer>

    </div>
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>
