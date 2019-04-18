<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connexion - 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<?php

$mail = $_POST["mail"];
$mdp = hash('ripemd160',$_POST["password"]);

$host = "localhost";
$user = "root";
$password = "";
$bdd = "workshop2"; //insérer ici le nom de la bdd


// Connexion au serveur MySQL et choix de la BDD

$lien = mysqli_connect($host,$user,$password);
mysqli_select_db($lien, 'workshop2'); //insérer ici le nom de la bdd


// Requête SQL

$sql = "select * from utilisateur where utilisateur_mail='$mail' && utilisateur_mdp='$mdp'";


// Exécution de la requête SQL

$result = mysqli_query($lien, $sql);

// Récupération des résultats
$num = mysqli_num_rows($result);

if ($num==1){
    echo 'Acces validé';
    session_start([
        'cookie_lifetime' => 86400,
    ]);
    while ($truc = mysqli_fetch_assoc($result)){
        echo $_SESSION['username'] = $truc["utilisateur_nom"];
        echo $_SESSION['id'] = $truc["id_utilisateur"];
        
    }
    
} else{
    echo'Acces refusé';
}


?>