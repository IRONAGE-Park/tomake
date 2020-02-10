<div id="feed_title">
    <?php
        $id = "ghooz1204@naver.com";
        $format = ".jpg";
        $nickname = "철빡이";
        $postname = "우유 속에 어쩌구";
        echo "<img class='profile_image'src=\"images/user/profile/".$id.$format."\">";
        echo "<span class = \"feed_font\">".$nickname."</span> 님이 ";
        echo "<span class = \"feed_font\">".$postname." 제작했습니다!</span> 프로젝트";
    ?>
    </div>
    <div id="feed_image">
    <?php
        $postview = "ghooz1204@naver.com_1.jpg";
        echo "<img src = images/user/post/".$postview.">";
    ?>
    </div>
    <div id="info">
    <?php
        $like = 312;
        $comment = 61;
        $day = "3월 6일";
        echo "<div><span class=\"feed_font\">좋아요 ".$like."개 댓글 ".$comment."개</span><span style = \"float: right;\">".$day."</span></div>";
    ?>
    <div class="inter_action"><img src="images/post/grid_like.svg"><img src="images/post/grid_comment.svg"><img src="images/post/grid_bookmark.svg"> 
    <span style ="float: right; line-height: 45px;">클릭하여 자세히 알아보기 ><span></div>
</div>