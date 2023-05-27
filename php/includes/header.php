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
    <script src="https://kit.fontawesome.com/38b6b4f5e7.js" crossorigin="anonymous"></script>
    <title>Header</title>
</head>
<body>
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
                           <li><a href="Module.php">EXAMINATIONS</a></li>
                           <li><a href="Result.php">RESULTS</a></li>
                           <li><a href="inquiry.php">HELP & SUPPORT</a></li>
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
</body>
</html>