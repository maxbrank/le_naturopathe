<?php

function connect(){
    $dbname="le_naturopathe";
    $user="root";
    $psd="";


    try{
        $database = new PDO ("mysql:host=localhost;dbname=$dbname", $user, $psd);
        return $database;
    }

    catch (Exception $err){            // catch se lance que si on rencontre un pb dans le try
        echo "Erreur:".$err -> getMessage()."</br>";
    }
    return $database;
}

function getUser($login){
    $bdd = connect();

    $request = $bdd->prepare('SELECT * FROM users WHERE user_name = :userName'); //requête SQL permettant de selectionner ttes les données de l'utilisateur en bdd correspondant au pseudo de l'utilisateur.
    $request->execute([':userName' => htmlentities($login)]);  //on stocke le pseudo ds variable $request qui permet de définir s'il est connecté.
    return $request->fetch(); //$request est un objet contenant toutes les données d ela requete executée, fecth renvoie la ligne puis la supprime, si on refait fecth on passe à la ligne suivante.
}
