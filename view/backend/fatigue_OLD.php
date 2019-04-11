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
                    <li class="breadcrumb-item active" aria-current="page">Plus jamais fatigué et détox des métaux lourds</li>

                </ol>
            </nav>
        </div>
    </div>
</div>
<!--------------------------------------------- ARTICLES ------------------------------------------------>

<div class="container p-30">
    <div class="row d-flex justify-content-between">
            <div class="card col-12 col-sm-6 col-md-4" style="width: 100%;">
                <img class="card-img-top" src="images/Detox-Diets-For-Weight-Loss.-500x500.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Des jus de légumes pour plus de jus</h5>
                    <p class="card-text">Une astuce toute simple pour retrouver le jus tout au long de la journée et de l’année : les jus de légumes. Vous saurez aussi pourquoi il faut éviter les jus de fruits.</p>
                    <a href="index.php?plusDeJus=true" class="btn btn-primary">Lire la suite</a>
                </div>
            </div>
            <div class="card col-12 col-sm-6 col-md-4" style="width: 100%;">
                <img class="card-img-top" src="images/Stop-a-la-fatigue-couv-500x500.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Livre Stop à la fatigue chronique avec la naturopathie</h5>
                    <p class="card-text">Être énergique et plein de vie c’est facile… Mais par où commencer ? C’est pour cela que je viens de présenter mon nouveau livre « Stop à la fatigue c’est malin » coécrit avec Vanessa Lopez. Ce guide pratique vous permet d’améliorer tous les aspect de la santé : l’alimentation en est le centre, mais il y a aussi se nettoyer de l’intérieur, bouger suffisamment (mais pas trop), apprendre à gérer le stress, à se ...</p>
                    <a href="#" class="btn btn-primary">Lire la suite</a>
                </div>
            </div>
            <div class="card col-12 col-sm-6 col-md-4" style="width: 100%;">
                <img class="card-img-top" src="images\Secrets-de-naturopathes-500x500.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Secrets de naturopathes… Le livre</h5>
                    <p class="card-text">Avec ce guide, véritable bible à utiliser au quotidien, adoptez les bons réflexes pour vous protéger, vous et votre famille, contre la maladie et vous maintenir dans un état de bien-être global.</p>
                    <a href="#" class="btn btn-primary">Lire la suite</a>
                </div>
            </div>
    </div>
</div>

<?php

$content = ob_get_clean();

require 'view/template.php';
?>