<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="../css/header.css" />
  <link rel="stylesheet" type="text/css" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/submitAnswers.css" />
  <title></title>
</head>

<body>
  <!-- HEADER -->
  <?php 
        include 'includes/header.php';
    ?>




  <section class="section1">
    <!----clock-->

    <div class="clock">
      <span id="hours">00</span>
      <span>:</span>
      <span id="minutes">00</span>
      <span>:</span>
      <span id="seconds">00</span>
      <span id="session">AM</span>
    </div>
    <div></div>



<!---check what paper employee select-->
    <?php

    error_reporting(0);
    $state=$_GET['state'];


    switch($state){
      
      case "ex0011":
        $exid="../papers/ex0011.pdf";
        break;

      case "ex0012":
        $exid="../papers/ex0012.pdf";
        break;
      
      case "ex0013":
        $exid="../papers/ex0013.pdf";
        break;

      case "ex0021":
        $exid="../papers/ex0021.pdf";
        break;

      case "ex0022":
        $exid="../papers/ex0022.pdf";
        break;

      case "ex0023":
        $exid="../papers/ex0023.pdf";
        break;

      case "ex0031":
        $exid="../papers/ex0031.pdf";
        break;

      case "ex0032":
        $exid="../papers/ex0032.pdf";
        break;

      case "ex0033":
        $exid="../papers/ex0033.pdf";
        break;

      case "ex0041":
        $exid="../papers/ex0041.pdf";
        break;

      case "ex0042":
        $exid="../papers/ex0042.pdf";
        break;

      case "ex0043":
        $exid="../papers/ex0043.pdf";
        break;

      
    }
    ?>




<!-----paper download --->
    <div class="downloadSec">
      <h4>Download Your paper Here</h4>
      <br /><br /><br><br><br>

      <a href="<?php echo $exid ?>" class="dBtn" >Download</a>
     
      
    </div>



    <!---instructions--->

    <div class="instructions">
      <h1>Instructions For Employee</h1>
      <li>Please download paper and write answers.</li>
      <li>Upload answer sheet before dedline.</li>
      <li>No cell phones or other secondary devices in the room or test area.</li>
      <li>Your desk/table must be clear or any materials except your test-taking device.</li>
      <li>No one else can be in the room with you.</li>
      <li>No use of additional applications or internet.</li>
      <li style="color:red;">Rename your answer sheet student ID</li>
    </div>



    <!----- submit answer script--->

    <div class="submitBtnGrp">
      <div class="upload">
        <h3>Please upload your answer sheet here</h3><br>

        <form action="Aupload.php" method="post" enctype="multipart/form-data"><!--sending file ----->


        <span class="inputFont">Employee Id:</span><br>
        <input type="text" name="stuID" class="input" placeholder="Student id" required pattern="[e]{1}[m]{1}[p]{1}[0-9]{3}"><br>
        <br>

        <span class="inputFont">Employee name:</span>
        <input type="text" name="stuname" class="input" placeholder="Student name" required><br>
        <br>


        <span class="inputFont">Enrolment Key:</span>
        <input type="text" name="enrolmentKey" class="input" placeholder="Enrolment key" required required pattern="[e]{1}[n]{1}[0-9]{4}"><br><br>

      <select name="exam" required class="selectExam">
          <option value="1">S1 E1</option>
          <option value="2">S1 E2</option>
          <option value="3">S1 E3</option>
          <option value="4">S2 E1</option>
          <option value="5">S2 E2</option>
          <option value="6">S2 E3</option>
          <option value="7">S3 E1</option>
          <option value="8">S3 E2</option>
          <option value="9">S3 E3</option>
          <option value="10">S4 E1</option>
          <option value="11">S4 E2</option>
          <option value="12">S4 E3</option>
      </select><br><br>

        <input type="file" name="file" required class="noFile"/>
        </div><br>

        
        <button class="submitbtn" name="submit" >Submit Paper</button>

        
      </form>
      <button class="Edit" ><a href="AnswerScriptEdit.php">Edit Submition</a></button>
    </div>


  </section>



  <!-- FOOTER -->

  <?php 
        include 'includes/footer.php';
    ?>


  <script src="../js/submitAnswers.js"></script>
</body>

</html>