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
							<li><a href="#">Groupes</a></li>
							<li class="is-active">Les groupes de mon service</li>
						</ul>
						<div class="panel filter">
							<div class="title">
								<h3>Les groupes de mon service</h3>
								<span>4 Total</span>
							</div>
							<ul class="tabs list-inline">
								<li class="is-active"><span>Toutes</span></li>
								<li><span>Groupe</span></li>
								<li><span>Salarié</span></li>
							</ul>
						</div>
						<table class="table">
							<thead>
								<tr>
									<th>Groupe</th>
									<th>Salarié</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Comptable</td>
									<td>M. Dupont Jean, M Geay Grégory etc.</td>
									<td class="text-right">
										<div class="btn-group">
											<button type="button" class="btn btn-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-ellipsis-h"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a href="#"><i class="fas fa-pencil-alt"></i> Modifier</a></li>
												<li><a href="#"><i class="fas fa-trash-alt"></i> Supprimer</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Téléconseiller</td>
									<td>M. Dupont Jean, M Geay Grégory etc.</td>
									<td class="text-right">
										<div class="btn-group">
											<button type="button" class="btn btn-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-ellipsis-h"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a href="#"><i class="fas fa-pencil-alt"></i> Modifier</a></li>
												<li><a href="#"><i class="fas fa-trash-alt"></i> Supprimer</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Informaticien</td>
									<td>M Jean</td>
									<td class="text-right">
										<div class="btn-group">
											<button type="button" class="btn btn-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-ellipsis-h"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a href="#"><i class="fas fa-pencil-alt"></i> Modifier</a></li>
												<li><a href="#"><i class="fas fa-trash-alt"></i> Supprimer</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Secrétaire</td>
									<td>M. Dupont Jean, M Geay Grégory etc.</td>
									<td class="text-right">
										<div class="btn-group">
											<button type="button" class="btn btn-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-ellipsis-h"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a href="#"><i class="fas fa-pencil-alt"></i> Modifier</a></li>
												<li><a href="#"><i class="fas fa-trash-alt"></i> Supprimer</a></li>
											</ul>
										</div>
									</td>
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