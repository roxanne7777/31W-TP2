
document.addEventListener("DOMContentLoaded", () => {
  const boutons = document.querySelectorAll(".filtre__bouton button");
  const articlesContainer = document.getElementById(".filtre");

  if (!boutons.length) {
    console.error("Aucun bouton de filtre trouvé !");
    return;
  }

  boutons.forEach((bouton) => {
    bouton.addEventListener("click", () => {
      const categoryId = bouton.getAttribute("data-id");

      if (!categoryId || categoryId === "$id") {
        console.error("ID de catégorie invalide :", categoryId);
        articlesContainer.innerHTML =
          "<p>Erreur : ID de catégorie invalide.</p>";
        return;
      }

      fetch(`${filtrepostVars.restUrl}?categories=${categoryId}`)
        .then((response) => response.json())
        .then((data) => {
          articlesContainer.innerHTML = "";

          if (data.length === 0) {
            articlesContainer.innerHTML = "<p>Aucun article trouvé.</p>";
            return;
          }

          data.forEach((article) => {
            const articleElement = document.createElement("div");
            articleElement.classList.add("article");
            articleElement.innerHTML = `
                            <h2>${article.title.rendered}</h2>
                            <p>${article.excerpt.rendered}</p>
                            <a href="${article.link}" target="_blank">Lire plus</a>
                        `;
            articlesContainer.appendChild(articleElement);
          });
        })
        .catch((error) => {
          console.error("Erreur lors de la requête :", error);
          articlesContainer.innerHTML =
            "<p>Une erreur s'est produite lors du chargement des articles.</p>";
        });
    });
  });
});
