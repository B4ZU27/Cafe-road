<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "caferoad";

    $conn = mysqli_connect($host, $user, $pass, $db) or die("Connection Failed" .mysqli_connect_error());

?>