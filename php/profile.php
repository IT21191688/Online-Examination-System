<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <script src="https://kit.fontawesome.com/38b6b4f5e7.js" crossorigin="anonymous"></script>
    <title>Profile</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="header">
            <a href="index.php" class="logo-text"><img src="../images/logo.png" alt="logo" class="logo"><span
                    class="aPlus">A+</span><span class="exams-logo">Exams</span></a>

            <nav class="nav-bar">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">EXAMINATIONS</a></li>
                    <li><a href="#">RESULTS</a></li>
                    <li><a href="#">HELP & SUPPORT</a></li>
                    <li><a href="includes/logout.php" class="login"><button class="login">LOGOUT</button></a></li>

                </ul>
            </nav>
        </div>
    </header>


    <!-- BODY -->


    <?php

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


    <div class="view-profile">
        <div class="section">
            <div class="profile-icon">
                <i class="fa-solid fa-circle-user"></i>
            </div>
            <div class="username">

                <?php
                   echo "<p>$db_username</p>";
                ?>
                
            </div>
            <div class="status">

                <?php
                    echo "<p>$db_status</p>";
                    ?>

            </div>
            <div class="details">
                <div class="row">
                    <p class="title">First Name</p>

                        <?php

                            echo "<p class='db-detail'>$db_fname</p>";

                        ?>

                  </div>
                <div class="row">
                    <p class="title">Last Name</p>

                        <?php

                            echo "<p class='db-detail'>$db_lname</p>";

                        ?>

           
                </div>
                <div class="row">
                    <p class="title">NIC</p>

                        <?php

                            echo "<p class='db-detail'>$db_nic</p>";

                        ?>

           
                </div>
                <div class="row">
                    <p class="title">Contact Number</p>

                        <?php

                            echo "<p class='db-detail'>$db_contact</p>";

                        ?>

           
                </div>
                <div class="row">
                    <p class="title">Email</p>

                        <?php

                            echo "<p class='db-detail'>$db_email</p>";

                        ?>

           
                </div>
                <div class="row">
                    <p class="title">Username</p>

                        <?php

                            echo "<p class='db-detail'>$db_username</p>";

                        ?>

           
                </div>
            </div>
            <div class="buttons">
                <a href="updateProfile.php"><button class="btn update"><i class="fa-solid fa-file-pen"></i>
                        Update
                        Profile</button></a>
                <a href="includes/deleteProfile.php"><button class="btn delete"><i
                            class="fa-solid fa-person-circle-minus"></i> Delete Profile</button></a>
            </div>
        </div>

    </div>


    <!-- FOOTER -->
    
   <?php

   include ('includes/footer.php');

   ?>


</body>

</html>