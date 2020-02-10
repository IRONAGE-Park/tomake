<?php session_start(); ?>
<link type="text/css" rel="stylesheet" href="css/category.css">
  
<nav class="box">
  <hr class="line">
  <ul>
    <li><a href="#" id="pick_1">
    <?php
      if(isset($_SESSION['user_id'])) echo "나의 피드";
      else echo "전체 게시글";
    ?>
    </a></li>
    <li><a href="#" id="pick_2">인기 게시글</a></li>
    <li><a href="#" id="pick_3">최신 게시글</a></li>
    <li class="top_menu_list">
      <span class="pt">+</span><a href="#" id="pick_4"> 카테고리별</a>
      <ul class="sub_menu">
      <?php include 'DB/DB_Category_Proc.php'; ?>
      </ul>
    </li>
    <li><a href="#" id="pick_5">모델링 파일</a></li>
    <li><a href="#" id="pick_6">모델링 강의</a></li>
  </ul>
</nav>
<script type="text/javascript" src="js/category.js"></script>
