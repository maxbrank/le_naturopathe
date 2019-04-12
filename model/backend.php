
<?php
//fonction qui se connecte à la bdd require frontend.php
require_once 'model/frontend.php'; 


//function select commentaires de cet article qui renvoie ds un tableau
function getCommentList($idArticle){
    $bdd = connect();

    $req = $bdd->prepare('SELECT * FROM comments WHERE id_article = :idArticle');
    $req->execute([':idArticle' => $idArticle]);
    return $req->fetchAll();
}

function getArticles(){
    $bdd = connect();

    $req = $bdd->query('SELECT * FROM articles');
    return $req->fetchAll();
}

function getArticle($idArticle){
    $bdd= connect();

    $req = $bdd->prepare('SELECT * FROM articles WHERE id = :id');
    $req->execute([':id'=> $idArticle]);

    return $req->fetch();
}

 function insertComment($content){ 

 $bdd = connect();
 $req = $bdd->prepare('INSERT INTO comments (content, id_user, id_article, created_at) VALUES(:content, :id_user, :id_article, NOW())');

 $req->execute(array(
     ':content' => htmlentities($content),
     ':id_user' => htmlentities($_SESSION['id']),
     ':id_article' => htmlentities($_POST['ArticleId']),
 ));
}

function getPseudo(){ 
    $bdd = connect();
    $req = $bdd->prepare('SELECT user_name, id from users INNER JOIN comments ON comments.id_user = users.id WHERE comments.id_article = :idArticle');
    $req->execute([':idArticle' =>  ]);
}