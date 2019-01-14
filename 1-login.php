<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- meta -->
	<meta charset="UTF-8">
	<meta name="author" content="Boris Chabirand">
	<title>Title</title>
	<meta name="description" content="Description">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- stylesheets -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/theme.css">
	<link rel="stylesheet" href="assets/css/fonts.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
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