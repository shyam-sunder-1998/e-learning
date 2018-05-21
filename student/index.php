<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Student Portal</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/round-about.css" rel="stylesheet">
        <LINK REL=StyleSheet HREF="css/style.css" TYPE="text/css" MEDIA=screen>
        <style>
        .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
        }
        @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
        }
        @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
        }
        .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }
        .close:hover,
        .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        }
        .modal-header {
        padding: 2px 16px;
        background-color:#8585ad;
        color: white;
        }
        .modal-body {
        padding: 2px 16px;
        background-color:#80aaff;
        }
        .modal-footer {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
        }
        </style>
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
                        <li>
                            <a href="logout.php">Log Out</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome to Student Portal</h1>
                    <p>Here, you can master your coding skills by watching tutorials,taking online test,clearing your doubts through
                    query section and can download various notes.</p>
                    
                    
                    
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="http://localhost/boot/student/lang/"><img class="img-circle img-responsive img-center" src="css/s1.jpg" alt=""></a>
                    <h3>Watch Tutorials
                    
                    </h3>
                    
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="http://localhost/boot/quiz/index.php" id="myBtn"><img class="img-circle img-responsive img-center" src="css/s2.jpg" alt=""></a>
                
                <h3>Online Test
                </h3></div>
                
            
            <div class="col-lg-4 col-sm-6 text-center">
                <a href="http://localhost/boot/comment/one.html"><img class="img-circle img-responsive img-center" src="css/s3.jpg" alt=""></a>
                <h3>Query Section
                
                </h3>
                
            </div>
            </div>
            
            <div class="col-lg-4 col-sm-6 text-center">
                <a href="http://localhost/boot/vupload/destination/eng.php"><img class="img-circle img-responsive img-center" src="css/s5.jpg" alt=""></a>
                <h3>Downloads
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