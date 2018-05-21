<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Registration Form </title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
	<?php
 require('db.php');
 if (isset($_POST['form-username'])){
 $username = $_POST['form-username'];
 $reg = $_POST['form-reg'];
 $clgcode = $_POST['form-clgcode'];
 $password = $_POST['form-password'];

 $query = "INSERT into users (id,username,password,reg_num,clgcode) VALUES ('','$username','$password','$reg','$clgcode')";
 $result = mysqli_query($con,$query);
 if($result){
 echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
 }
 else{
    echo"failure";
 }
 }else{
?>

        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Student</strong> Registration</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Register Here</h3>
                            		<p>Enter your username,e-mail and password to register:</p>
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
                                        <label class="sr-only" for="form-reg">Registration Number</label>
                                        <input type="text" name="form-reg" placeholder="Registration number..." class="form-username form-control" id="form-username">
                                    </div>
									<div class="form-group">
                                        <label class="sr-only" for="form-clgcode">College Code</label>
                                        <input type="text" name="form-clgcode" placeholder="College Code..." class="form-username form-control" id="form-username">
                                    </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-password"> Confirm Password</label>
			                        	<input type="password" name="form-cpassword" placeholder="Confirm Password..." class="form-cpassword form-control" id="form-cpassword">
			                        </div>
			                        <button type="submit" id="button" class="btn">Register</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
		
		<script type="text/javascript">
    $(function () {
        $("#button").click(function () {
            var password = $("#form-password").val();
            var confirmPassword = $("#form-cpassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>

<?php } ?>
</body>

</html>