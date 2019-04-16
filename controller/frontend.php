<?php

require __DIR__ . '/../model/frontend.php';



function loginForm()
{
    require __DIR__ . '/../view/frontend/loginFormView.php';
}



function register($datareceived)
// Vérification de la validité des informations
//on s'assure que tous les champs du formualaire d'inscription ont bien été renseignés
{
    createUser($datareceived);
}




function login()
{
    $user = getUser($_POST['loginUserName']);

    if (password_verify($_POST['loginPassword'], $user['pwd'])) {
        $_SESSION = [
            'last_name' => $user['last_name'],
            'first_name' => $user['first_name'],
            'user_name' => $user['user_name'],
            'mail' => $user['mail'],
            'id' => $user['id']
        ];

        require __DIR__ . '/../controller/backend.php';
        displayMenu();
    } else {
        loginForm();
    }
}


