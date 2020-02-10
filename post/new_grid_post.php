<?php
    $postview = "ghooz1204@naver.com_1.jpg";
    echo "<img class='feed_image' src=images/user/post/".$postview.">";
?>
<div class='feed_image'></div>
<div class="feed_info">
    <?php
        $id = "ghooz1204@naver.com";
        $format = ".jpg";
        $nickname = "철빡이";
        $postname = "우유 속에 어쩌구";
        echo "<div class=\"feed_title\">".$postname."</div>";
        echo "<span class='profile'><img class='profile_image' src=\"images/user/profile/".$id.$format."\">";
        echo "&nbsp".$nickname."</span>";
    ?>
    <span class='inter_section'>
        <span id='inter_docu'>File </span>&nbsp
        <span id='inter_clip'>12K </span>
    </span>
</div>