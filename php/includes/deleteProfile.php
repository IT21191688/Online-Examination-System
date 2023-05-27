<?php

    session_start();

    if(isset($_SESSION['username'])){  

        require_once('config.php');

        $uName = $_SESSION['username'];

        $sql = "DELETE FROM users WHERE username = '$uName'";

        $result = mysqli_query($conn, $sql);

        if($result){
            include_once('logout.php');
            header("location:../index.php?AccountDeletedSuccessfully");
        }
        else{
            echo '<script>
                alert("Query execution failed");
                window.location="../profile.php?ExecutionFailed";
                </script>';
        }

    }
    else{
        echo '<script>
            alert("Session error");
            window.location="../index.php?SessionEmpty";
        </script>';
    }

?>