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
				<div class="col-md-12">
					<div class="main-panel full">
						<ul class="breadcrumb">
							<li><a href="#">Tableau de bord</a></li>
							<li class="is-active">Résultat de recherche</li>
						</ul>
						<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<i class="fas fa-exclamation-triangle"></i> Warning Message
						</div>
						<div class="panel">
							<div class="title">
								<h1>Résultat de : Excel</h1>
							</div>
						</div>
						<table class="wishes-list table">
							<thead>
								<tr>
									<th>Formation</th>
									<th>Durée</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Excel</td>
									<td>Quelques jours</td>
									<td class="text-right"><a class="btn btn-primary" href="#">Demander cette formation</a></td>
								</tr>
								<tr>
									<td>Excel</td>
									<td>Quelques semaines</td>
									<td class="text-right"><a class="btn btn-primary" href="#">Demander cette formation</a></td>
								</tr>
								<tr>
									<td>Excel</td>
									<td>Quelques jours</td>
									<td class="text-right"><a class="btn btn-primary" href="#">Demander cette formation</a></td>
								</tr>
								<tr>
									<td>Excel</td>
									<td>Quelques jours</td>
									<td class="text-right"><a class="btn btn-primary" href="#">Demander cette formation</a></td>
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