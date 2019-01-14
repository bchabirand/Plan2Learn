<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include 'assets/includes/head.php'; ?>
</head>
<body>

	<!-- login -->
	<section id="login">
		<a href="#"><img class="logo" src="assets/images/P2L-logo.png" alt="Logo de Plan2Learn"></a>
		<div class="container">

			<form class="form-signin">
				<h1 class="form-signin-heading">Connexion</h1>
				<label for="inputUsername" class="sr-only">Mon identifiant</label>
				<input type="text" id="inputUsername" class="form-control" placeholder="Mon identifiant" required autofocus>
				<label for="inputPassword" class="sr-only">Mon mot de passe</label>
				<div class="form-signin-password">
					<input type="password" id="inputPassword" class="form-control" placeholder="Mon mot de passe" required>
					<div class="togglePassword">
						<i class="far fa-eye-slash"></i>
					</div>
				</div>
				<div class="form-signin-group">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="remember-me"> Rester connecté
						</label>
					</div>
					<button class="btn btn-lg btn-primary" type="submit">GO !</button>
				</div>
				<div class="form-signin-forget">
					<a href="#">J'ai oublié mon mot de passe</a>
				</div>
			</form>

		</div> <!-- /container -->
	</section>

	<?php include 'assets/includes/foot.php'; ?>
</body>
</html>