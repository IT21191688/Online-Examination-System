<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
    <script src="https://kit.fontawesome.com/38b6b4f5e7.js" crossorigin="anonymous"></script>
    <title>SignUp page</title>
</head>

<body>
    <!-- HEADER -->
    <?php
    
        include('includes/header.php');

    ?>

    <div class="signup-main">
        <div class="register">
            <div class="title">Sign Up</div>
            <form action="includes/register.php" method="post" id="form">
                <div class="details">
                    <div class="input ">
                        <label for="fname">First Name </label>
                        <input type="text" id="fname" name="fname" placeholder="Enter your first name"
                            onkeyup="fnameValidation()">
                        <p class="error " id="fnameError"></p>

                    </div>
                    <div class="input ">
                        <label for="lname">Last Name </label>
                        <input type="text" id="lname" name="lname" placeholder="Enter your last name"
                            onkeyup="lnameValidation()">
                        <p class="error " id="lnameError"></p>

                    </div>
                    <div class="input ">
                        <label for="nic">NIC </label>
                        <input type="text" id="nic" name="nic" placeholder="Enter your NIC number"
                            onkeyup="nicValidation()">
                        <p class="error " id="nicError"></p>

                    </div>

                    <div class="input ">
                        <label for="contact">Contact Number </label>
                        <input type="text" id="contact" name="contactNo" placeholder="Enter your phone number"
                            onkeyup="contactValidation()">
                        <p class="error " id="contactError"></p>

                    </div>

                    <div class="input ">
                        <label for="email">Email </label>
                        <input type="email" id="email" name="email" placeholder="Enter your email"
                            onkeyup="emailValidation()">
                        <p class="error " id="emailError"></p>

                    </div>
                    <div class="input ">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter a username"
                            onkeyup="usernameValidation()">
                        <p class="error " id="usernameError"></p>

                    </div>
                    <div class="input ">
                        <label for="pwd">Password </label>
                        <input type="password" id="pwd" name="pwd" placeholder="Create password"
                            onkeyup="pwdValidation()">
                        <p class="error " id="pwdError"></p>

                    </div>
                    <div class="input ">
                        <label for="confirmpwd">Confirm Password</label>
                        <input type="password" id="confirmpwd" name="confirmpwd" placeholder="Confirm your password"
                            onkeyup="confirmValidation()">
                        <p class="error " id="confirmpwdError"></p>
                    </div>
                </div>
                <div class="create">
                    <input type="submit" value="Create account" class="submit" id="submit" name="submit"
                        onclick="return validateForm()">
                </div>
            </form>
            <p class="exists"><a href="login.php">Login</a> if you already have an account</p>
        </div>
    </div>

    <script src="../js/signup.js"></script>

    <!-- FOOTER -->

    <?php

    include ('includes/footer.php');

    ?>

</body>

</html>