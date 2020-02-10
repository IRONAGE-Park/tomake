<?php
    /* DataBase에 접근하여 ID와 NickName의 중복 여부를 확인하는 PHP File */
    include 'DB_Connect.php';
    $id = $_GET['id'];
    $name = $_GET['nickname'];
    if($id != NULL){
        // 아이디 중복 검사를 실행할 경우
        $sql = "SELECT id FROM user WHERE id = '$id';";
        $result = $mysqli->query($sql);
        if($row = $result->fetch_array()){
            echo "true"; // 동일한 아이디 명이 존재
        }
        else echo "false"; // 동일한 아이디가 존재하지 않음
    }
    if($name != NULL){
        // 닉네임 중복 검사를 실행할 경우
        $sql = "SELECT nickname FROM user WHERE nickname = '$name';";
        $result = $mysqli->query($sql);
        if($row = $result->fetch_array()){
            echo "true"; // 동일한 닉네임이 존재
        }
        else echo "false"; // 동일한 닉네임이 존재하지 않음
    }
?>