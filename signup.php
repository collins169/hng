<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup - AlphaCode</title>
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
                <div class="col-lg-6 col-md-6 pull-left sidebar-signup">
                    <div class="sidebar-content">
                        <img src="programming-code-blue.svg" alt="">
                        <h1>Welcome Back</h1>
                        <p>To keep connected with friends </p>
                        <a href="index.php" class="btn signUp__button">Sign In</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 pull-right login_form-signup">
                    <div class="login_form_container" >
                        <h2 style="color: #FFFFFF">Create Account</h2>
                        <form method="POST" action="register.php">
                        <div class='form-group'>
                            <input type="text" name="uname" class="form-control username_box" placeholder="Username" required minlength="3">
                        </div>
                        <div class="form-group">
                            <input type="password" id="pword" name="pword" class="form-control password_box" placeholder="Password" pattern='[a-zA-Z]{3,15}' title="Must contain at least one uppercase and  lowercase letter, and at least 3 or more characters" required>
                        </div>
                        <div class="form-group">
                            <input type="password" id="cpword" name="cpword" class="form-control password_box" placeholder="Confirm Password" pattern='[a-zA-Z]{3,15}' title="Must contain at least one uppercase and  lowercase letter, and at least 3 or more characters" required>
                        </div>
                        <div class="forgot">
                            <a href="#" style="color: #FFFFFF">Forgot Password?</a>
                        </div>
                            <button class="signIn__button_2" name="login" type="submit">Sign In</button>
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
    </div><script src="assets/js/script.js"></script>
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js" ></script>
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</body>

</html>