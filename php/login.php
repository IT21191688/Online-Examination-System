<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="https://kit.fontawesome.com/38b6b4f5e7.js" crossorigin="anonymous"></script>
    <title>Base</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="header">
            <a href="index.php" class="logo-text"><img src="../images/logo.png" alt="logo" class="logo"><span
                    class="aPlus">A+</span><span class="exams-logo">Exams</span></a>

            <nav class="nav-bar">
                <ul>
                <?php
                        if(isset($_SESSION['username'])){

                           echo '<li><a href="index.php">HOME</a></li>
                           <li><a href="#">ABOUT US</a></li>
                           <li><a href="#">EXAMINATIONS</a></li>
                           <li><a href="#">RESULTS</a></li>
                           <li><a href="#">HELP & SUPPORT</a></li>
                           <li><a href="profile.php" class="avatar"><i class="fa-solid fa-user"></i></a></li>';
                        }
                        else{
                            echo '<li><a href="index.php">HOME</a></li>
                            <li><a href="#">ABOUT US</a></li>
                            <li><a href="login.php">EXAMINATIONS</a></li>
                            <li><a href="login.php">RESULTS</a></li>
                            <li><a href="login.php">HELP & SUPPORT</a></li><li><a href="login.php" class="login"><button class="login">LOGIN</button></a></li>';
                        }
                    ?>
                </ul>
            </nav>
        </div>

    </header>

    <div class="main-login">
        <div class="login-body">
            <div class="left pane">
                <div class="title">Login</div>
                <form action="includes/loginVal.php" method="post">

                    <div class="input">
                        <div class="insert">
                            <label for="username">Username </label>
                            <input type="text" id="username" name="username" placeholder="Enter your username"
                                onkeyup="usernameValidation()">
                        </div>
                        <p class="error " id="usernameError"></p>
                    </div>

                    <div class="input">
                        <div class="insert">
                            <label for="pwd">Password</label>
                            <input type="password" id="pwd" name="pwd" placeholder="Enter your password"
                                onkeyup="pwdValidation()">
                        </div>
                        <p class="error " id="pwdError"></p>
                    </div>
                    <div class="input">
                        <div class="insert">
                            <p class="forgot"><a href="resetPwd.php">Forgot password?</a></p>
                        </div>
                    </div>
                    <div class="btn">
                        <input type="submit" value="Login" class="submit" name="submit" id="submit"
                            onclick="return validateSubmit()">
                    </div>
                </form>
                <p class="no-acc"><a href="signup.php">Sign Up</a> if you don't have an account</p>
            </div>
            <div class="right pane">
                <p><span>Login to</span> explore more......</p>
                <img src="../images/login-bg.png" alt="login" class="login-bg">
            </div>
        </div>
    </div>

    <script src="../js/login.js"></script>


    <!-- FOOTER -->

    <?php

        include('includes/footer.php');

    ?>

</body>

</html>