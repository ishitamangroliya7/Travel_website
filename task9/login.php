<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include("inc/stylesheet.php"); ?>
        <link rel="stylesheet" href="assets/css/login.css">
    </head>

    <body>

    <?php include("inc/header2.php"); ?>
       
        <div class="wrapper">
            <div class="loginBox" data-aos="zoom-in" data-aos-delay="100"
            data-aos-duration="1000">
                <div class="loginHeader">
                    <span>TRAVELGO</span>
                </div>
                <div class="inputBox">
                    <input type="text" id="user" class="inputField" required>
                    <label for="user" class="label">Name</label>
                </div>
                <div class="inputBox">
                    <input type="password" id="pass" class="inputField" required>
                    <label for="pass" class="label">Password</label>
                </div>
                <div class="forgot">
                    <div class="rememberme">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <div class="forgotpass">
                        <a href="">Forgot Password?</a>
                    </div>
                </div>
                <div class="inputBox">
                    <input type="submit" class="theme-btn" onclick="goBack()" value="Login">
                </div>
                <div class="regester">
                    <span>Don't have an account? <a href="signup.php">Sign-up</a></span>
                </div>
            </div>
        </div>
    
        <?php include("inc/contact.php"); ?>
        
        <?php include("inc/script.php"); ?>

    </body>

</html>