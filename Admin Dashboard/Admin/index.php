<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
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
                <a href="manage_menu.php">
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

        <br><br><br><br>
        <div class="values">
            <div class="val-box">
                <span class="las la-users"></span>
                <div>
                    <h3>Manage Users</h3>
                    <a href="manage_menu.php">View</a>
                </div>
            </div>
            <div class="val-box">
                <span class="las la-shopping-cart"></span>
                <div>
                    <h3>Notices</h3>
                    <a href="##">View</a>
                </div>
            </div>
            <div class="val-box">
                <span class="las la-clipboard"></span>
                <div>
                    <h3>Manage Exams</h3>
                    <a href="##">View</a>
                </div>
            </div>
            <div class="val-box">
                <span class="las la-wallet"></span>
                <div>
                    <h3>Manage Result </h3>
                    <a href="##">View</a>
                </div>
            </div>
        </div>


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

</body>

</html>