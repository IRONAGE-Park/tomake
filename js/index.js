$(document).ready(function() {
    $("#header").load("header.php");
    $("#category").load("category.php");
    $("#feed").load("feed.php");
    $("#profile").load("aside.php");
});
  /* aside profile control */
var loadRegist = function() {
  $('#profile').load('regist.html');
}
  /* header's nav control */
var loadSection = function(post_id) {
  if (post_id == 0) { //feed
    $('#feed').load('feed.php');
  } else if (post_id == 1) {//map
    $('#feed').load('map.html');
  } else if (post_id == 2) { //mesgge
    $('#feed').load('messge.html');
  } else { //setting
    $('#feed').load('setting.html');
  }
}