<!--Connect database-->

<?php

  require 'includes/config.php';

    if (isset($_POST['submit'])){
              $Registration_Num=$_POST['registration'];
              $feedback_type=$_POST['feedback_Type'];
              $feedback=$_POST['feedback'];



                    
              $sql="INSERT INTO feedback(registration,feedback_type,feedback) VALUES ('$Registration_Num','$feedback_type','$feedback')";
              if (mysqli_query($conn,$sql)){
                        
                echo '<script>
                alert("Thank you for your response.");
                 window.location="feedback.php";
             </script>';
               }
              else{
                    echo"please enter again";
              }

            }


?>
