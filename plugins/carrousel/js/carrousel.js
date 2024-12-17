(function () {
  console.log("Vive Javascript");
  let carrousel = document.querySelector(".carrousel");
  let carrousel__x = document.querySelector(".carrousel__x");
  let carrousel__figure = document.querySelector(".carrousel__figure");
  let galerie__img = document.querySelectorAll(".galerie img");
  let carrousel__gauche = document.querySelector(".carrousel__gauche");
  let carrousel__droite = document.querySelector(".carrousel__droite");
  let indexCourant = 0;
  /*
   */
  console.log(galerie__img.length);

  galerie__img.forEach((imageElement, index) => {
    creerRadio(index, imageElement);
  });

  function remplirCarrousel() {
    galerie__img.forEach((element, index) => {
      console.log(element.src);
      let img = document.createElement("img");
      img.src = element.src; // copie une image de la galerie vers le carrousel
      img.classList.add("carrousel__img");
      img.setAttribute("data-index", index); // ajoute l'attribut index
      carrousel__figure.appendChild(img);
    });
  }
  /**
   * Création d'un radio
   * @param {
   * } i
   *
   */
  function creerRadio(i, image) {
    let radio = document.createElement("input");
    radio.type = "radio";
    radio.name = "galerie-radio";
    radio.classList.add("galerie__radio");
    radio.setAttribute("data-index", i);

    image.parentNode.insertBefore(radio, image.nextSibling);

    radio.addEventListener("click", function () {
      indexCourant = i;
      if (carrousel__figure.innerHTML === "") {
        remplirCarrousel();
      }
      afficheImage(indexCourant);
      carrousel.classList.add("carrousel--ouvrir");
      console.log("ouvrir");
    });
  }

  carrousel__x.addEventListener("click", function () {
    carrousel.classList.remove("carrousel--ouvrir");
    console.log("fermer");
  });

  function afficheImage(index) {
    let carrousel__img = document.querySelectorAll(".carrousel__img");
    for (let i = 0; i < carrousel__img.length; i++) {
      carrousel__img[i].classList.remove("carrousel__img--visible");
    }
    carrousel__img[index].classList.add("carrousel__img--visible");
  }

  carrousel__gauche.addEventListener("click", function () {
    if (indexCourant > 0) {
      indexCourant = indexCourant - 1;
    } else {
      indexCourant = galerie__img.length - 1;
    }
    afficheImage(indexCourant);
  });

  carrousel__droite.addEventListener("click", function () {
    if (indexCourant < galerie__img.length - 1) {
      indexCourant = indexCourant + 1;
    } else {
      indexCourant = 0;
    }
    afficheImage(indexCourant);
  });
})()
