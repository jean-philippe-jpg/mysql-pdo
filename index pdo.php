

<?php
//try {
    $pdo = new PDO('mysql:host=localhost;dbname=cartographie', username:'root', password:'');
    foreach ($pdo->query('SELECT marque FROM marques', PDO::FETCH_ASSOC) as $marq) {
        echo $marq['marque'].' '.'<br>';
   }
//} //catch (PDOException $e) {
   // echo 'Impossible de récupérer la liste des vehicules';
//}


//try {
    // Exemple avec une base de données MySQL avec les identifiants par défaut
    //$pdo = new PDO('mysql:host=localhost', 'root', '');
   // if ($pdo->exec('CREATE DATABASE testBdd') !== false) {
        //echo 'Base de données créée';
    //} else {
       // echo 'Une erreur est survenue';
    //}
//} catch (PDOException $e) {
    //Gestion de l'erreur de connexion
//}