function toggleNavMenu() {
  var x = document.getElementById("hamburger");
  if (x.className === "topnav") {
    x.className = "responsive";
  } else {
    x.className = "topnav";
  }
}