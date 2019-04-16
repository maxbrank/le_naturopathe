<?php

function createUser($data)
{
    //connexion à la Base de Données
    $bdd = connect();

    if ((isset($_POST['firstName'])) && (isset($_POST['lastName'])) && (isset($_POST['userName'])) && (isset($_POST['email'])) && (isset($_POST['password'])) && (isset($_POST['confirmPassword']))) {
        //on déclare une variable pour chaque envoie de champ (+ facile à lire et à écrire)
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        //on s'assure que le mot de passe et sa confirmation de mot de passe soient identiques
        if ($password == $confirmPassword) {
            $user = verifyExistingUser($userName, $email);

            // si user_name n'existe pas déjà en BDD
            if (!isset($user['user_name'])) {


                // Hachage/encryptage du mot de passe
                $password_hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
                // Préparation de la requête vers Base de données
                $req = $bdd->prepare('INSERT INTO users(first_name, last_name, user_name, mail, pwd) VALUES(:firstName, :lastName, :userName, :email, :password)');
                //Execute la requete vers BDD
                $success = $req->execute(array(
                    ':firstName' => htmlentities($firstName),
                    ':lastName' => htmlentities($lastName),
                    ':userName' => htmlentities($userName),
                    ':email' => htmlentities($email),
                    ':password' => htmlentities($password_hashed)
                ));

                if ($success == true) {
                    $successMessage = "Inscription réussie, veuillez vous connecter";
                    header('Location: /le_naturopathe/index.php?success=' . $successMessage . '');
                } else {
                    $errorMessage = "Problème d'insertion en BDD, réessayer plus tard";

                    header('Location: /le_naturopathe/index.php?error=' . $errorMessage . '');
                }
            } else {
                $errorMessage = 'login ou mail déjà existants';
                header('Location: /le_naturopathe/index.php?error2=' . $errorMessage . '');
            }

        } else {
            $errorMessage = 'Les mots de passe ne sont pas identiques';
            header('Location: /le_naturopathe/index.php?error2=' . $errorMessage . '');
        }
    }
}

function getUser($login)
{
    $bdd = connect();

    $request = $bdd->prepare('SELECT * FROM users WHERE user_name = :userName'); //requête SQL permettant de selectionner ttes les données de l'utilisateur en bdd correspondant au pseudo de l'utilisateur.
    $request->execute([':userName' => htmlentities($login)]);  //on stocke le pseudo ds variable $request qui permet de définir s'il est connecté.
    return $request->fetch(); //$request est un objet contenant toutes les données de la requete executée, fecth renvoie la ligne puis la supprime, si on refait fecth on passe à la ligne suivante.
}

function verifyExistingUser($login, $email) // vérification que le userName et l'adresse mail n'existe pas déjà en Base de données
{
    $bdd = connect();

    $request = $bdd->prepare('SELECT * FROM users WHERE user_name = :userName OR mail = :email'); //requête SQL permettant de selectionner ttes les données de l'utilisateur en bdd correspondant au pseudo de l'utilisateur.
    $request->execute([':userName' => htmlentities($login), ':email' => htmlentities($email)]); //On stocke le pseudo et l'adresse mail
    return $request->fetch(); //$request est un objet contenant toutes les données d ela requete executée, fecth renvoie la ligne puis la supprime, si on refait fecth on passe à la ligne suivante.
}
