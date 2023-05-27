<?php

//set file
if (isset($_FILES["file"])) {


      //initial values to variable
      $stuID = $_POST["stuID"];
      $stuname=$_POST["stuname"];
      $enrolmentKey = $_POST["enrolmentKey"];
      $exam = $_POST["exam"];

      //get file 
      $file = $_FILES["file"]["name"];

      //file location
      $pdfname = "../answerScripts//" . $file;
      move_uploaded_file($_FILES["file"]["tmp_name"], $pdfname);



//database conection
      include 'includes/config.php';



      //insert to data database
      $sql = "INSERT INTO `answerScript`(`stuID`,`stName`,`enrolmentKey`,`examID`,`file`) VALUES('" . $stuID . "','" . $stuname . "','" . $enrolmentKey . "','" . $exam . "','" . $pdfname . "'); ";

      echo "successfully you can leave the site";


      
     $conn->query($sql);

} else {

      echo "Error";
}




?>

<!--agin back to submitAnswers page--->
<script>

alert("Your submition completed. you can leave the site.");

window.location="submitAnswers.php";


</script>