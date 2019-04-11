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
        <?php
        foreach($articles as $key =>$article){

        ?>
        <div class="card col-12 col-sm-6 col-md-4" style="width: 100%;">
            <img class="card-img-top" src="images/<?= $article['img'];?>" alt="Card image cap"> <!-- < ? =  signifie < ? php echo -->
            <div class="card-body">
                <h5 class="card-title"><?= $article['title']; ?></h5>
                <p class="card-text"><?= substr($article['content'],0,180); ?></p>
                <a href="index.php?article=<?= $article['id']; ?>" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>

<?php

$content = ob_get_clean();

require 'view/template.php';
?>