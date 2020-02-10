<?php
    session_start(); // 세션 시작
    include 'DB_Connect.php';

    echo "<script>";

    $id = $_POST['userid']; // 로그인 화면에서 id 정보를 받아옴
    $pw = $_POST['userpassword']; // 로그인 화면에서 pw 정보를 받아옴

    if(isset($id) || isset($pw)){
        // id 혹은 pw값이 존재하지 않으면 잘못된 접근
        $sql = "SELECT pw, nickname FROM user WHERE id = '$id';";
        if($result = $mysqli->query($sql)){
            // sql문을 통해 입력받은 id의 pw를 추출
            $row = $result->fetch_array();
            if($row['pw'] == $pw){ // 데이터베이스에 저장된 pw와 입력된 pw가 같다 ==> 로그인
                $_SESSION['user_id'] = $id; // 세션에 아이디 등록
                $_SESSION['user_name'] = $row['nickname']; // 세션에 닉네임 등록
            }
            else{
                // 아이디가 없는 경우 ==> 로그인 실패!
                echo "alert('아이디 혹은 비밀번호를 확인해주세요!');";
            }
        }
    }
    else{
        // 잘못된 접근 보고
        echo "alert('잘못된 접근입니다');";
    }
    echo "</script>";
?>
<!-- 이전 페이지로 돌아간다 -->
<meta http-equiv="refresh" content="0;url=../index.html" />