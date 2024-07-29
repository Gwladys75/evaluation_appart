<?php

require_once 'inc/functions.inc.php';


// je  vérifie d'abord si le $_POST (mon tableau) = le formulaire a été soumis 

if (!empty($_POST)) {

  // debug($_POST); // affiche le contenu de mon tableau si il a bien été soumis 

  $photo = $_FILES['photo']['name'] ?? '';
  $title = htmlentities(trim($_POST['title'])) ?? '';
  $description = htmlentities(trim($_POST['description'])) ?? '';
  $postal_code = $_POST['postal_code'] ?? '';
  $type = $_POST['type'] ?? '';
  $price = htmlentities(trim($_POST['price']))  ?? '';
  $city = $_POST['city'] ?? '';

  // Déplace mon fichier téléchargé vers mon répertoire
  move_uploaded_file($_FILES['photo']['tmp_name'], 'assets/img/' . $photo);


  // Redirection vers la page : "annonces"
  header("location:" . RACINE_SITE . "accueil.php");


  // j'appel ma fonction ajoutannonce pour ajouter mes annonces à la base de donnée 
  ajoutAnnonce($photo, $title, $description, $postal_code, $city, $type, $price);
}





require_once 'inc/header.inc.php';
echo $info;
?>

<!-- Le formulaire d'ajout pour les annonces  -->
<main>
  <div class="container mt-5 pt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2 class="text-center">AJOUTER UNE ANNONCE</h2>

        <form action="#" method="post" enctype="multipart/form-data">
          <div class="mb-3 mt-4 pt-4">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
          </div>
          <div class="mb-3">
            <label for="titre" class="form-label">Titre de l'annonce</label>
            <input type="text" class="form-control" id="titre" placeholder="Entrez le titre de l'annonce" name="title">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description de l'annonce</label>
            <textarea class="form-control" id="description" rows="3" placeholder="Entrez la description de l'annonce" name="description"></textarea>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="codePostal" class="form-label">Code postal</label>
              <input type="text" class="form-control" id="codePostal" placeholder="Entrez le code postal" name="postal_code">
            </div>
            <div class="col-md-6 mb-3">
              <label for="ville" class="form-label">Ville</label>
              <input type="text" class="form-control" id="ville" placeholder="Entrez la ville" name="city">
            </div>
          </div>
          <div class="mb-3">
            <label for="typeAnnonce" class="form-label">Type d'annonce</label>
            <select class="form-select" id="typeAnnonce" name="type">
              <option value="">Sélectionnez un type</option>
              <option value="location">Location</option>
              <option value="achat">Vente</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" class="form-control" id="prix" placeholder="Entrez le prix" name="price">
          </div>
          <div class="d-flex justify-content-center mb-5">
            <button type="submit" class="btn-ajout">Ajouter le bien</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  </section>
</main>