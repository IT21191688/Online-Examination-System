<?php
    include 'includes/config.php'; //connect php file

    $id=$_GET['updateid']; //Get passed value from examDisplay page

    $sql="SELECT * FROM `createexam` WHERE id=$id"; //Select data from crateexam table

    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_assoc($result); //Fetch data to array

    $exid = $row['exid'];
    $exname = $row['exname'];
    $exdate = $row['exdate'];
    $extime = $row['extime'];
    $enroll = $row['enroll'];

    
    if (isset($_FILES['filename'])) { //set file

        $exid = $_POST['exid'];
        $exname = $_POST['exname'];
        $exdate = $_POST['exdate'];
        $extime = $_POST['extime'];
        $enroll = $_POST['enroll'];

        
        $filename = $_FILES["filename"]["name"]; //assing file and file name

        
        $pdfname = "../uploads//" . $filename; //assing file path

        move_uploaded_file($_FILES["filename"]["tmp_name"], $pdfname); //file move to uploads folder

        //Update createexam table
        $sql = "UPDATE `createexam` SET id='$id', exid='$exid', exname='$exname', exdate='$exdate', extime='$extime', enroll='$enroll' WHERE id=$id";

        $result=mysqli_query($conn,$sql);

        if($result){

            //Show alert promt and navigate to examDisplay page 
            echo
            '<script>
                alert("Updated Successfull"); 
                window.location="examDisplay.php";
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

    <title>Update test</title>
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

                <button type="button" name="dash" class="btn">Dashboard</button>
                <br>
                <br>
                <button type="button" name="exams" class="btn">View Exams</button>
                <br>
                <br>
                <button type="button" name="new" class="btn">Create New Exam</button>
     
            </div>

        </th>

        <th class="t2">

            <div class="CreateExam">

                <h3> Create New Exam</h3>

                <br>
                <br>
     
                <fieldset>
                    <br>

                    <form id="newexam" method="post" enctype="multipart/form-data"> <!--Form for update data-->
                    
                    <lable for="exid" class="lable"> Exam ID: </lable> <br>
                    <input type="text" id="exid" name="exid" class="btn1" placeholder="ex1234" value="<?php echo $exid;?>" ><br><br>

                    <lable for="exname" class="lable"> Exam Name: </lable> <br>
                    <input type="text" id="exname" name="exname" class="btn1" placeholder="Full Name" value="<?php echo $exname;?>"><br><br>

                    <lable for="exdate" class="lable"> Exam Date:<br></lable>
                    <input type="Date" id="exdate" name="exdate" class="btn1" value="<?php echo $exdate;?>"><br><br>

                    <lable for="extime" class="lable"> Exam Time:<br></lable>
                    <input type="Time" id="extime" name="extime" class="btn1" value="<?php echo $extime;?>"><br><br>

                    <lable for="enroll" class="lable"> Enrollment Key:<br></lable>
                    <input type="text" id="enroll" name="enroll" class="btn1" placeholder="en1234" value="<?php echo $enroll;?>"><br><br>

                    <lable for="filename" class="lable"> Exam Paper:<br></lable>
                    <input type="file" id="file" name="filename" class="btn1"><br>

                    <br>
                </fieldset>

                <br>
                <br>
                <button name="sumbit" id="finish"> Update </button><br><br>
                
                <br>
                <br>
                </form>
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