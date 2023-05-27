<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <a href="index.html"> 
        <i class='bx bxl-unsplash' ></i> 
    </a>
      <span class="logo_name">Dashboard</span>
    </div>
      <ul class="nav-links">
       
        <li>
          <a href="Custom_Officer_dashboard.php">
            <i class='bx bx-help-circle' ></i>
            <span class="links_name">Help and Support</span>
          </a>
        </li>
        <li>
        <li class="log_out">
          <a href="index.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Home</span>
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
      
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Support Officer</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    <br/> <br/><br/> <br/>

    
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

 </script>


<?php
include ("includes/config.php");//connect database connection file
?>
<br/><br/>
<?php

$readTable="SELECT * FROM inquiry";//read all data in table


$readData = $conn->query($readTable);//assign readtable data to $readdata for check condition

if ($readData->num_rows > 0){
  //display table headings
    echo"
    <table class='table1'>
    <tr class='tablerow'>
        <th>Employee Name</th>
        <th>Registration_Number</th>
        <th>Email</th>
        <th>Inquiry_type</th>
        <th>subject</th>
        <th>Description</th>
        <th>Status</th>
        <th>Operation</th>

        
    </tr>
    </thead>
    <tbody>
        ";
            while($row = $readData->fetch_assoc()){//fetch data
                   $id=$row['id'];//access parameter using get method and assign to variable 
                   //display data        
                echo "
                <tr class='row2'>
                
                    <td>{$row['name']}</td>
                    <td>{$row['Registration']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['Inquirytype']}</td>
                    <td>{$row['subject']}</td>
                    <td>{$row['description']}</td>
                    <td style='color:red;'>{$row['status']}</td>
                    
                    <td>

                    <button class='update'><a href='update.php?updateid=".$id."'>Update</a></button>
                    <button class='delete'><a href ='delete.php?deleteid=".$id."'>Delete</a> </button>
                    </td>
                            </tr>

                                ";
                    }
    }
?>
</div>
</body>
</html>