<?php session_start(); ?>
<!-- 세션 시작 -->

<link href="css/header.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/header.js"></script>
<!-- 헤더에서 사용될 스타일시트와 기능 입력 -->

<header class="header_box">
  <span class="header_Logo">
    <!-- 로고 이미지 삽입 -->
    <a href="index.html"><img id="ToMakeLogoSize"src="images\header\ToMakeLogo.svg"></a>
  </span>
  <span class="header_SearchBox">
    <!-- 검색창 삽입 -->
    <form method="post" action="#">
      <input class="SearchBar" type="text" name="searchValue" value="" onfocus="overInputBox();" onblur="inputBoxOntion();" id="searchValues">
      <img class="Find" id ="magnifier"src="images\header\MagnifierBasic.svg">
    </form>
  </span>
  <span class="header_NavBox">
    <nav class="header_Nav">
      <!-- 우측 메뉴 삽입 -->
      <img class="verticalBarSize"src="images\header\VerticalBar.svg">
      <a href="#" onclick="loadSection(0)"><img id="document" onclick="changeImg(0)" src="images\header\documentEntered.svg"></a>
      <a href="#" onclick="loadSection(1)"><img id="map" onclick="changeImg(1)"src="images\header\MapBasic.svg"></a>
      <a href="#" onclick="loadSection(2)"><img id="messge" onclick="changeImg(2)"src="images\header\MessgeBasic.svg"></a>
      <a href="#" onclick="loadSection(3)"><img id="setting" onclick="changeImg(3)"src="images\header\SettingBasic.svg"></a>
      <a href="#">
      <?php
        /* 
          가장 우측의 로그인 메뉴의 경우 세션에 id값과 nickname값이 존재하면 로그인 정보 출력. 
          그렇지 않은 경우 로그인이 필요합니다. 라는 텍스트와 기본 이미지 출력.
        */
        if(!isset($_SESSION['user_id'])){
          echo "<img src='images\header\group59.svg'><span class='loginPlease'>";
          echo "로그인이 필요합니다.";
        }
        else{
          echo "<img class='profile_image'src='images\user\profile\\".$_SESSION['user_id'].".jpg'><span class='loginPlease'>";
          echo $_SESSION['user_name']."님 환영합니다. <a href='logout.php'><span class='logout_btn'> 로그아웃</span>";
        }
      ?>
      </span></a> 
    <nav>
  </span>
</header>