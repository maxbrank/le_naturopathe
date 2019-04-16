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
                        <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#"></a></li> -->
                        <li class="breadcrumb-item"><a href="index.php?fatigue=true">Fatigue</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Des jus de légumes pour plus de jus</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!---------------------------------------------- ARTICLE ---------------------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?= $article['title']; ?></h2>
            </div>
            <div class="col-md-6">
                <img src="images/Detox-Diets-For-Weight-Loss.-538x218.jpg" width="538" height="218"
                     alt="Des jus de légumes pour plus de jus">
            </div>
            <div class="col-md-6">
                <p><?= $article['content']; ?></p>
            </div>
        </div>

        <!---------------------------------------------- COMMENTAIRES -------------------------------------->
    
        <div class="row mt-3">
            <div class="col-12">
                <div class="comment-wrapper">
                    <div class="panel panel-info">
                        <!-------------------- Saisie de commentaires ------------->
                        <div class="panel-heading">
                            Laissez un commentaire :
                        </div>
                        <div class="panel-body">
                            <form method="POST">
                                <textarea class="form-control" placeholder="laisser un commentaire..." rows="3"
                                          name="newContent"></textarea>

                                <br>
                                <button class="btn btn-info pull-right" type="submit" name="ArticleId"
                                        value="<?= $article['id']; ?>">Envoyer
                                </button>
                            </form>
                            <div class="clearfix"></div>
                            <hr>
                            <!------------ Liste des commentaires des internautes ------------->
                            <div class="panel-heading">
                                Commentaires :
                            </div>
                            <ul class="media-list">
                                <?php
                                foreach ($commentList as $key => $comment) {
                                    ?>
                                    <li class="media">
                                        <div class="media-body">
                                            <strong><?= $comment['user_name'] ?></strong>
                                            <span class="text-muted pull-right">
                                            <small class="text-muted">posté le <?= $comment['created_at']; ?></small>
                                        </span>
                                            <p>
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
    </div>


<?php

$content = ob_get_clean();

require 'view/template.php';
?>