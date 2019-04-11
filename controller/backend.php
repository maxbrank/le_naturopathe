<?php

function displayMenu(){
	require_once 'view/backend/menu.php';
}

function displayFatigue(){
	require_once 'model/backend.php';
	$articles = getArticles();

	require 'view/backend/fatigue.php';
}

function displayArticle($idArticle){
	//appelle function commentaires stockée ds 1 variable
	require_once 'model/backend.php';
	$article = getArticle($idArticle);
	$commentList = getCommentList($idArticle);
	require 'view/backend/article.php';
}

function createComment($content){
	require_once 'model/backend.php';
	insertComment($content);
	displayArticle($_GET['article']);
}