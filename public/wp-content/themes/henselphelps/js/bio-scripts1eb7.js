function setBackBioSizes(){
  var backBios = document.getElementsByClassName("back-bio");
  var carouselWidth = document.getElementById("bio-carousel").clientWidth;
  var carouselHeight = document.getElementById("bio-carousel").clientHeight;

  for(var i = 0; i < backBios.length; i++){
    backBios[i].style.width = carouselWidth + "px";
    backBios[i].style.height = carouselHeight + "px";
  }
}

function openBio(bioNum){
  var bio = document.getElementById("bio-" + bioNum);
  bio.classList.add("active");
}

function removeBio(bioNum){
  var bio = document.getElementById("bio-" + bioNum);
  bio.classList.remove("active");
}

function switchBio(direction){
  var backBios = document.getElementsByClassName("back-bio");
  var curBioNum;
  var newBioNum;

  for(var i = 0; i < backBios.length; i++){
    if(backBios[i].classList.contains("active")){
      curBioNum = i;
    }
  }

  if(curBioNum != undefined){
    if(direction == "next"){
      if(curBioNum == (backBios.length - 1)){
        newBioNum = 0;
      }
      else{
        newBioNum = curBioNum + 1;
      }
    }
    else if(direction == "prev"){
      if(curBioNum == 0){
        newBioNum = backBios.length - 1;
      }
      else{
        newBioNum = curBioNum - 1;
      }
    }
  }

  if(newBioNum != undefined){
    removeBio(curBioNum);
    openBio(newBioNum);
  }
  
}

function openTab(tabId, tabLinkId) {

  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].classList.remove("active");
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tabcontent.length; i++) {
    tablinks[i].classList.remove("active");
  }

  document.getElementById(tabId).classList.add("active");
  document.getElementById(tabLinkId).classList.add("active");

  setTabContentsContainerHeight();
} 

function setTabContentsContainerHeight(){
  var tabsContainer = document.getElementById("tab-contents-container");
  var tabs = document.getElementsByClassName("tabcontent");

  for(var i = 0; i < tabs.length; i++){
    if(tabs[i].classList.contains('active')){
      tabsContainer.style.height = tabs[i].clientHeight + "px";
      console.log(tabs[i].clientHeight);
    }
  }
}