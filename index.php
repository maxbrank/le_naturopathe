<?php
session_start();
require_once __DIR__."/model/db.php";
require __DIR__.'/controller/frontend.php';

//var_dump($_POST);
if (isset($_POST['logout'])) {
    session_destroy();
    session_start();
}

if (isset($_SESSION['last_name'])) {
    require_once __DIR__.'/controller/backend.php';
    if (isset($_GET['fatigue'])) {
        displayFatigue();
    } else if (isset($_POST['newContent'])) {
        createComment($_POST['newContent']);
    } else if (isset($_GET['article'])) {
        displayArticle($_GET['article']);
    } else {
        displayMenu();
    }
} else {
    if (isset($_POST['loginUserName'])) {
        login();
    } else {
        loginForm();
    }
}



