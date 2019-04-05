<?php
session_start();
require 'controller/frontend.php';

if(isset($_POST['logout'])){
	session_destroy();
	session_start();
}

if(isset($_SESSION['last_name'])){
	require_once 'controller/backend.php';
	displayMenu();
}else{
	if (isset($_POST['loginUserName'])){
		login();
	}else{
		loginForm();	
	}	
}


