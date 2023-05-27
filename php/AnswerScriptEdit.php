<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="../css/header.css" />
  <link rel="stylesheet" type="text/css" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/AnswerScriptEdit.css">
  <title>Edit Answer Script</title>
</head>

<body>
  <!-- HEADER -->
  <?php 
        include 'includes/header.php';
    ?>
<section>



    <h1 class="notice">If You Upload New Answer Script, Old Answer Script Automaticly Replaced.</h1>

    <!---Search student ID --->
    <div class="searchBar">
      <?php
          if (isset($_POST['submit'])) {

            $example = $_POST['example'];
         
         }
      ?>

    <!--- search form--->
    <form action="" method="post">
      <center><span id="studentID">Student ID</span> <br><br><br>
      <input name="example" type="text" class="textBox"/><br><br>
      <input name="submit" type="submit" class="searchBtn" /></center>
    </form>

    </div>

    <!---connect UpdateAnswerRead.php ---->
    <?php
    include("includes/config.php");
    ?>

    <?php

    error_reporting(0);


    /*get data from answerscript table*/
    $readTable="SELECT stuID,stName,enrolmentKey FROM answerscript WHERE stuID='$example'";

    
    $readData = $conn->query($readTable);

            if ($readData->num_rows > 0){
                

                while($row = $readData->fetch_assoc()){
                              
                     /*initialize data to variable*/
                      $stuID=$row['stuID'];
                      $stName=$row['stName'];
                      $enKey=$row['enrolmentKey'];
                                
                 }


          }
                    

    ?>



    <div class="submitBtnGrp">

    <h2 class="rHead">If You need to resubmit new Answer Script, Please Upload Here.</h2><br><br>
        <form action="UpdateAnswerScript.php" method="post" enctype="multipart/form-data">
       <center> <span class="inputFont">Student Id:</span><br>
        <input type="text" name="stuID" class="input" placeholder="Student id" value="<?php echo $stuID ?>" required><br><!--Auto fill form data-->
        <br>

        <span class="inputFont">Student name:</span><br>
        <input type="text" name="stuname" class="input" placeholder="Student name" value="<?php echo $stName ?>" required><br>
        <br>


        <span class="inputFont">Enrolment Key:</span><br>
        <input type="text" name="enrolmentKey" class="input" placeholder="Enrolment key" value="<?php echo $enKey ?>" required><br><br>

        <input type="file" name="file" required class="noFile"/>
        <br><br></center>

        
        <center><button class="submitbtn" name="resubmit">Submit</a</button></center>
        </form>
    </div>





</section>



<br><br><br><br>

    <!-- FOOTER -->
  <br />
  <br />

  <?php 
        include 'includes/footer.php';
    ?>

  <script src="../js/Module.js"></script>
</body>

</html>