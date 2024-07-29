<?php
require_once "functions.inc.php";


?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- lien bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="<?= RACINE_SITE ?>/assets/css/style.css">


  <title>Le Bon Appart</title>

</head>

<body>

  <!-- Barre de navigation -->
  <header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid justify-content-center">
        <div class="logo-appart">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <!-- <a href="<?= RACINE_SITE ?>accueil.php"><img class="logo" src="<?= RACINE_SITE ?>/assets/img/logo_appart.png" alt="logo"></a> -->

          <ul class="navbar-nav">


            <li class="nav-item">
              <a class="nav-link" href="<?= RACINE_SITE ?>accueil.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= RACINE_SITE ?>ajout_annonces.php">Ajouter une annonce</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= RACINE_SITE ?>afficher_annonces.php">Consulter toutes les annonces</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section>
      <div>
        <img class="bg-appart" src="assets/img/cle_maison.png" alt="fond écran">
        <h2 class=" bg-text text-center">LE BON APPART</h2>
      </div>
    </section>

  </header>





  <footer>

  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>