/* Hover img */

const imgContent = document.querySelectorAll(".img-content-hover");

function showImgContent(e) {
  for (var i = 0; i < imgContent.length; i++) {
    x = e.pageX;
    y = e.pageY;
    imgContent[i].style.transform = `translate3d(${x}px, ${y}px, 0)`;
  }
}

document.addEventListener("mousemove", showImgContent);

/* Scrolling text */

var elmnt = document.getElementById("pub");
var elmnt2 = document.getElementById("slide");
var pubWidth = elmnt.offsetWidth;
var larg = window.innerWidth;

var tps = Math.trunc(pubWidth / 200);
if (pubWidth < larg) {
  elmnt2.style.animation = "animate2 " + tps * 2 + "s linear infinite";
} else {
  elmnt2.style.animation = "animate " + tps + "s linear infinite";
}
