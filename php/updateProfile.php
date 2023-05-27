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
    <title>Update page</title>
</head>

<body>
    <!-- HEADER -->
    <?php
        include('includes/header.php');

        if(isset($_SESSION['username'])){
            
            require_once('includes/config.php');

            $uName = $_SESSION['username'];

            $sql = "SELECT * FROM `users` WHERE username = '$uName'";

            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result))
            {
                $db_fname = $row['first_name']; 
                $db_lname = $row['last_name'];
                $db_nic = $row['NIC'];
                $db_contact = $row['contactNo']; 
                $db_email = $row['email']; 
                $db_username = $row['username']; 
                $db_status = $row['status']; 
            }
    }
            else{
                echo '<script>
                        alert("No profile information");
                        window.location="login.php";
                </script>';
    }

    ?>

    <div class="signup-main" style="height: 700px;">
        <div class="register">
            <div class="title">Update your profile</div>

            <form action="includes/updateProfile.php" method="post" id="form">
                <div class="details">
                    <div class="input ">
                        <label for="fname">First Name </label>
                        <input type="text" id="fname" name="fname" placeholder="Enter your first name"
                            onkeyup="fnameValidation()" value="<?php echo $db_fname ?>">
                        <p class="error " id="fnameError"></p>

                    </div>
                    <div class="input ">
                        <label for="lname">Last Name </label>
                        <input type="text" id="lname" name="lname" placeholder="Enter your last name"
                            onkeyup="lnameValidation()" value="<?php echo $db_lname ?>">
                        <p class="error " id="lnameError"></p>

                    </div>
                    <div class="input ">
                        <label for="nic">NIC </label>
                        <input type="text" id="nic" name="nic" placeholder="Enter your NIC number"
                            onkeyup="nicValidation()" value="<?php echo $db_nic ?>">
                        <p class="error " id="nicError"></p>

                    </div>

                    <div class="input ">
                        <label for="contact">Contact Number </label>
                        <input type="text" id="contact" name="contactNo" placeholder="Enter your phone number"
                            onkeyup="contactValidation()" value="<?php echo $db_contact ?>">
                        <p class="error " id="contactError"></p>

                    </div>

                    <div class="input ">
                        <label for="email">Email </label>
                        <input type="email" id="email" name="email" placeholder="Enter your email"
                            onkeyup="emailValidation()" value="<?php echo $db_email ?>">
                        <p class="error " id="emailError"></p>

                    </div>
                    <div class="input ">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="<?php echo $db_username ?>" readonly>
                        </div>
                    
                </div>
                <div class="create">
                      <input type="submit" value="Submit" class="submit" id="submit" name="submit"
                        onclick="return validateForm()">
                </div>
            </form>
            <p class="exists"><a href="resetPwd.php">Reset your password</a></p>
        </div>
    </div>

    <script src="../js/updateProfile.js"></script>

    <!-- FOOTER -->

    <?php

    include ('includes/footer.php');

    ?>

</body>

</html>