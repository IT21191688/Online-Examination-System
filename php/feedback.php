<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/feedback.css">
    <title>Feedback page</title>
</head>

<body>
    <!-- HEADER -->
    <?php 
        include 'includes/header.php';
    ?>


   
<!-- Feedback -->
<form action="config.php" method="post">

    <div class="main1">
        <p class="para1"><br>Feel free to drop us your feedback </p>
        <h3>Registration Number :</h3><input type="text" class="Registration" name="registration" required>
        <P class="para2">
        <h3>How satisfied were you with our services</h3>
        </p>

        <select name="feedback_Type" class="type" required>
            <option value="feedback1">Excellent</option>
            <option value="feedback2">Good</option>
            <option value="feedback3">Poor</option>
        </select>


        <div><br>
            <h3>Type your feedback:</h3><br> <br>
            <textarea name="feedback" cols="45" rows="10"> </textarea>
        </div>
        <input type="submit" class="submit" name="submit">
    </div>

</form>
    <!-- FOOTER -->
  
    <?php 
        include 'includes/footer.php';
    ?>

</body>

</html>