<?php

//connect database

include 'includes/config.php';

if (isset($_POST["resubmit"])){


    //assign to values variable
                $stuID = $_POST["stuID"];
                $stuname=$_POST["stuname"];
                $enrolmentKey = $_POST["enrolmentKey"];
                
                $file = $_FILES["file"]["name"];

                $pdfname = "../answerScripts//". $file;

                //file move location
                move_uploaded_file($_FILES["file"]["tmp_name"], $pdfname);
                

                //update quary
                $sql="UPDATE `answerscript` SET stuID='$stuID',stName='$stuname',enrolmentKey='$enrolmentKey',file='$pdfname' WHERE stuID='$stuID'";

                //check condition and assign $result
                $result=mysqli_query($conn,$sql);

                    if ($result){
              
                    //alert box
                       echo  '<script>
                                    alert("Updated Successfull");
                                    window.location="submitAnswers.php";
                                </script>';
                    }

                    else{
                        
                        echo"please enter again";
                    }   

    }

?>

