<?php 
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    if(!isset($user_id) || !isset($user_name)){ exit; }
?>
<link rel="stylesheet" type="text/css" href="css/aside.css">
<script>
    $(document).ready(function() {
        <?php 
            for($i = 0; $i < 5; $i++) {
                echo "$(\"#post_list".$i."\").load(\"post/list_post.php\");\n";
            }    
        ?>
    });
    function projView(){
        alert('프로젝트');
    }
    function writePost(){
        alert('글쓰기');
    }
</script>
<div class="frame">
    <div class="user_info">
        <?php echo "<img class='profile_image' src='images/user/profile/".$user_id.".jpg'>"; ?>
        <img class='profile_setting' src='images/profile/setting.svg'>
        <span class="user_text">
            <div class="user_name"><?php echo $user_name; ?></div>
            <div class="user_intro">안녕하세요 투메이크 매니저입니다.</div>
            <div class="user_link"><a href="https://www.to-make.com">www.to-make.com</a></div>
            <div class="user_follow">팔로워 1780명 팔로잉 1명</div>
        </span>
    </div>
    <div class="func_button">
        <span><input type="button" value="저장한 글"><img src='images/profile/bookmark.svg'></span>
        <span><input type="button" value="구매 목록"><img src='images/profile/shop.svg'></span>
        <span><input type="button" value="코인 내역"><img src='images/profile/coin.svg'></span>
    </div>
    <div class="write_post">
        <span id='stored_proj' onclick='projView();'>임시 저장된 프로젝트</span>
        <span id='upgrade_proj' onclick='projView();'>내가 발전시킨 프로젝트</span>
        <img id='write_img' src='images/profile/write.svg' onclick='writePost();'>
    </div> 
    <div class="post_list">
        <div class='list_name'>
        내가 작성한 프로젝트
            <span class='view_type'>
                <img src="images/profile/list.svg">
                <img src="images/profile/grid.svg">
            </span>
        </div>
        <div class="list_view">
        <?php
            for($i = 0; $i < 5; $i++) {
                echo "<a href='#'><div class='list' id=\"post_list".$i."\"></div></a>\n";
            }
        ?>
        </div>
    </div>
</div>
