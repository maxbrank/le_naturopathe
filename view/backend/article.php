<?php

$title = 'Fatigue - Le Naturopathe';

ob_start();

?>

<!--------------------------------------------- BREADCRUMB ------------------------------------------------>
<div id="breadcrumb-container" class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#"></a></li> -->
                    <li class="breadcrumb-item"><a href="#">Fatigue</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Des jus de légumes pour plus de jus</li>

                </ol>
            </nav>
        </div>
    </div>
</div>

<!---------------------------------------------- ARTICLE ---------------------------------------------------->
<div class="container">
    <div>
        <h2><?= $article['title']; ?></h2>
    <div class="row img-preload"><img src="images/Detox-Diets-For-Weight-Loss.-538x218.jpg" width="538" height="218" alt="Des jus de légumes pour plus de jus"></div>
    <div class="row videoArticle"></div>
    <div>
        <p><?= $article['content']; ?></p>
    </div>
</div>

<!---------------------------------------------- SAISIE DE COMMENTAIRES -------------------------------------->
<!-- <div class="saisieCommentaires">
<form id="SaisieCommentairesPlusDeJus" action="post">
    <textarea name="content" id="Saisie" cols="30" rows="10"></textarea>
</form>
</div>
-->

<div class="row bootstrap snippets">
    <div class="col-md-6 col-md-offset-2 col-sm-12">
        <div class="comment-wrapper">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Commentaires
                </div>
                <div class="panel-body">
                    <form method="POST">
                    <textarea class="form-control" placeholder="write a comment..." rows="3" name="newContent"></textarea>
                    
                    <br>
                    <button class="btn btn-info pull-right" type="submit" name="ArticleId" value="<?= $article['id']; ?>">Post</button>
                    </form>
                    <div class="clearfix"></div>
                    <hr>
                    <ul class="media-list">
                    <?php
                    foreach ($commentList as $key => $comment) {
                    ?> 
                        <li class="media">
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted">posté le <?= $comment['created_at']; ?></small>
                                </span>
                                <p><strong><?= ?></strong>
                                <?= $comment['content']; ?>
                                </p>
                            </div>
                        </li>
                    <?php
                    }
                    ?>               
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>


<!---------------------------------------------- ZONE DE COMMENTAIRES ---------------------------------------->
<div class="listeCommentaires">

</div>




<?php

$content = ob_get_clean();

require 'view/template.php';
?>