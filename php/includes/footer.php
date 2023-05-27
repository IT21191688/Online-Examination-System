<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="https://kit.fontawesome.com/38b6b4f5e7.js" crossorigin="anonymous"></script>
    <title>Footer</title>
</head>
<body>
<footer>
        <div class="footer-main">
            <div class="column">
                <h2>Contact Us</h2>
                <br />
                <ul>
                    <li><a href="#">About Us</a></li>

                    <?php

                        if(isset($_SESSION['username'])){
                            echo  '<li><a href="inquiry.php">Help and Support</a></li>
                            <li><a href="feedback.php">Feedback</a></li>';
                        }
                        else{
                            echo  '<li><a href="login.php">Help and Support</a></li>
                            <li><a href="login.php">Feedback</a></li>';
                        }

                    ?>
                </ul>
            </div>
            <div class="column">
                <h2>Quick Links</h2><br />
                <ul>
                <?php

                    if(isset($_SESSION['username'])){
                        echo  '<li><a href="Module.php">Examinations</a></li>
                        <li><a href="Result.php">Results</a></li>
                        <li><a href="profile.php">View Profile</a></li>';
                    }
                    else{
                        echo  '<li><a href="login.php">Examinations</a></li>
                        <li><a href="login.php">Results</a></li>
                        <li><a href="login.php">View Profile</a></li>';
                    }

                ?>
                    
                </ul>
            </div>
            <div class="column">
                <h2>Follow Us</h2><br />
                <div class="icons">
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
