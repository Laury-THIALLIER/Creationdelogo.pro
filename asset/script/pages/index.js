let logoData = [];

async function getLogos() {
  await fetch("asset/data/logos.json")
    .then((res) => res.json())
    .then((data) => (logoData = data.logos))
    .catch((err) => console.log("Error : " + err));

  // console.log(logoData[40]);

  logoData.sort(function (a, b) {
    if (a.name.toLowerCase() < b.name.toLowerCase()) return -1;
    if (a.name.toLowerCase() > b.name.toLowerCase()) return 1;
    return 0;
  });

  return logoData;
}
/* Logos */

async function displayData(logos) {
  const logosSection = document.querySelector(".portfolio");

  logoData.forEach((logo) => {
    const logoModel = logoFactory(logo);
    const logoCardDOM = logoModel.getLogoCardDOM();
    logosSection.appendChild(logoCardDOM);
    const imgContent = document.querySelectorAll(".img-content-hover");
    document.addEventListener("mousemove", showImgContent);
    function showImgContent(e) {
      for (i = 0; i < imgContent.length; i++) {
        x = e.pageX;
        y = e.pageY;
        imgContent[i].style.transform = `translate3d(${x}px, ${y}px, 0)`;
      }
    }
  });
}

async function init() {
  const { logos } = await getLogos();
  displayData(logos);
}

init();

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

/* Cursor */

let mouseCursor = document.querySelector(".cursor");
// let aLinks = document.querySelectorAll("a");
// console.log(aLinks);

/**********************
 *
 *************************/

// Tu as besoin d'écouter ton DOM car tu créées de nouveaux éléments => DOMNodeInserted
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

/**********************
 *
 *************************/

window.addEventListener("mousedown", () => {
  mouseCursor.classList.add("link-grow");
});
window.addEventListener("mouseup", () => {
  mouseCursor.classList.remove("link-grow");
});

function cursor(e) {
  mouseCursor.style.top = e.clientY + "px";
  mouseCursor.style.left = e.clientX + "px";
}

window.addEventListener("mousemove", cursor);

/* Back to top */

// Set a variable for our button element.
const scrollToTopButton = document.getElementById("back_to_top");

// Let's set up a function that shows our scroll-to-top button if we scroll beyond the height of the initial window.
const scrollFunc = () => {
  // Get the current scroll value
  let y = window.scrollY;

  // If the scroll value is greater than the window height, let's add a class to the scroll-to-top button to show it!
  if (y > 0) {
    scrollToTopButton.className = "top-link show";
  } else {
    scrollToTopButton.className = "top-link hide";
  }
};

window.addEventListener("scroll", scrollFunc);

const scrollToTop = () => {
  // Let's set a variable for the number of pixels we are from the top of the document.
  const c = document.documentElement.scrollTop || document.body.scrollTop;

  // If that number is greater than 0, we'll scroll back to 0, or the top of the document.
  // We'll also animate that scroll with requestAnimationFrame:
  // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
  if (c > 0) {
    window.requestAnimationFrame(scrollToTop);
    // ScrollTo takes an x and a y coordinate.
    // Increase the '10' value to get a smoother/slower scroll!
    window.scrollTo(0, c - c / 10);
  }
};

// When the button is clicked, run our ScrolltoTop function above!
scrollToTopButton.onclick = function (e) {
  e.preventDefault();
  scrollToTop();
};

/* Load more */

// console.clear();
document.addEventListener("DOMNodeInserted", () => {
  let work = document.getElementById("workOuterShell");
  let items = Array.from(work.querySelectorAll(".item"));
  maxItems = 9;
  loadItems = 18;
  hiddenClass = "hiddenStyle";
  hiddenItems = Array.from(document.querySelectorAll(".hiddenStyle"));

  items.forEach(function (item, index) {
    // console.log(item.innerText, index);
    if (index > maxItems - 1) {
      item.classList.add(hiddenClass);
    }
  });
});

let loadMore = document.getElementById("loadMore");

loadMore.addEventListener("click", function () {
  [].forEach.call(
    document.querySelectorAll("." + hiddenClass),
    function (item, index) {
      if (index < loadItems) {
        item.classList.remove(hiddenClass);
      }

      if (document.querySelectorAll("." + hiddenClass).length === 0) {
        loadMore.style.display = "none";
      }
    }
  );
});

/* Changement title */

window.addEventListener('blur',function(){
   document.title = "Revenez vite 😥"
    });
  
window.addEventListener('focus',function(){
   document.title = "creationdelogo.pro | Service professionnel de création de logo"
    });