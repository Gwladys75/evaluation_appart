<?php
require_once "inc/functions.inc.php";
require_once "inc/header.inc.php";
// connexionBdd();

$annonce = annoncesParOrdre();


?>



<!-- contenu de la page avec les annonces  -->
<main>
  <h2 class="text-center mt-5 pt-5">LES 15 DERNIERES ANNONCES</h2>

  <section>

    <h2 class="text-center mt-5 pt-5">LES 15 DERNIERES ANNONCES</h2>

    <div class="container mt-5 pt-5">

      <div class="row g-3">
        <?php

        // echo $info;

        foreach ($annonce as $annonce) {
        ?>
          <div class="col-md-4">

            <div class="card">
              <img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top" alt="Images annonces">
              <div class="card-body">
                <h5 class="card-title"><?= strtoupper($annonce['title']) ?></h5>
                <p class="card-text"><?= substr($annonce['description'], 0, 100) . '...' ?></p>
                <p class="card-text"><strong> <?= $annonce['price'] ?> €</strong></p>
                <p class="card-text"><strong> <?= $annonce['type'] ?></strong></p>

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