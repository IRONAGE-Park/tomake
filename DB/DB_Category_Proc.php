<?php
    include "DB/DB_Connect.php";
    $sql = "SELECT cate_name FROM category";
    if($result = $mysqli->query($sql)){
    while($row = $result->fetch_array()){
       echo "<li><a href=\"#\">".$row['cate_name']."</a></li>";
    }
}
?>