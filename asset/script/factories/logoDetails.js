function logoDetailsFactory(data) {
  const { id, name, intro, date, project, image } = data;

  const picture = "asset/img/" + image;

  function getDetailCardDOM() {
    const div = document.createElement("div");

    const details = document.createElement("div");
    details.setAttribute("class", "details");

    const image_details = document.createElement("div");
    image_details.setAttribute("class", "image-details");

    const img = document.createElement("img");
    img.setAttribute("src", picture);
    img.setAttribute("alt", "Logo " + name);

    const text_details = document.createElement("div");
    text_details.setAttribute("class", "text-details");

    const h2 = document.createElement("h2");
    h2.innerHTML = name + "<span class='magenta'>.</span>";
    text_details.appendChild(h2);

    const pIntro = document.createElement("p");
    pIntro.textContent = intro;
    text_details.appendChild(pIntro);

    const pDate = document.createElement("p");
    pDate.textContent = "Année de réalisation : " + date;
    text_details.appendChild(pDate);

    const pProject = document.createElement("p");
    pProject.innerHTML = project;

    if (pProject.outerHTML == "<p></p>") {
    } else {
      text_details.appendChild(pProject);
    }

    const previous_next = document.createElement("div");
    previous_next.setAttribute("class", "previous_next");

    const previous = document.createElement("div");

    // const aPrevious = document.createElement("a");
    // aPrevious.textContent = "LOGO PRÉCÉDENT";
    // aPrevious.setAttribute("class", "previous_button");

    const aPreviousMobile = document.createElement("a");
    aPreviousMobile.innerHTML = '<img src="asset/img/chevrons-left.svg">';

    if (id == 1) {
      // aPrevious.setAttribute("class", "previous_button disabled");
      aPreviousMobile.setAttribute("class", "disabled");
    } else {
      // aPrevious.setAttribute("href", "logo.html?id=" + (id - 1));
      aPreviousMobile.setAttribute("href", "logo.html?id=" + (id - 1));
    }

    const gallery = document.createElement("div");

    const aGallery = document.createElement("a");
    aGallery.setAttribute("href", "index.html");
    aGallery.setAttribute("class", "aHome");

    const imgGallery = document.createElement("img");
    imgGallery.setAttribute("class", "home");
    imgGallery.setAttribute("id", "home");
    imgGallery.setAttribute("src", "asset/img/home.svg"); // <i class="fas fa-home"></i>

    const next = document.createElement("div");

    // const aNext = document.createElement("a");
    // aNext.textContent = "LOGO SUIVANT";
    // aNext.setAttribute("class", "next_button");

    const aNextMobile = document.createElement("a");
    aNextMobile.innerHTML = '<img src="asset/img/chevrons-right.svg">';

    if (id == logoData.length) {
      // aNext.setAttribute("class", "next_button disabled");
      aNextMobile.setAttribute("class", "disabled");
    } else {
      // aNext.setAttribute("href", "logo.html?id=" + (id + 1));
      aNextMobile.setAttribute("href", "logo.html?id=" + (id + 1));
    }

    // div.appendChild(h2);
    div.appendChild(details);
    details.appendChild(image_details);
    image_details.appendChild(img);
    details.appendChild(text_details);
    div.appendChild(previous_next);
    previous_next.appendChild(previous);
    // previous.appendChild(aPrevious);
    previous.appendChild(aPreviousMobile);
    previous_next.appendChild(gallery);
    gallery.appendChild(aGallery);
    aGallery.appendChild(imgGallery);
    previous_next.appendChild(next);
    // next.appendChild(aNext);
    next.appendChild(aNextMobile);

    return div;
  }

  return { id, name, intro, date, project, image, getDetailCardDOM };
}
