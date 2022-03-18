let logoData = [];

async function getLogos() {
  await fetch("asset/data/logos.json")
    .then((res) => res.json())
    .then((data) => (logoData = data.logos))
    .catch((err) => console.log("Error : " + err));

  //   console.log(logoData[0]);

  return logoData;
}

/* Details */

async function displayData(logos) {
  const logos_section = document.querySelector(".all-details");

  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const idURL = urlParams.get("id");
  const details = logoData.find((element) => element.id == idURL);

  const logosDetails = logoDetailsFactory(details);
  const detailsCardDOM = logosDetails.getDetailCardDOM();
  logos_section.appendChild(detailsCardDOM);
}

async function init() {
  const { logos } = await getLogos();
  displayData(logos);
}

init();

/* Cursor */

let mouseCursor = document.querySelector(".cursor");

document.addEventListener("DOMNodeInserted", () => {
  document.querySelectorAll("a").forEach((link) => {
    link.addEventListener("mouseleave", () => {
      mouseCursor.classList.remove("link-grow");
    });
    link.addEventListener("mouseover", () => {
      mouseCursor.classList.add("link-grow");
    });
  });
});

document.addEventListener("DOMNodeInserted", () => {
  document.querySelectorAll("button").forEach((link) => {
    link.addEventListener("mouseleave", () => {
      mouseCursor.classList.remove("link-grow");
    });
    link.addEventListener("mouseover", () => {
      mouseCursor.classList.add("link-grow");
    });
  });
});

window.addEventListener("mousedown", () => {
  mouseCursor.classList.add("link-grow");
});
window.addEventListener("mouseup", () => {
  mouseCursor.classList.remove("link-grow");
});

window.addEventListener("mousemove", cursor);

function cursor(e) {
  mouseCursor.style.top = e.clientY + "px";
  mouseCursor.style.left = e.clientX + "px";
}

/* Files upload */

const actualBtn = document.getElementById("actual-btn");

const fileChosen = document.getElementById("file-chosen");

actualBtn.addEventListener("change", function() {
  fileChosen.textContent = this.files[0].name;
});

/* Changement title */

window.addEventListener('blur',function() {
  document.title = "Revenez vite 😥"
   });
 
window.addEventListener('focus',function() {
  document.title = "creationdelogo.pro | Service professionnel de création de logo"
   });
