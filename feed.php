<link rel="stylesheet" type="text/css" href="css/feed.css">
<link rel="stylesheet" type="text/css" href="css/post/grid_post.css">
<link rel="stylesheet" type="text/css" href="css/post/new_grid_post.css">
<script>
    $(document).ready(function(){
        <?php
            for($i = 0; $i <= 10; $i++){
                echo "$(\"#post".$i."\").load(\"post/new_grid_post.php\");\n";
            }
        ?>
    });
</script>
<div class = "center">
    <?php
        for($i = 0; $i <= 10; $i++){
            echo "<div class=grid id=\"post".$i."\"></div>";
        }
    ?>
</div>