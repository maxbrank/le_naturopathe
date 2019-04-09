<?php

ob_start();

$title = 'Menu Naturopathe';

?>

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
    <!--------------------------------------------- PARTIE HAUTE ------------------------------------------------>
    <div id="partie haute" class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Êtes-vous intoxiqué aux métaux lourds ?</h5>
                        <p class="card-text">Comment savoir si vous êtes intoxiqués par les métaux lourds sans faire de test coûteux ou dangereux ? 
                        Je vous présente un test gratuit qui permet de vous faire une très bonne idée de votre niveau d’intoxication.</p>
                        <a href="#" class="btn btn-primary d-block">ACCÉDER AU TEST</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 "><iframe width="100%" height="100%" src="https://www.youtube.com/embed/kQGvyL56R6M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>             
            </div>
        </div>
    </div>
    <!--------------------------------------------- Séparation HR ------------------------------------------------>
    <hr id="hr1">

    <!--------------------------------------------- PARTIE BASSE ------------------------------------------------>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
        <img src="images/Detox-Diets-For-Weight-Loss.-500x500" alt="Des jus de légumes pour plus de jus">
        </div>

        <div class="item">
        <img src="images/Stop-a-la-fatigue-couv-500x500.png" alt="Livre Stop à la fatigue chronique avec la naturopathie">
        </div>

        <div class="item">
        <img src="Smoothie-aux-fruits-500x346.jpg" alt="Mon Smoothie ô fruits">
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <?php

    $content = ob_get_clean();

    require 'view/template.php';
    ?>