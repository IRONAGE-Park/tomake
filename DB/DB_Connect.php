<?php
    $host = "127.0.0.1";
    $user = "root";
    $pw = "psch9612";
    $dbName = "tomake";
    $mysqli = new mysqli($host, $user, $pw, $dbName);
    if($mysqli->connect_error)
        die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
?>