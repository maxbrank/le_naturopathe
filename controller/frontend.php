<?php
require 'model/frontend.php';

function loginForm(){
	require 'view/frontend/loginFormView.php';
}

function login(){
	$user = getUser($_POST['loginUserName']);

	if (password_verify($_POST['loginPassword'],$user['pwd'])){
		$_SESSION = [
			'last_name' => $user['last_name'],
			'first_name' => $user['first_name'],
			'user_name' => $user['user_name'],
			'mail' => $user['mail']
		];

		require 'controller/backend.php';
		displayMenu();
	}
	else {
		loginForm();
	}
}