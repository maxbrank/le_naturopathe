<!DOCTYPE html>
<html lang="fr">

	<head>
		<title><?php echo $title ?></title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700" rel="stylesheet">
		<link rel="stylesheet" href="index.css">
		<style>
			@media screen and (max-width : 767px) {
				#videoMenu {
					height: 280px;
					margin-top: 15px;
				}
			}

			.deconnexion {
				color: rgba(0, 0, 0, .5);
			}

			.carousel-page {
				width: 100%;
				height: 346px;
				background-color: #5f666d;
				color: white;
			}
		</style>
	</head>
	<body>
		<header id="site-header" class="mb-3">
			<div class="container">
				<div class="row">
					<div class="col">
						<nav class="navbar navbar-expand-lg navbar-light bg-light">
							<a class="navbar-brand" href="index.php">Le NATUROPATHE</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
								<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
									<li class="nav-item active d-flex align-items-center">
										<a class="nav-link" href="index.php?fatigue=true">FATIGUE<span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item d-flex align-items-center">
										<a class="nav-link" href="#">METAUX-LOURDS</a>
									</li>
									<li class="nav-item d-flex align-items-center">
										<a class="nav-link" href="#">PRENDRE RENDEZ-VOUS</a>
									</li>
									<?php if(isset($_SESSION["user_name"])){
									?> 
									<li class="d-flex align-items-center">
										<form method="post">
											<button class="btn btn-default deconnexion" type="submit" name="logout" value="1">DECONNEXION</button>
										</form>
									</li>
									<?php
									}
									?>

									<!--<li class="nav-item d-flex align-items-center">
											<a class="nav-link" href="#"><img src="images/icon1.png"></a>
										</li>-->

								</ul>

							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>


			<?= $content ?>
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<footer class=" mt-3">
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-body row">
							<div class="col-md-9">
								<div id="logo" class="d-none d-md-block"><a href="index.php">
										<h4 class="align-items-center mb-0">Le NATUROPATHE</h4>
									</a>
								</div>
							</div>
							<div class="col-md-3  d-flex justify-content-center justify-content-md-end">
								<ul class="socials d-flex align-items-center">
									<li class=""><a href="#"><img src="images/icon-facebook.svg" alt=""></a></li>
									<li class=""><a href="#"><img src="images/icon-twitter.svg" alt=""></a></li>
									<li class=""><a href="#"><img src="images/icon-youtube.svg" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>