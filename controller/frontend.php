<?php
require 'model/frontend.php';

function loginForm()
{
	require 'view/frontend/loginFormView.php';
}



function register()
// Vérification de la validité des informations
//on s'assure que tous les champs du formualire d'inscription ont bien été renseignés
{
/*$if (
		isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['userName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword'])
	) //var_dump
		{	//on déclare une variable pour chaque envoie de champ (+ facile à lire et à écrire)
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$userName = $_POST['userName'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirmPassword = $_POST['confirmPassword'];

			//on s'assure que le mot de passe et sa confirmation de mot de passe soient identiques
			if ($password == $confirmPassword) {
				// Hachage du mot de passe
				$password_hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);

				//Connexion à la BDD et envoie des données de l'utilisateur en BDD
				createUser();
			}
		}*/
	}



	function login()
	{
		$user = getUser($_POST['loginUserName']);

		if (password_verify($_POST['loginPassword'], $user['pwd'])) {
			$_SESSION = [
				'last_name' => $user['last_name'],
				'first_name' => $user['first_name'],
				'user_name' => $user['user_name'],
				'mail' => $user['mail']
			];

			require 'controller/backend.php';
			displayMenu();
		} else {
			loginForm();
		}
	}


