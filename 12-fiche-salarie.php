<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include 'assets/includes/head.php'; ?>
</head>
<body>
	<?php include 'assets/includes/nav.php'; ?>

	<!-- dashboard -->
	<section class="dashboard">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="side-panel">
						<div class="profile left">
							<img class="avatar large" src="assets/images/P2L-profile-avatar-large.png" alt="Mon avatar">
							<div class="informations">
								<span class="name">Julie Floren</span>
								<span class="grade">Salarié</span>
							</div>
						</div>
						<hr>
						<ul class="details">
							<li>
								<div class="title">Email</div>
								<div class="email">f.julie@dashboard.com</div>
							</li>
							<li>
								<div class="title">Mobile</div>
								<div class="mobile">+33 (0) 7887 665 588</div>
							</li>
							<li>
								<div class="title">Date. d'embauche</div>
								<div class="hiring">01/01/2010</div>
							</li>
							<li>
								<div class="title">N interne</div>
								<div class="id">0123456789</div>
							</li>
							<li>
								<div class="title">Login</div>
								<div class="login">j.dupont</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8">
					<div class="main-panel">
						<h1 class="main-title">Les voeux</h1>
						<!-- Table -->
						<table class="table">
							<thead>
								<tr>
									<th>Formation</th>
									<th>Voeux</th>
									<th>Statut</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Excel</td>
									<td>Excel niveau 3</td>
									<td><span class="status in-progress"></span> En attente</td>
									<td class="text-center"><a class="btn btn-primary small" href="#">Donner son avis</a></td>
								</tr>
								<tr>
									<td>Word</td>
									<td>Word niveau 3</td>
									<td><span class="status in-progress"></span> En attente</td>
									<td class="text-center"><span class="label denied">Défavorable</span></td>
								</tr>
								<tr>
									<td>Excel</td>
									<td>Excel niveau 2</td>
									<td><span class="status validated"></span> Validé</td>
									<td class="text-center"><span class="label accepted">Favorable</span></td>
								</tr>
								<tr>
									<td>Excel</td>
									<td>Excel niveau 1</td>
									<td><span class="status completed"></span> Effectué</td>
									<td class="text-center"><span class="label">Effectué</span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'assets/includes/foot.php'; ?>
</body>
</html>