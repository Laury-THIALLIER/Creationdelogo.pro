let i = 0;

function logoFactory(data) {
  const { id, name, city, image } = data;

  const picture = "asset/img/" + image;

  function getLogoCardDOM() {
    i++;

    const link = document.createElement("a");
    link.setAttribute("class", "a item");
    link.setAttribute("href", "logo.html?id=" + id);

    const figure = document.createElement("figure");
    figure.setAttribute("class", "img-container");

    const img = document.createElement("img");
    img.setAttribute("class", "img");
    img.setAttribute("src", picture);
    if (i > 6) {
      img.setAttribute("loading", "lazy");
    }
    img.setAttribute("alt", "Logo " + name);

    // const figcaption = document.createElement("figcaption");
    // figcaption.setAttribute("class", "img-content");

    // const h2_figcaption = document.createElement("h2");
    // h2_figcaption.textContent = name;
    // h2_figcaption.setAttribute("class", "title");

    // const h3_figcaption = document.createElement("h3");
    // h3_figcaption.textContent = city;
    // h3_figcaption.setAttribute("class", "city");

    // const h2_span = document.createElement("h2");
    // h2_span.textContent = name;
    // h2_span.setAttribute("class", "title");

    // const h3_span = document.createElement("h3");
    // h3_span.textContent = city;
    // h3_span.setAttribute("class", "city");

    // const span = document.createElement("span");
    // span.setAttribute("class", "img-content-hover");

    link.appendChild(figure);
    figure.appendChild(img);
    // figure.appendChild(figcaption);
    // figcaption.appendChild(h2_figcaption);
    // figcaption.appendChild(h3_figcaption);
    // figure.appendChild(span);
    // span.appendChild(h2_span);
    // span.appendChild(h3_span);

    return link;
  }

  return { id, name, city, image, getLogoCardDOM };
}
