<?php
    include 'includes/config.php'; //connect php file
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/dashboard1.css">
    <title>Examdisplay</title>
</head>

<body>
    <!-- HEADER -->
    <?php 
        include 'includes/header.php';
    ?>


    <fieldset class="form">

        <table class='table'> <!--Table for exam display-->
            <thead>
                <tr>
            
                    <th scope ="col" class='th1'>Exam ID</th>
                    <th scope ="col" class='th1'>Exam Name</th>
                    <th scope ="col" class='th1'>Exam Date</th>
                    <th scope ="col" class='th1'>Exam Time</th>
                    <th scope ="col" class='th1'>Enroll</th>
                    <th scope ="col" class='th1'>File Name</th>
                    <th scope ="col" class='th1' align="center">Operation</th>
            
                </tr>
            </thead>
            <tbody>
                <?php

                    $sql="SELECT * FROM `createexam`"; //Select from data from result
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){ //Fetch data as associative array
                            $id=$row['id'];
                            $exid = $row['exid'];
                            $exname = $row['exname'];
                            $exdate = $row['exdate'];
                            $extime = $row['extime'];
                            $enroll = $row['enroll'];
                            $filename = $row['filename'];

                            //Display fetched data in tabale 
                            echo
                            '<tr>
                                <td>'.$exid.'</td>
                                <td>'.$exname.'</td>
                                <td>'.$exdate.'</td>
                                <td>'.$extime.'</td>
                                <td>'.$enroll.'</td>
                                <td>'.$filename.'</td>
                                <td id="op"><a class="a" href="delete1.php?deleteid='.$id.'"><button onclick="myFunction1()" class="delete">Delete</button></a>

                                            <a class="a" href="update3.php?updateid='.$id.'"><button onclick="myFunction2()" class="edit">Edit</button></a>


                                </td>

                            </tr>';
                        }
                        
                    }

                ?>
                
            </tbody>

        </table>

    </fieldset>
    <a href="examAdminDashboard.php"><button class="add">Dashboard</button></a>

    <?php 
        include 'includes/footer.php';
    ?>
</body>
</html>
