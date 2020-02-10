function changeColor(event) {
  // 클릭한 카테고리의 색이 변하고 피드 제목을 그 카테고리의 제목으로 변경
  for(var i = 0; i < kind_cnt; i++){
    idArray[i].style.color = "black";
  }
  event.target.style.color = "#36B6E2";
  $('#feed_name').html(event.target.innerHTML);
}
// 최초 실행시..
var kind_cnt = 6 // 카테고리 총 갯수
var idArray = new Array(); // 카테고리의 정보를 담을 배열
for(var i = 0; i <= kind_cnt; i++){
  idArray[i] = document.getElementById('pick_'+(i + 1));
  idArray[i].addEventListener('click', changeColor);
}
$('#pick_1').trigger('click');
