
<?php

    require ('includes/config.php');

    //store data inside the database and assign variables
    if (isset($_POST['submit'])){
              $Your_Name=$_POST['name'];//this values assign to variables
              $Registration_Number=$_POST['Registration'];
              $Contact_Number=$_POST['phone'];
              $Email=$_POST['email'];
              $Inquiry_Type =$_POST['Inquirytype'];
              $Inquiry_subject =$_POST['subject'];
              $Description =$_POST['description'];



               //Insert values to table     
              $sql="INSERT INTO inquiry(name,Registration,phone,email,Inquirytype,subject,description) VALUES ('$Your_Name','$Registration_Number','$Contact_Number','$Email','$Inquiry_Type','$Inquiry_subject','$Description')";

              if (mysqli_query($conn,$sql)){ //check conditon & mysqli method has $con,$sql parameters 

                  echo //aleret box
                  '<script>

                    alert("Thank you for your response");
                    window.location="inquiry.php";

                  </script>';

               }

              else{
                    echo"please enter data again";
              }

            }




?>