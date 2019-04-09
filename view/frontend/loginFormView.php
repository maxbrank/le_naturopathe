<?php

// mise en mémoire tampon de ce qui suit
ob_start();

$title = 'Login Naturopathe';

?>

<div id="breadcrumb-container" class="container">
		<div class="row">
			<div class="col">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Accueil</a></li>
						<!-- <li class="breadcrumb-item"><a href="#"></a></li> -->
						<li class="breadcrumb-item active" aria-current="page">Connexion et Inscription</li>

					</ol>
				</nav>
			</div>
		</div>
		<?php
			
			if(isset($_GET['success'])){
				echo "<div class='alert alert-success'><p>".$_GET['success']."</p></div>";
			}	
		?>
	</div>
	<!----------------------------------------- FORMULAIRE CONNEXION ------------------------------------------------>
	<div id="login-container" class="container mb-3">
		<form id="login-form" method="post">
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Connexion</h5>
							<div class="row justify-content-end">
								<!------------------ Pseudo ------------------>
								<div class="col-md-6">
									<div class="form-group">
										<label for="loginInput" class="d-none d-md-block">Pseudo :</label>
										<input type="text" class="form-control" id="LoginUserName" placeholder="Pseudo" name="loginUserName" required/>
									</div>
								</div>
								<!--------------- Mot de Passe ---------------->
								<div class="col-md-6">
									<div class="form-group">
										<label for="loginPassword" class="d-none d-md-block">Mot de passe :</label>
										<input type="password" class="form-control" id="LoginPassword" placeholder="Mot de passe" name="loginPassword" required />
									</div>
								</div>
								<!----------------- Bouton -------------------->
								<div class="col-md-4">
									<button type="submit" class="btn btn-primary btn-lg btn-block">Se connecter</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!-------------------------------------------- FORMULAIRE INSCRIPTION ---------------------------------------------------->
	<div id="register-container" class="container mb-3">
		<form id="register-form" action="model/frontend.php" method="post">
		
			
			<?php
			
				if(isset($_GET['error'])){
					echo "<div class='alert alert-danger'><p>".$_GET['error']."</p></div>";
				}	
				if(isset($_GET['error2'])){
					echo "<div class='alert alert-danger'><p>".$_GET['error2']."</p></div>";
				}	
			?>
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Inscription</h5>
							<div class="row justify-content-end">
								<!--------------- Prénom ---------------->
								<div class="col-md-6">
									<div class="form-group">
										<label for="Surname" class="d-none d-md-block">Prénom :</label>
										<input type="text" class="form-control" id="FirstName" placeholder="Prénom" name="firstName" required />
									</div>
								</div>
								<!----------------- Nom ------------------>
								<div class="col-md-6">
									<div class="form-group">
										<label for="signUpName" class="d-none d-md-block">Nom :</label>
										<input type="text" class="form-control" id="LastName" placeholder="Nom" name="lastName" required />
									</div>
								</div>
								<!---------------- Pseudo ------------------>
								<div class="col-md-6">
									<div class="form-group">
										<label for="Pseudo" class="d-none d-md-block">Pseudo :</label>
										<input type="text" class="form-control" id="UserName" placeholder="Pseudo" name="userName" required />
									</div>
								</div>
								<!------------------ Email ------------------>
								<div class="col-md-6">
									<div class="form-group">
										<label for="Email" class="d-none d-md-block">Email :</label>
										<input type="email" class="form-control" id="Email" placeholder="Email" name="email" required/>
									</div>
								</div>
								<!---------------- Mot de Passe ------------->
								<div class="col-md-6">
									<div class="form-group">
										<label for="Password" class="d-none d-md-block">Mot de passe :</label>
										<input type="password" class="form-control" id="Password" placeholder="Mot de passe" name="password" required/>
									</div>
								</div>
								<!----------- Confirmation Mot de Passe ----------->
								<div class="col-md-6">
									<div class="form-group">
										<label for="ConfirmPassword" class="d-none d-md-block">Confirmez le mot de passe :</label>
										<input type="password" class="form-control" id="ConfirmPassword" placeholder="Confirmez le mot de passe" name="confirmPassword" required/>
									</div>
								</div>
								<!------------------- Bouton --------------------->
								<div class="col-md-4">
									<button type="submit" id="validBTNAjoutUser" class="btn btn-primary btn-lg btn-block">S'inscrire</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	
	<?php
//récupère (get) et vide (clean) la mémoire tampon
$content = ob_get_clean();

require 'view/template.php';
?>
