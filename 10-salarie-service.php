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
						<h1 class="main-title">Les salariés de mon service</h1>
						<div class="panel filter">
							<div class="title">
								<h3>Les salariés de mon service</h3>
								<span>4 Total</span>
							</div>
							<ul class="tabs list-inline">
								<li class="is-active"><span>Toutes</span></li>
								<li><span>Groupe</span></li>
								<li><span>Salarié</span></li>
								<li><span>Service</span></li>
								<li><span>N° Interne</span></li>
								<li><span>Statut</span></li>
							</ul>
						</div>
						<table class="table">
							<thead>
								<tr>
									<th>Service</th>
									<th>Groupe</th>
									<th>Salarié</th>
									<th>N° interne</th>
									<th>Statut</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Comptable</td>
									<td>Comptable</td>
									<td>M. Dupont Jean</td>
									<td>jdupont</td>
									<td><span class="status in-progress"></span> En attente</td>
									<td class="text-right"><a class="btn btn-secondary" href="#">Demander cette formation</a></td>
								</tr>
								<tr>
									<td>Téléconseiller</td>
									<td>Comptable</td>
									<td>M. Dupont Jean</td>
									<td>esage</td>
									<td><span class="status in-progress"></span> En attente</td>
									<td class="text-right"><a class="btn btn-secondary" href="#">Demander cette formation</a></td>
								</tr>
								<tr>
									<td>SAV</td>
									<td>Informaticien</td>
									<td>M. Dupont</td>
									<td>agros</td>
									<td><span class="status validated"></span> Validé</td>
									<td class="text-right"><a class="btn btn-secondary" href="#">Demander cette formation</a></td>
								</tr>
								<tr>
									<td>SAV</td>
									<td>Secrétaire</td>
									<td>M. Jean</td>
									<td>izarouala</td>
									<td><span class="status completed"></span> Effectué</td>
									<td class="text-right"><a class="btn btn-secondary" href="#">Demander cette formation</a></td>
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