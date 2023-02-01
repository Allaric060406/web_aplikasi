<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor1/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <!-- <form action="main.blade.php" method="post"> -->
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form action="/register" method="post" class="login100-form validate-form">
                        @csrf
                    
                        <span class="login100-form-title p-b-26">
                            Register
                        </span>
                        <span class="login100-form-title p-b-48">
                            <i class="zmdi zmdi-font"></i>
                        </span>
                    
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="name">
                            <span class="focus-input100" data-placeholder="Username"></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="email">
                            <span class="focus-input100" data-placeholder="Email"></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="paswoord" name="password" data-validate="Enter password">
                            <span class="focus-input100" data-placeholder="Password"></span>
                        </div>
						<div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <a class="txt2" href="main.blade.php">
                                <button class="login100-form-btn">sign'up</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- </form> -->

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/bootstrap/js/popper.js"></script>
	<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/daterangepicker/moment.min.js"></script>
	<script src="vendor1/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main1.js"></script>

</body>
</html>
