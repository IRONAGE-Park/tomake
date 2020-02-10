function changeImg(selectItem) {
  //0 문서 1 지도 2메시지 3설정창
  var documentImg = document.getElementById('document');
  var mapImg = document.getElementById('map');
  var messgeImg = document.getElementById('messge');
  var settingImg = document.getElementById('setting');
  if (selectItem == 0) { // 피드창 클릭시
    documentImg.src = "images/header/documentEntered.svg";
    mapImg.src = "images/header/MapBasic.svg";
    messgeImg.src = "images/header/MessgeBasic.svg";
    settingImg.src = "images/header/SettingBasic.svg";
  } else if (selectItem == 1) { //지도클릭시
    documentImg.src = "images/header/documentBasic.svg";
    mapImg.src = "images/header/MapEntered.svg";
    messgeImg.src = "images/header/MessgeBasic.svg";
    settingImg.src = "images/header/SettingBasic.svg";
  } else if (selectItem == 2) {
    documentImg.src = "images/header/documentBasic.svg";
    mapImg.src = "images/header/MapBasic.svg";
    messgeImg.src = "images/header/MessgeEntered.svg";
    settingImg.src = "images/header/SettingBasic.svg";
  } else {
    documentImg.src = "images/header/documentBasic.svg";
    mapImg.src = "images/header/MapBasic.svg";
    messgeImg.src = "images/header/MessgeBasic.svg";
    settingImg.src = "images/header/SettingEntered.svg";
  }
}

function overInputBox() {
  var inputbox = document.getElementById('searchValues');
  var magnifierImg = document.getElementById('magnifier');
  inputbox.style.backgroundColor = "white";
  magnifierImg.src="images/header/MagnifierEntered.svg";
}

function inputBoxOntion() {
  var inputbox = document.getElementById('searchValues');
  var magnifierImg = document.getElementById('magnifier');
  if (inputbox.value != "") {
    inputbox.style.borderColor ="red";
    magnifierImg.src="images/header/MagnifierEntered.svg";
  } else {
    inputbox.style.background = "transparent";
    magnifierImg.src="images/header/MagnifierBasic.svg";
  }
}