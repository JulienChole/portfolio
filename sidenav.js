function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("navbar").style.opacity = "0%";
  document.getElementById("parcours").style.paddingTop = "0px";
  document.getElementById("parcours").style.paddingBottom = "100px";
  document.getElementById("titre").style.fontSize = "65px";
  //document.getElementById("competence").style.paddingTop = "0px";
  //document.getElementById("competence").style.paddingBottom = "100px";
  //document.getElementById("veille").style.paddingTop = "0px";
  //document.getElementById("veille").style.paddingBottom = "100px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("navbar").style.opacity = "100%";
  document.getElementById("parcours").style.paddingTop = "50px";
  document.getElementById("parcours").style.paddingBottom = "50px";
  document.getElementById("titre").style.fontSize = "35px";
  //document.getElementById("competence").style.paddingTop = "50px";
  //document.getElementById("competence").style.paddingBottom = "50px";
  //document.getElementById("veille").style.paddingTop = "50px";
  //document.getElementById("veille").style.paddingBottom = "50px";
}
