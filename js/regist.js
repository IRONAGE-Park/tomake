var Id_Ovl_Chk = false;
var Name_Ovl_Chk = false;
var Ipt_Chk = false;
var Agr_Chk = false;

function finalCheck(){
    /* 마지막 submit시에 점검하기 위한 함수 */
    if(Id_Ovl_Chk) { // 아이디 중복 여부 확인
        if(Name_Ovl_Chk) { // 닉네임 중복 여부 확인
            if(Ipt_Chk) { // 비밀번호 양식 확인
                if(Agr_Chk){ // 비밀번호 재검사 확인
                    return true;
                }
                alert('비밀번호 재 확인');
            }
            else alert('비밀번호 형식 확인');
        }
        else alert('NickName 중복 확인');
    }
    else alert('ID 중복 확인');
    return false;
}
function checkID(){
    /* ID의 중복을 확인하는 함수 */
    var id = $('input[name=id]').val();
    $.ajax({
        url: 'DB/DB_Overlap_Proc.php',
        type: 'GET',
        data: {
            "id" : id,
            "nickname" : ""
        },
        success: function(data) {
            // 코드가 성공한 경우의 콜백함
            if(data == "false") {
                // 중복된 아이디가 없을때
                $('#id_sign').css('color', '#36B6E2');
                $('#id_sign').html('사용 가능한 아이디입니다.');
                Id_Ovl_Chk = true;
            }
            else{
                // 이미 존재하는 아이디일때
                $('#id_sign').css('color', 'red');
                $('#id_sign').html('중복된 아이디입니다.');
                Id_Ovl_Chk = false;
            }
        },
        error: function(error) {
          // 에러가 발생한 경우
           alert('에러 발생');
        }
    });
}
function checkName(){
    /* NickName의 중복을 확인하는 함수 */
    var nickname = $('input[name=nickname]').val();
    $.ajax({
        type: 'GET',
        url: 'DB/DB_Overlap_Proc.php',
        data: { "id" : "", "nickname" : nickname },
        success: function(data) {
            // 코드가 성공한 경우의 콜백함수
            if(data == "false"){
                // 중복된 닉네임이 없을때
                $('#name_sign').css('color', '#36B6E2');
                $('#name_sign').html('사용 가능한 닉네임입니다.');
                Name_Ovl_Chk = true;
            }
            else{
                // 이미 존재하는 닉네임일때
                $('#name_sign').css('color', 'red');
                $('#name_sign').html('중복된 닉네임입니다.');
                Name_Ovl_Chk = false;
            }
        },
        error: function(error) {
          // 에러가 발생한 경우
           alert('에러 발생');
        }
    });
}
function checkInputType(){
    /* 비밀번호 형태가 맞는지 확인하기 위한 함수 */
    var len = $('input[name=password]').val().length;
    if(len < 8 || len > 12){ 
        // 입력된 문자의 길이가 8보다 작거나 12보다 길 경우 => 형태 불일치
        $('#pw_sign').css('color', 'red');
        $('#pw_sign').html('8자~12자 이내로 설정해주세요.');
        Ipt_Chk = false;
    }
    else {
        // 그 사이에 존재하는 경우 => 형태 일치
        $('#pw_sign').css('color', '#36B6E2');
        $('#pw_sign').html('알맞은 형식입니다.');
        Ipt_Chk = true;
    }
}
function checkAgree(){
    /* 비밀번호 재확인 함수 */
    if($('input[name=password]').val() == $('input[name=password_check]').val()) {
        // 두번째 입력된 패스워드가 상위 입력된 패스워드와 일치할 경우 => 통과
        $('#agree_sign').css('color', '#36B6E2');
        $('#agree_sign').html('비밀번호가 일치합니다.');
        Agr_Chk = true;
    }
    else{
        // 두번째 입력된 패스워드가 상위 입력된 패스워드와 일치하지 않을 경우 => 실패
        $('#agree_sign').css('color', 'red');
        $('#agree_sign').html('비밀번호가 일치하지 않습니다.');
        Agr_Chk = false;
    }
}