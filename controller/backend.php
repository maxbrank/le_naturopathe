<?php

function displayMenu(){
	require_once __DIR__.'/../view/backend/menu.php';
}

function displayFatigue(){
    require_once __DIR__.'/../model/backend.php';
	$articles = getArticles();

    require __DIR__.'/../view/backend/fatigue.php';
}

function displayArticle($idArticle){
	//appelle function commentaires stockée ds 1 variable
	require_once __DIR__.'/../model/backend.php';
	$article = getArticle($idArticle);
	$commentList = getCommentList($idArticle);
	require __DIR__.'/../view/backend/article.php';
}

function createComment($content){
	require_once __DIR__.'/../model/backend.php';
	insertComment($content);
	displayArticle($_GET['article']);
}