<?php
    $servername = "sql210.infinityfree.com";
    $username = "if0_36576876";
    $password = "VA6ca9R82nGN";
    $db_name = "if0_36576876_veritabani";
    $conn = new mysqli($servername, $username, $password, $db_name, 3306);
    if($conn->connect_error) {
        die("Connection Failed".$conn->connect_error);
    }
    echo "";
?>