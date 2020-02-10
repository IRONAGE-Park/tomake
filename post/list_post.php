<?php
    $id = "ghooz1204@naver.com";
    $format = ".jpg";
    $nickname = "철빡이";
    $postname = "우유 속에 어쩌구";
    $postview = "ghooz1204@naver.com_1.jpg";
    $like = 312;
    $comment = 61;
    $day = "3월 6일";
?>
<link rel="stylesheet" type="text/css" href="css/post/list_post.css">
<?php echo "<img class='list_image' src='images/user/post/".$postview."'>"; ?>
<div class="list_info">
    <span class='list_title'><?php echo $postname;?></span> <span class='list_day'><?php echo $day; ?></span>
    <span class='list_like'><img src='images/post/list_heart.svg'><?php echo $like; ?>개</span>
    <span class='list_comment'><img src='images/post/list_comment.svg'><?php echo $comment; ?>개</span>
</div>
<img class='list_pointer' src='images/post/list_pointer.svg'>