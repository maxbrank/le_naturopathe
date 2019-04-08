<?php

function connect()
{
    $dbname = "le_naturopathe";
    $user = "root";
    $psd = "root";


    try {
        $database = new PDO("mysql:host=localhost;dbname=$dbname", $user, $psd);
        return $database;
    } catch (Exception $err) {            // catch se lance que si on rencontre un pb dans le try
        echo "Erreur:" . $err->getMessage() . "</br>";
    }
    return $database;
}


if (isset($_POST)) {
    $datareceived = $_POST;
    createUser($datareceived);
};

function createUser($data)
{

    //if(isset($_POST)){var_dump($_POST);}
    
    

    //connexion à la Base de Données
    $bdd = connect();

    if ((isset($_POST['firstName'])) && (isset($_POST['lastName'])) && (isset($_POST['userName'])) && (isset($_POST['email'])) && (isset($_POST['password'])) && (isset($_POST['confirmPassword']))) 
    {   
            //on déclare une variable pour chaque envoie de champ (+ facile à lire et à écrire)
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $userName = $_POST['userName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
            echo($password);
            echo($confirmPassword);

            //on s'assure que le mot de passe et sa confirmation de mot de passe soient identiques
            if ($password == $confirmPassword) {
                
                // Hachage du mot de passe
                $password_hashed = password_hash($_POST['password'], PASSWORD_DEFAULT); 
                
                $req = $bdd->prepare('INSERT INTO users(first_name, last_name, user_name, mail, pwd) VALUES(:firstName, :lastName, :userName, :email, :password)');
                
                $success = $req->execute(array(
                    ':firstName' => htmlentities($firstName),
                    ':lastName' => htmlentities($lastName),
                    ':userName' => htmlentities($userName),
                    ':email' => htmlentities($email),
                    ':password' => htmlentities($password_hashed)
                ));
                
                if ($success == true){
                    $successMessage = "Inscription réussie, veuillez vous connecter";
                    header('Location: /le_naturopathe/index.php?success='.$successMessage.'');
                }
                else{
                    $errorMessage = "Problème d'insertion en BDD, réessayer plus tard";
                    
                    header('Location: /le_naturopathe/index.php?error='.$errorMessage.'');
                }             

            }
            else{ 
                $errorMessage = 'Les mots de passe ne sont pas identiques';
                header('Location: /le_naturopathe/index.php?error2='.$errorMessage.'');
            }
        }
        
};




function getUser($login)
{
    $bdd = connect();

    $request = $bdd->prepare('SELECT * FROM users WHERE user_name = :userName'); //requête SQL permettant de selectionner ttes les données de l'utilisateur en bdd correspondant au pseudo de l'utilisateur.
    $request->execute([':userName' => htmlentities($login)]);  //on stocke le pseudo ds variable $request qui permet de définir s'il est connecté.
    return $request->fetch(); //$request est un objet contenant toutes les données d ela requete executée, fecth renvoie la ligne puis la supprime, si on refait fecth on passe à la ligne suivante.
}
