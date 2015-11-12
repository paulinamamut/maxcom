<?
    $host="localhost";
    $user="root";
    $pass="root";
    $db="maxcom_adq";
    $conn = mysqli_connect($host, $user, $pass);
    mysqli_select_db($conn, $db);
    mysqli_set_charset($conn,"utf8");