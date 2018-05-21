<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login Form </title>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    
    <body>
        <!-- Top content -->
        <div class="top-content">
            <?php
            require('db.php');
            session_start();
            // If form submitted, insert values into the database.
            if (isset($_POST['form-username'])){
            $username = $_POST['form-username'];
            $password = $_POST['form-password'];
            //Checking is user existing in the database or not
            $query = "SELECT * FROM `final` WHERE username='$username' and password='$password'";
            $result = mysqli_query($connection,$query) or die(mysqli_error());
            $rows = mysqli_num_rows($result);
            if($rows==1){
            $_SESSION['username']=$username;
            header("Location:http://localhost/boot/admin/");
            }else{
            echo "<div class='form-group'><h3>Username/password is incorrect or Username Already Exists....</h3><br/>Click here to <a href='index.php'>Login</a></div>";
            }
            }else{
            ?>
            <form action="" method="post" name="login">
                <div class="inner-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2 text">
                                <h1><strong>Admin</strong> Login</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Login to our site</h3>
                                        <p>Enter your username and password to log on:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="" method="post" class="login-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                        </div>
                                        <button type="submit" class="btn">Let me in!</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 social-login">
                                <h3>New User?<a href="register.php">&nbsp Register</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </form>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
        <script src="assets/js/placeholder.js"></script>
        <![endif]-->
        <?php } ?>
    </body>
</html>