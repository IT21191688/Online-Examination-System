<?php

require('config.php');

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);
    
    if(!($result)){
        
        die ("Query failed : " .mysqli_error($conn));
    }
    else{
        while($row = mysqli_fetch_assoc($result)){
            $db_username = $row['username'];
            $db_password = $row['password'];
        }

        if($db_username != $username){
            $msg = "Invalid username";
            echo "<script>alert('$msg')</script>";
            header("refresh:0; url=../login.php?InvalidUsername");
        }
        else if($db_password != $password){
            $msg = "Invalid password";
            echo "<script>alert('$msg')</script>";
            header("refresh:0; url=../login.php?InvalidPassword");
        }
        else if($db_username == $username && $db_password == $password){
            
            session_start();
            $_SESSION['username'] = $db_username;
            
            header("refresh:0; url=../index.php?LoginSuccessful");
        }

    }

}else{
    $msg = "Empty fields";
    echo "<script>alert('$msg')</script>";
    header("refresh:0; url=../login.php?EmptyFields");

}
