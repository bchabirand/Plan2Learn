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
						<h1 class="main-title">Les voeux de mon service</h1>
						<div class="panel filter">
							<div class="title">
								<h3>Les voeux de mon service</h3>
								<span>4 Total</span>
							</div>
							<ul class="tabs list-inline">
								<li class="is-active"><span>Toutes</span></li>
								<li><span>Groupe</span></li>
								<li><span>Salarié</span></li>
								<li><span>Formation</span></li>
								<li><span>Voeux</span></li>
								<li><span>Statut</span></li>
								<li><span>Priorité</span></li>
							</ul>
						</div>
						<table class="table">
							<thead>
								<tr>
									<th>Groupe</th>
									<th>Salarié</th>
									<th>Formation</th>
									<th>Voeux</th>
									<th>Priorité</th>
									<th>Statut</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Comptable</td>
									<td>M. Geay Grégory</td>
									<td>Sage</td>
									<td>Excel niveau 2</td>
									<td>3</td>
									<td><span class="status in-progress"></span> En attente</td>
									<td class="text-center"><a class="btn btn-primary small" href="#">Donner son avis</a></td>
								</tr>
								<tr>
									<td>Téléconseiller</td>
									<td>M. Dupont Jean</td>
									<td>Sage</td>
									<td>Sage finance</td>
									<td>4</td>
									<td><span class="status in-progress"></span> En attente</td>
									<td class="text-center"><span class="label denied">Défavorable</span></td>
								</tr>
								<tr>
									<td>Informaticien</td>
									<td>M. Dupont Jean</td>
									<td>Sage</td>
									<td>Sage finance</td>
									<td>4</td>
									<td><span class="status validated"></span> Validé</td>
									<td class="text-center"><span class="label accepted">Favorable</span></td>
								</tr>
								<tr>
									<td>Secrétaire</td>
									<td>M. Dupont Jean</td>
									<td>Sage</td>
									<td>Sage finance</td>
									<td>4</td>
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