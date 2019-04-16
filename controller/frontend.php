<?php

require __DIR__ . '/../model/frontend.php';



function loginForm()
{
    require __DIR__ . '/../view/frontend/loginFormView.php';
}



function register($datareceived)
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


