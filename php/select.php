<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/select.css">
    <title>Select</title>
</head>

<body>
    <!-- HEADER -->
    <?php 
        include 'includes/header.php';
    ?>


   <div class="div">
        <button id="emp" class="btn">I am Employee</button> <!--if button clicks navigate to employees' part-->
        <br>
        <br>
        <button id="exm" class="btn">I am Examinner</button> <!--if button clicks navigate to Examinners' part-->
   </div>


    <!-- FOOTER -->
    <br />
    <br />

    <?php 
        include 'includes/footer.php';
    ?>

</body>

</html>