<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - AlphaCode</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Basic|Roboto&display=swap" rel="stylesheet"> 
    <link href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css' rel='stylesheet' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js'></script>


</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['name'])) {
        echo $_SESSION['msg'];
    }

    ?>
    <div class="container-fluid main-content">
        <div class="row">
            <!-- <div class="col-lg-12"> -->
                <div class="col-lg-6 col-md-6 pull-left sidebar">
                    <div class="sidebar-content">
                        <img src="programming-code.png" alt="">
                        <h1>Welcome To AlphaCode</h1>
                        <p>Enter your details </p>
                        <p>and start your journey with us </p>
                        <a href="signup.php" class="btn signUp__button">Sign Up</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 pull-right">
                    <div class="login_form_container" >
                        <h2>Sign in to AlphaCode</h2>
                        <form method="POST" action="login.php">
                        <div class='form-group'>
                            <input type="text" name="uname" class="form-control username_box" placeholder="Username" required minlength="3">
                        </div>
                        <div class="form-group">
                            <input type="password" id="pword" name="pword" class="form-control password_box" placeholder="Password" pattern='[a-zA-Z]{3,15}' title="Must contain at least one uppercase and  lowercase letter, and at least 3 or more characters" required>
                        </div>
                        <div class="forgot">
                            <a href="#">Forgot Password?</a>
                        </div>
                            <button class="signIn__button" name="login" type="submit">Sign In</button>
                        </form>
                        <div id="message">
                            <div class="alert alert-danger" role="alert">
                                <h5>Password must contain the following:</h5>
                                <p id="letter" class="invalid">&bull; A lowercase letter</p>
                                <p id="capital" class="invalid">&bull; A capital (uppercase) letter</p>
                                <p id="length" class="invalid">&bull; Minimum 3 characters</p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js" ></script>
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</body>

</html>