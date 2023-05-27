<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Manage Users</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <a href="index.php">
                <i class='bx bxl-unsplash'></i>
            </a>
            <span class="logo_name">Dashboard</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="manage_menu.php" class="active">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Manage Users</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-book'></i>
                    <span class="links_name">Exams</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-book-bookmark'></i>
                    <span class="links_name">Results</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-help-circle'></i>
                    <span class="links_name">Help and Support</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-note'></i>
                    <span class="links_name">Notices</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Settings</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">A+ ONLINE EXAMINATION</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <!--<img src="images/profile.jpg" alt="">-->
                <span class="admin_name">Administrator</span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>


        <script>
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".sidebarBtn");
            sidebarBtn.onclick = function() {
                sidebar.classList.toggle("active");
                if (sidebar.classList.contains("active")) {
                    sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                } else
                    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        </script>


        <?php
        include_once('Db.php');
        if (isset($_REQUEST["add"])) {
            if (($_REQUEST['name'] == "") || ($_REQUEST['address'] == "")) {
                $msg = '<div class="alert">Name And Email Required.</div>';
            } else {
                $name = $_REQUEST['name'];
                $email = $_REQUEST['address'];
                $sql = "INSERT INTO examiner( name, email) VALUES ('$name','$email')";
                if ($conn->query($sql) == TRUE) {
                    $msg = '<div class="success">Examiner Added Successfully</div>';
                    echo "<script>setTimeout(()=>{window.location.href='manage_users.php';},500);</script>";
                } else {
                    $msg = '<div class="alert">Examiner Added Failed</div>';
                }
            }
        }
        ?>



        <!-- Examiners -->
        <div class="products">
            <h3 class="i-name">Add Examiner</h3>

            <form class="Add" action="" method="POST">
                <?php if (isset($msg)) {
                echo $msg;
            } ?><br><br>
                <label for="fname">Name:</label>
                <input placeholder="Name" type="text" id="name" name="name"><br>
                <label for="lname">Email Address:</label>
                <input placeholder="Email Address" type="text" id="address" name="address"><br><br>
                <input type="submit" name="add" value="Submit">
                
            </form>
            

        </div>
</body>

</html>