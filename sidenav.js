function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("navbar").style.opacity = "0%";
  document.getElementById("parcours").style.paddingTop = "0px";
  document.getElementById("parcours").style.paddingBottom = "100px";
  document.getElementById("titre").style.fontSize = "65px";
  document.getElementById("profil").style.width = "220px";
  document.getElementById("photo").style.width = "220px";
  document.getElementById("photo").style.height = "270px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("navbar").style.opacity = "100%";
  document.getElementById("parcours").style.paddingTop = "50px";
  document.getElementById("parcours").style.paddingBottom = "50px";
  document.getElementById("titre").style.fontSize = "35px";
  document.getElementById("profil").style.width = "270px";
  document.getElementById("photo").style.width = "270px";
  document.getElementById("photo").style.height = "330px";
}