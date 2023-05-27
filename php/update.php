<?php

    include 'includes/config.php';


    $id=$_GET['updateid'];//access parameter using get method and assign to variable
    
    
    //store data inside the database and assign variables
    if (isset($_POST['submit'])){
              $Your_Name=$_POST['name'];
              $Registration_Number=$_POST['Registration'];
              $Contact_Number=$_POST['phone'];
              $Email=$_POST['email'];
              $Inquiry_subject =$_POST['subject'];
              $Description =$_POST['description'];
              $status = $_POST['status'];


               //Updates values in table     
              $sql="UPDATE `inquiry` set status='$status' WHERE id=$id";
              if (mysqli_query($conn,$sql)){ //check conditon & mysqli method has $con,$sql parameters

                  echo //aleret box

               '<script>

                  alert("Updated successfully.");
                  window.location="Custom_Officer_dashboard.php";  

                </script>';
               }
              else{
                    echo"please enter data again";
              }

            }

?>
    <?php

    error_reporting(0);
    //read data in table
    $readTable="SELECT name,Registration,phone,email,subject,description FROM inquiry WHERE id='$id'";

    $readData = $conn->query($readTable);//assign readtable data to $readdata for check condition

                            if ($readData->num_rows > 0){
                

                            while($row = $readData->fetch_assoc()){//fetch data

                                $Your_Name=$row['name'];//display data 
                                $Registration_Number=$row['Registration'];
                                $Contact_Number=$row['phone'];
                                $Email=$row['email'];
                                $Inquiry_subject=$row['subject'];
                                $Description=$row['description'];
                                $status=$row['status'];

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
    <link rel="stylesheet" type="text/css" href="../css/inquiry.css">
    <title>Support_inquiry page</title>
</head>

<body>
    

    
    <!--inquiry form-->
    <div id="form" >
        <br>
        <h2 style="text-align: center; color:rgb(10, 233, 58)">Update Inquiry</h2><br><br>
        <p class="para2">After clicking update button, can fill status box and submit.After that, Updated data is going to custom office dashboard directly.</p>
        <hr color="white">
        <br><br>
        <form action="" method = "post"><!--use for transfering data to file-->

            <h3>Your Name </h3><input type="text" name="name" class="Name"  value="<?php echo $Your_Name; ?>"
            placeholder="Your Name"  required> <!--Auto fill form data --><br>
            <h3>Registration Number </h3><input type="text" class="Registration" value="<?php echo $Registration_Number; ?>" name="Registration" placeholder="st001" required>
            <br>
            <h3>Contact Number </h3> <input type="tel" name="phone" class = "p_No" value="<?php echo $Contact_Number; ?>" pattern="[0-9]{10}"  placeholder="Contact Number" 
                required></h3><br>
            <h3>E-mail </h3><input type="text" name = "email" class="email" value="<?php echo $Email; ?>" pattern = "[a-z0-9]+@+[a-z]+/.[a-z]{2-3}" placeholder="Email" required> <br>
            

            <br>
            <h3>Inquiry subject </h3><input type="text" class="subject" value="<?php echo $Inquiry_subject; ?>" name="subject" required> <br><br>
            <h3>Description </h3><br>
            <input type="text" class="descripton" value="<?php echo $Description; ?>" name="description">
            
            <br><br><br>
            <h3>Status</h3><input Type="text" class="status" name="status"><br><br>
            
            <input type="submit" name = "submit" class="submit" >
        </form>

    </div>


</body>

</html>




            
