<?php
require_once "inc/functions.inc.php";
require_once "inc/header.inc.php";
// connexionBdd();


$t_annonces = toutesAnnonces();


// debug($_requete);

?>



<!-- contenu de la page avec les annonces  -->
<main>
  <div class="mt-5">
    <h2 class="text-center mt-5 pt-5">VOICI TOUTES LES ANNONCES</h2>
  </div>

  <section>
    <h2 class="text-center mt-5 pt-5">VOICI TOUTES LES ANNONCES</h2>


    <div class="container mt-5 pt-5">

      <div class="row g-3">
        <?php

        // echo $info;

        foreach ($t_annonces as $t_annonce) {
        ?>
          <div class="col-md-4">

            <div class="card">
              <img src="<?= RACINE_SITE . "assets/img/" . $t_annonce['photo'] ?>" class="card-img-top" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title"><?= strtoupper($t_annonce['title']) ?></h5>
                <p class="card-text"><?= substr($t_annonce['description'], 0, 100) . '...' ?></p>
                <p class="card-text"><strong> <?= $t_annonce['price'] ?> </strong> €</p>
                <p class="card-text"><strong> <?= $t_annonce['type'] ?></strong></p>
                <a href="#" class="btn btn-primary">Reserver le bien</a>

              </div>
            </div>

          </div>
        <?php
        }
        ?>
      </div>
    </div>

  </section>


</main>