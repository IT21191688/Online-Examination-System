<?php

session_start();

use LDAP\Result;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $NIC = $_POST['nic'];
    $contact = $_POST['contactNo'];
    $email = $_POST['email'];

    if(isset($_POST['submit'])){
        
        if(empty($userName || $email)){
            echo '<script>
                alert("Empty fields");
                window.location="../updateProfile.php";
                </script>';
            exit();
        }
        else{

            require_once ('config.php');

                $uName = $_SESSION['username'];

                $sql = "UPDATE users SET first_name = '$fname', last_name = '$lname', NIC = '$NIC', contactNo = '$contact', email = '$email' WHERE username = '$uName'";
            
                $result = mysqli_query($conn, $sql);

                if($result == true){
                    header("location:../profile.php?UpdateSuccessful");
                }else{
                    echo '<script>
                    alert("An error occured while you are trying to submit the form");
                    window.location="../updateProfile.php?UpdateFailed";
                    </script>';
                    exit();
                }
            }
    
    }
    else{
        echo '<script>
        alert("Empty fields");
        window.location="../updateProfile.php?EmptyFields";
        </script>';
        exit();
    }


?>
