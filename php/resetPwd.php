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
    <title>Reset Password</title>
</head>

<body>
    <!-- HEADER -->
    
    <?php
        include('includes/header.php');
    ?>

    <!-- BODY -->

    <div class="main-login" style="height: 700px;">
        <div class="login-body" style="width: 35vw;">
            <div class="left pane">
                <div class="title">Reset Password</div>
                <form action="includes/reset.inc.php" method="post">

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
                            <label for="username">Email </label>
                            <input type="text" id="email" name="email" placeholder="Enter your email"
                                onkeyup="emailValidation()">
                        </div>
                        <p class="error " id="emailError"></p>
                    </div>

                    <div class="input">
                        <div class="insert">
                            <label for="pwd">Enter a new password</label>
                            <input type="password" id="pwd" name="pwd" placeholder="Enter your password"
                                onkeyup="pwdValidation()">
                        </div>
                        <p class="error " id="pwdError"></p>
                    </div>


                    <div class="input">
                        <div class="insert">
                            <label for="pwd">Confirm Password</label>
                            <input type="password" id="confirmPwd" name="confirmPwd" placeholder="Confirm password"
                                onkeyup="confirmValidation()">
                        </div>
                        <p class="error " id="confirmpwdError"></p>
                    </div>
                    <div class="btn">
                        <input type="submit" value="Reset" class="submit" name="submit" id="submit"
                            onclick="return validateForm()">
                    </div>
                </form>

            </div>

        </div>
    </div>

    <script src="../js/resetPwd.js"></script>


    <!-- FOOTER -->
    <?php

    include('includes/footer.php');

    ?>

</body>

</html>