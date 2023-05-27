<?php
$host = "localhost";
$user = "root";
$database = "a+_online_exam";
$password = "";

if ($conn = new mysqli($host, $user, $password, $database)) {
    //connection successful
} else {
    //error message in database connection
    echo 'Database Error';
    exit;
}
?>