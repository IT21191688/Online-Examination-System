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


<!-- Examiners -->
<div class="products">
<h3 class="i-name">Examiner</h3>
<?php
include_once("Db.php");
    $sql = "SELECT * FROM examiner";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    ?>
            <table class="scrolldown">
                <thead class="thead">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                <?php  while($row=$result->fetch_assoc()){ 
            echo '<tr>';
                echo '<th scope="row">'.$row['id'].'</th>';
                echo '<td >'.$row['name'].'</td>';
                echo '<td >'.$row['email'].'</td>';
                echo '<td>';
                echo '
                <form action="editExaminer.php" method="POST" class="d-inline">
                <input type="hidden" name="id" value='.$row["id"].'>
                <button type="submit" class="btn-info" name="view" value="View">EDIT</button>
                </form>
                <form action="" method="POST" class="d-inline">
                <input type="hidden" name="id" value='.$row["id"].'>
                    <button type="submit" class="btn-secondary" name="delete" value="Delete">
                    DELETE
                    </button>
                    </form>
                </td>
            </tr>';
            } ?>
                </tbody>
                <?php }
                else{ echo "<p class='text-dark p-2 fw-bolder'>Examiner Not Found. </p>";} 
    
                if(isset($_REQUEST['delete'])){
                    $sql="DELETE FROM examiner WHERE id={$_REQUEST['id']}";
                    if($conn->query($sql)==TRUE){
                        echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
                    }else{
                        echo "Delete Failed";
                    }
                }
                ?>
            </table>
            

<br><br>
            <h3 class="i-name">Exam Administrator</h3>
            <?php
    $sql = "SELECT * FROM examadmin";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    ?>
            <table class="scrolldown1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <?php  while($row=$result->fetch_assoc()){ 
            echo '<tr>';
                echo '<th scope="row">'.$row['id'].'</th>';
                echo '<td >'.$row['name'].'</td>';
                echo '<td >'.$row['email'].'</td>';
                echo '<td>';
                echo '
                <form action="editExamAdmin.php" method="POST" class="d-inline">
                <input type="hidden" name="id" value='.$row["id"].'>
                <button type="submit" class="btn-info" name="view" value="View">EDIT</button>
                </form>
                <form action="" method="POST" class="d-inline">
                <input type="hidden" name="id" value='.$row["id"].'>
                    <button type="submit" class="btn-secondary" name="delete" value="Delete">
                    DELETE
                    </button>
                    </form>
                </td>
            </tr>';
            } ?>
                </tbody>
                <?php }
                else{ echo "<p class='text-dark p-2 fw-bolder'>Examiner Not Found. </p>";} 
    
                if(isset($_REQUEST['delete'])){
                    $sql="DELETE FROM examadmin WHERE id={$_REQUEST['id']}";
                    if($conn->query($sql)==TRUE){
                        echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
                    }else{
                        echo "Delete Failed";
                    }
                }
                ?>
            </table>
            
                
        </div>

</body>

</html>