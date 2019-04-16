<?php

//function select commentaires de cet article qui renvoie ds un tableau
function getCommentList($idArticle)
{
    $bdd = connect();

    $req = $bdd->prepare('SELECT * from users JOIN comments ON comments.id_user = users.id WHERE comments.id_article = :idArticle');
    $req->execute([':idArticle' => $idArticle]);    
    return $req->fetchAll();
}

function getArticles()
{
    $bdd = connect();

    $req = $bdd->query('SELECT * FROM articles');

    return $req->fetchAll();
}

function getArticle($idArticle)
{
    $bdd = connect();

    $req = $bdd->prepare('SELECT * FROM articles WHERE id = :id');
    $req->execute([':id' => $idArticle]);
    return $req->fetch();
}

function insertComment($content)
{
    $bdd = connect();
    
    // NOW() fonction sql qui récupère la date et lheure au moment de la requete
    $req = $bdd->prepare('INSERT INTO comments (content, id_user, id_article, created_at) VALUES(:content, :id_user, :id_article, NOW())'); 
    $req->execute(array(
        ':content' => htmlentities($content),
        ':id_user' => htmlentities($_SESSION['id']),
        ':id_article' => htmlentities($_POST['ArticleId']),
    ));
}
