<?php 
    session_start();
    if(isset($_SESSION['user_id']) && isset($_SESSION['user_name'])){
        // 세션이 등록되어있는 경우
        $_GET['user_id'] = $_SESSION['user_id'];
        $_GET['user_name'] = $_SESSION['user_name'];
        include "profile.php";
    }
    else include "login.html";
?>