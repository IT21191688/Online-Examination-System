<?php
    include 'includes/config.php'; //connect php file

    //set file
    if (isset($_FILES['filename'])) { //Test the form is submitted successfully

        //assign collected data to the variables
        $exid = $_POST['exid'];
        $exname = $_POST['exname'];
        $exdate = $_POST['exdate'];
        $extime = $_POST['extime'];
        $enroll = $_POST['enroll'];

        //assign file and file name
        $filename = $_FILES["filename"]["name"];

        //file move to pdf folder
        $pdfname = "../uploads//" . $filename;
        move_uploaded_file($_FILES["filename"]["tmp_name"], $pdfname); 

        $sql = "INSERT INTO `createexam`(exid,exname,exdate,extime,enroll,filename) VALUES('$exid','$exname','$exdate','$extime','$enroll','$filename')"; //Insert colect data data to createexam table

        $result=mysqli_query($conn,$sql);

        if($result){

            //Show alert promt and navigate to createExam page
            echo 
            '<script>
                alert("Atempt Successfull");
                window.location="createExam.php";
            </script>';
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
    <link rel="stylesheet" type="text/css" href="../css/create_new_exam.css">

    <title>Create Exam</title>
</head>

<body>
        <!-- HEADER -->
        
        <?php 
        include 'includes/header.php';
    ?>


    <table>
        <tr>
            <th>
              
                <div class="menu">

                    <a href="examAdminDashboard.php"><button type="button" name="dash" class="btn">Dashboard</button></a>
                    <br>
                    <br>
                    <a href="examDisplay.php"><button type="button" name="exams" class="btn">View Exams</button></a>
                    <br>
                    <br>
                    <a href="createExam.php"><button type="button" name="new" class="btn">Create New Exam</button></a>
                     
                </div>

            </th>

            <th class="t2">

                <div class="CreateExam">

                    <h3> Create New Exam</h3>

                    <br>
                    <br>
                     
                    <fieldset>
                        <br>
                        <form id="newexam" method="post" enctype="multipart/form-data"> <!--Create exam form-->
                        
                            <lable for="exid" class="lable"> Exam ID: </lable> <br>
                            <input type="text" id="exid" name="exid" class="btn1" placeholder="ex1234" required><br><br>

                            <lable for="exname" class="lable"> Exam Name: </lable> <br>
                            <input type="text" id="exname" name="exname" class="btn1" placeholder="Full Name" required><br><br>

                            <lable for="exdate" class="lable"> Exam Date:<br></lable>
                            <input type="Date" id="exdate" name="exdate" class="btn1" required><br><br>

                            <lable for="extime" class="lable"> Exam Time:<br></lable>
                            <input type="Time" id="extime" name="extime" class="btn1" required><br><br>

                            <lable for="enroll" class="lable"> Enrollment Key:<br></lable>
                            <input type="text" id="enroll" name="enroll" class="btn1" placeholder="en1234" required><br><br>

                            <lable for="filename" class="lable"> Exam Paper:<br></lable>
                            <input type="file" id="file" name="filename" class="btn1" required><br>
                            
                            <br>
                            <br>
                            <br>
                            <button name="sumbit" id="finish"> Create New Exam </button><br><br> <!--Submit button-->
                            <input type="reset" value="Reset" id="finish"> <!--Reset Button-->
                            <br>
                            <br>

                        </form>

                    </fieldset>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>

            </th>

        </tr>

    </table>

    <?php 
        include 'includes/footer.php';
    ?>

</body>

</html>