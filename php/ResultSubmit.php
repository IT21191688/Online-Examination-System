<?php
    include 'includes/config.php'; //connect php file

    if (isset($_POST['submit'])){ //Test the form is submitted successfully

        //assign collected data to the variables
        $stid = $_POST['stid'];
        $stname = $_POST['stname'];
        $exid = $_POST['exid'];
        $enroll = $_POST['enroll'];
        $grade = $_POST['grade'];

        $sql="INSERT INTO `result`(stid,stname,exid,enroll,grade) VALUES ('$stid','$stname','$exid','$enroll','$grade')"; //Insert colect data data to result table 

        $result=mysqli_query($conn,$sql);

        if ($result){
                  
            //Show alert promt and navigate to ResultSubmit page 
            echo   
            '<script>
                alert("Atempt Successfull");
                window.location="ResultSubmit.php";
            </script>';
        }

        else{
                            
            echo"please enter again";
        }
                

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/ResultSubmit.css">
    <title>Result Page</title>
</head>

<body>
    <!-- HEADER -->
    <?php 
        include 'includes/header.php';
    ?>


    <center>
        
        
        <th id="th">

            <form method="post" enctype="multipart/form-data" class="form1"> <!--Result Submit form-->
                <div id="div2">
                    <h2>Upload Result Sheet:</h2><br><br>
                    Student ID:
                    <input type="text" name="stid" required><br><br>
                    Student Name:
                    <input type="text" name="stname" required><br><br>
                    Exam ID:
                    <input type="text" name="exid" required><br><br>
                    Enrollment Key:
                    <input type="text" name="enroll" required><br><br>
                    Grade:
                    <input type="text" name="grade" required><br><br><br><br>
                    <button name="submit" class="load"> submit </button><br><br>
                    <input type="reset" value="Reset" id="reset">
                </div>
            </form>
        </th>
        
    </center>

    <div class="last">
        <a href="examinerDashboard.php"><button class="add">Dashboard</button></a>
    </div>

    <!-- FOOTER -->
    <br />
    <br />

    <?php 
        include 'includes/footer.php';
    ?>

</body>

</html>