<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/homepage.css">
    <script src="https://kit.fontawesome.com/38b6b4f5e7.js" crossorigin="anonymous"></script>
    <title>Home page</title>
</head>

<body>
    <!-- HEADER -->
    <?php 

    include('includes/header.php');

    ?>

        <!-- HOME PAGE -->
    <div class="header-down">
        <div class="signupContent">
            <div class="left-content">

            <?php
            
            if(isset($_SESSION['username'])){

                require_once('includes/config.php');

                $uName = $_SESSION['username'];

                $sql = "SELECT first_name, last_name, status FROM users WHERE username = '$uName'";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($result)){

                    $fname = $row['first_name'];
                    $lname = $row['last_name'];
                    $status = $row['status'];
                }
                
                echo "<p>Welcome....</p><a href='profile.php' class=\"view-profile\"><p ><i class='fa-solid fa-circle-check'></i>  $fname $lname</p></a>";

                if($status == "Administrator"){
                    echo "<p class='para'>You can now manage the system functionality</p>
                    <a href='signup.php'><button class='signup';>Dashboard</button></a>";
                }
                else if($status == "ExamAdmin"){
                    echo "<p class='para'>You can now manage your exams</p>
                    <a href='examAdminDashboard.php'><button class='signup'>Dashboard</button></a>";
                }
                else if($status == "Examiner"){
                    echo "<p class='para'>You can manage the results</p>
                    <a href='examinerDashboard.php'><button class='signup'>Dashboard</button></a>";
                }
                else if($status == "SupportOfficer"){
                    echo "<p class='para'>You can now respond to the inquiries of the users</p>
                    <a href='Custom_Officer_dashboard.php'><button class='signup'>Dashboard</button></a>";
                }
                else if($status == "Employee"){
                    echo "<p class='para'>Experience smooth exams through this versatile platform";
                }
                
                

            }
            else{
                echo '<p>Sign Up to explore more</p>
                <p class="para">Get the opportunity to take your exams smoother</p>
                <a href="signup.php"><button class="signup">Sign Up</button></a>';
            }
            
            ?>

            </div>
            <div class="right-content">
                <img src="../images/bg3.png" alt="cover-photo" class="cover-pic">
            </div>
        </div>
    </div>

    <br />
    <h1 class="topic"><img src="../images/logo.png" alt="logo" class="logo"><span
            class="aPlus logo-letter">A+</span><span class="text-logo">Exams</span><span>Online
        Examination Platform</span>
    </h1>
    <br />

    <div class="main-body">
        <div class="first-card card">
            <div class="left-pane section">
                <img src="../images/take-exam.png" alt="Taking an exam" class="take-exam image">
            </div>
            <div class="right-pane section">
                <p><span>Take your exams</span><span>smoothly and effectively</span> <span>through this user-friendly
                        platform</span><br />

                        <?php

                            if(isset($_SESSION['username'])){
                                echo  '<span><a href="Module.php"><button class="actions">Take an Exam</button></a></span>';
                            }
                            else{
                                echo  '<span><a href="login.php"><button class="actions">Take an Exam</button></a></span>';
                            }

                        ?>
                                             
                </p>
            </div>
        </div>
        <div class="second-card card">
            <div class="left-pane section">
                <p><span>You can check</span><span>your results here </span><span>quickly right after an
                        exam</span><br />
                        <?php

                            if(isset($_SESSION['username'])){
                                echo  '<span><a href="Result.php"><button class="actions">View Results</button></a></span></p>';
                            }
                            else{
                                echo  '<span><a href="login.php"><button class="actions">View Results</button></a></span></p>';
                            }

                        ?>
                                                
            </div>
            <div class="right-pane section">
                <img src="../images/view-result.png" alt="Viewing results" class="result image">
            </div>
        </div>
        <div class="third-card card">
            <div class="left-pane section">
                <img src="../images/support.png" alt="Support Center" class="support image">
            </div>
            <div class="right-pane section">
                <p><span>24/7 available</span><span>support center provides</span><span> you with the best
                        service</span><br />
                        
                        <?php

                            if(isset($_SESSION['username'])){
                                echo  '<span><a href="inquiry.php"><button class="actions third-btn">Help and Support
                                Center</button></a></span>';
                            }
                            else{
                                echo  '<span><a href="login.php"><button class="actions third-btn">Help and Support
                                Center</button></a></span>';
                            }

                        ?>
                        
                </p>
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <br />
    <br />

    <?php
    
    include('includes/footer.php');

    ?>
    
</body>

</html>