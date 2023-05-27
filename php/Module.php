<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="../css/header.css" />
  <link rel="stylesheet" type="text/css" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/Module.css" />
  <title>Module Page</title>
</head>

<body>
  <!-- HEADER -->
  <?php 
        include 'includes/header.php';
    ?>

  <section>
    <!----clock-->

    <div class="clock">
      <span id="hours">00</span>
      <span>:</span>
      <span id="minutes">00</span>
      <span>:</span>
      <span id="seconds">00</span>
      <span id="session">AM</span>
    </div>
    <br>

    <div class="btnGroup1">
      <br>
      <h1 class="heading">Subjects</h1>
      <br /><br />

      <h3>Select correct Subject and correct link</h3><br><br>

      <!--button group-->

      <div class="btnSet">
        <center>
        <table>
          <tr>
            <th>
              <div class="drop">
                <button class="btn">Subject 1</button>
                <div class="dContent">
                  <a href="submitAnswers.php?state=ex0011">Exam 1</a>
                  <a href="submitAnswers.php?state=ex0012">Exam 2</a>
                  <a href="submitAnswers.php?state=ex0013">Exam 3</a>
                </div>
              </div>
            </th>

            <th>
              <div class="drop">
                <button class="btn">Subject 2</button>
                <div class="dContent">
                  <a href="submitAnswers.php?state=ex0021">Exam 1</a>
                  <a href="submitAnswers.php?state=ex0022">Exam 2</a>
                  <a href="submitAnswers.php?state=ex0023">Exam 3</a>
                </div>
              </div>
            </th>

            <th>
              <div class="drop">
                <button class="btn">Subject 3</button>
                <div class="dContent">
                  <a href="submitAnswers.php?state=ex0031">Exam 1</a>
                  <a href="submitAnswers.php?state=ex0032">Exam 2</a>
                  <a href="submitAnswers.php?state=ex0033">Exam 3</a>
                </div>
              </div>
            </th>

            <th>
              <div class="drop">
                <button class="btn">Subject 4</button>
                <div class="dContent">
                  <a href="submitAnswers.php?state=ex0041">Exam 1</a>
                  <a href="submitAnswers.php?state=ex0042">Exam 2</a>
                  <a href="submitAnswers.php?state=ex0043">Exam 3</a>
                </div>
              </div>
            </th>
          </tr>
        </table>
        </center>
      </div>
    </div>


   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
  </section>

  <!-- FOOTER -->
  <br />
  <br />

  <?php 
        include 'includes/footer.php';
    ?>

  <script src="../js/Module.js"></script>
</body>

</html>