<?php
    // 로그아웃 페이지
    session_start(); // 세션을 시작하고.
    session_destroy(); // 그 세션을 파기함
?>
<meta http-equiv="refresh" content="0;url=index.html" />
<!-- 후에 index.html로 새로고침 -->