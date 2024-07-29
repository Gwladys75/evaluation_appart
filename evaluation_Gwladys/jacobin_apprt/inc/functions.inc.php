<?php

session_start();

define("RACINE_SITE","/evaluation_Gwladys/jacobin_apprt/"); 


define("DBHOST", "localhost");

define("DBUSER", "root");

define("DBPASS", "");

define("DBNAME", "php_intermediaire_gwladys");




function debug($var)
{

    echo '<pre class="border border-dark bg-light text-primary w-50 p-3">';

    var_dump($var);

    echo '</pre>';
}




function connexionBdd()
{

   

    $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8";

    try {

        $pdo = new PDO($dsn, DBUSER, DBPASS);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {

        die($e->getMessage());
    }

    return $pdo;
}

connexionBdd();


// FOCNTION AJOUTER UNE ANNONCE

function ajoutAnnonce(string $photo, string $title, string $description, string $postal_code, string $city, string $type, string $price) : void
{

    $pdo = connexionBdd();

    $sql = "INSERT INTO advert (photo, title, description , postal_code, city, type, price)
     VALUES (:photo, :title, :description, :postal_code, :city, :type, :price)";

    $request = $pdo->prepare($sql);
    $request->execute(array(


        ':photo' => $photo,
        ':title' => $title,
        ':description' => $description,
        ':postal_code' => $postal_code,
        ':city' => $city,
        ':type' => $type,
        ':price' => $price
        
    ));
}


// FONCTIONS POUR AFFICHER LES ANNONCES PAR ORDRE PAR 15

function annoncesParOrdre() {
    $pdo = connexionBdd();
    $sql = ("SELECT * FROM advert ORDER BY id_advert DESC LIMIT 15");
    $request = $pdo->query($sql);
    $result = $request->fetchAll();
    return $result;

}

// FONCTIONS POUR AFFICHER TOUTES LES ANNONCES

function toutesAnnonces() {
    $pdo = connexionBdd();
    $sql = ("SELECT * FROM advert");
    $request = $pdo->query($sql);
    $result = $request->fetchAll();
    return $result;
}


// FONCTIONS POUR AFFICHER UNE ANNONCE

// function uneAnnonce() {
//     $pdo = connexionBdd();
//     $sql = ("SELECT * FROM advert WHERE id_advert = :id_advert");
//     $request = $pdo->query($sql);
//     $result = $request->fetch();
//     return $result;
// }


function uneAnnonce(int $id): mixed
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM advert WHERE id_advert = :id ";
    $request = $pdo->prepare($sql);
    $request->execute(array(
        ':id' => $id
    ));

    $result = $request->fetch();
    return $result;
}






// function alert(string $contenu, string $class)
// {

//     return "<div class='alert alert-$class alert-dismissible fade show text-center w-75 m-auto mb-5' role='alert'>
//         $contenu

//             <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>

//         </div>";
// }
