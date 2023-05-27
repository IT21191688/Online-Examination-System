<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/inquiry.css">
    <title>Support_inquiry page</title>
</head>

<body>
    <!-- HEADER -->
    <?php 
        include 'includes/header.php';
    ?>

    
    <!--inquiry form-->
    <div class="form">
        <br>
        <h2 style="text-align: center; color:rgb(10, 233, 58)">Fill Your Inquiry</h2><br><br>
        <p class="para2">Please complete this form and one of our support officer will reply to you by email as soon as
        possible.</p>
        <hr color="white">
        <br><br>
        <!--Connect database connection file &use for transfering data to file-->
        <form action="inquiry_config.php" method = "post">

            <h3>Your Name </h3><input type="text" name="name" class="Name"  
            placeholder="Your Name"  required> <br>
            <h3>Registration Number </h3><input type="text" class="Registration" pattern="[e]{1}[m]{1}[p]{1}[0-9]{3}" name="Registration" placeholder="emp001" required>
            <br>
            <h3>Contact Number </h3> <input type="tel" name="phone" class = "p_No"  pattern="[0-9]{10}"  placeholder="Contact Number" 
                required></h3><br>
            <h3>E-mail </h3><input type="email" name = "email" class="email"  pattern = "[a-z0-9]+@+[a-z]+/.[a-z]{2-3}" placeholder="Email" required> <br>
            <label for="type">
                <h3>Request type /Inquiry Type </h3>
            </label>
            <select  name = "Inquirytype" class="type">
                <option value="type1">others</option>
                <option value="type2">I have question about examination</option>
                <option value="type3">I have question about submit answers </option>
                <option value="type4">I have question about registration</option>

            </select>


            <br>
            <h3>Inquiry subject </h3><input type="text" class="subject"  name="subject" required> <br><br>
            
            <h3>Description </h3><br>
            <input type="text" class="descripton"  name="description">
            <br>
            <input type="reset" class="reset">
            <input type="submit" name = "submit" class="submit" >
        </form>

    </div>


    <!-- FOOTER -->

    <?php 
        include 'includes/footer.php';
    ?>

</body>

</html>