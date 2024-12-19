(function () {
  let filtre__bouton = document.querySelectorAll('.filtre__bouton button')
  console.log(filtre__bouton.length);

  function extraire_article() {
    fetch(`http://localhost/31W/wp-json/wp/v2/posts?categories=${categorie}&per_page=30`)
    .then((response) => response.json())
    .then((data) => {
      console.log("Articles récupérés:", data);
      afficherArticles(data);
    })
    .catch((error) => console.error("Erreur lors de l'extraction des articles", error));
  }

  

})()