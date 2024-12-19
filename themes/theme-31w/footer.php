
    <footer class="pied">
    <section class="global pied__global">
      <div>
          Auteur: Roxanne Auclair
          <h5><a href="https://github.com/roxanne7777/31W-TP2/tree/ef">Lien github vers la branche ef</a></h5>
          <h5><a href="https://github.com/roxanne7777/filtre-pays">Lien github vers le dépôt de l'extension "filtre-pays"</a></h5>
      </div>
      <div>
        <p>Tp2 et épreuve finale</p>
        <img src="https://www.svgrepo.com/show/530601/hot-air-balloon.svg" height="75" width="75">
      </div>
      <div>
        <?php wp_nav_menu(
            array(
              "menu" => "principal",
              "container" => "nav"
            )
            );
            get_search_form();
        ?>
      </div>
    </section>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>