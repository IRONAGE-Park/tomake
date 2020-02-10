<script>
<?php
    include 'DB_Connect.php';
    $id = $_POST['id'];
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $available = $_POST['available'];

    if($id != NULL && $password != NULL){
        // 정상적으로 아이디와 비밀번호가 입력됨.
        $sql = "INSERT INTO user VALUES(
            '$id',
            '$password',
            '$nickname',
            '$phonenumber',
            '$address',
            '$available')";
            if($mysqli->query($sql)){
                // 정상적으로 INSERT되면 TRUE 반환
                echo "alert('회원가입에 성공했습니다!');\nhistory.back();";
            }
            else echo "alert('실패!');";
    }
?>
</script>