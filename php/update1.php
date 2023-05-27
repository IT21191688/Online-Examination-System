<?php

    include 'includes/config.php'; //connect php file
    
    $resid=$_GET['updateid']; //Get passed value from resultDisplay page

    $sql="SELECT * FROM `result` WHERE resid=$resid"; //Select data from result table
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result); //Fetch data to array as associative array

    $stid = $row['stid'];
    $stname = $row['stname'];
    $exid = $row['exid'];
    $enroll = $row['enroll'];
    $grade= $row['grade'];

    if (isset($_POST['submit'])){ //set file
        $stid = $_POST['stid'];
        $stname = $_POST['stname'];
        $exid = $_POST['exid'];
        $enroll = $_POST['enroll'];
        $grade = $_POST['grade'];

        //Update result table
        $sql="UPDATE `result` SET resid='$resid', stid='$stid',stname='$stname',exid='$exid',enroll='$enroll',grade='$grade' WHERE resid=$resid";

        $result=mysqli_query($conn,$sql);

        if ($result){


            //Show alert promt and navigate to resultDisplay page 
            echo   
            '<script>
                alert("Updated Successfull");
                window.location="resultDisplay.php";
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
    <!--<link rel="stylesheet" type="text/css" href="../css/ResultSubmit.css">-->
    <link rel="stylesheet" type="text/css" href="../css/updateresult.css">
    <title>Update Result</title>
</head>

<body>
    <!-- HEADER -->
    <?php 
        include 'includes/header.php';
    ?>


    
            
    <form method="post" enctype="multipart/form-data" class="form1">
        <div id="div2" align="center">
            <h2 align="center">Update Result Sheet</h2><br><br>
            Student ID<br>
            <input type="text" name="stid" required value="<?php echo $stid;?>" ><br><br>
            Student Name<br>
            <input type="text" name="stname" required value="<?php echo $stname;?>" ><br><br>
            Exam ID<br>
            <input type="text" name="exid" required value="<?php echo $exid;?>" ><br><br>
            Enrollment Key<br>
            <input type="text" name="enroll" required value="<?php echo $enroll;?>" ><br><br>
            Grade<br>
            <input type="text" name="grade" required value="<?php echo $grade;?>" ><br><br><br><br>
            <button name="submit" class="load"> Update </button><br><br>
            <input type="reset" value="Reset" id="reset">
        </div>
    </form>
            
            


    <!-- FOOTER -->
    <br />
    <br />
    <?php 
        include 'includes/footer.php';
    ?>

</body>

</html>