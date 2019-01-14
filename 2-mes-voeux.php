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
						<div class="profile">
							<img class="avatar" src="assets/images/P2L-dashboard-avatar.png" alt="Mon avatar">
							<div class="informations">
								<span class="name">Julie Floren</span>
								<span class="grade">Salarié</span>
								<span class="email">j.floren@plantolearn.com</span>
								<span class="phone">06 23 23 77 42</span>
							</div>
							<a class="edit" href="#">
								<img src="assets/images/icons/edit-dark-icon.svg" alt="Éditer son profil">
							</a>
						</div>
					</div>
					<div class="side-panel">
						<div class="wishes">
							<span class="title">Mes 3 derniers voeux</span>
							<span class="state">en attente</span>
							<span class="formation">Excel niveau 3</span>
							<span class="formation">World niveau 2</span>
						</div>
						<div class="all">
							<a href="#">Tout voir</a>
						</div>
					</div>
					<div class="side-panel">
						<div class="wishes">
							<span class="title">Mes 3 derniers voeux</span>
							<span class="state">acceptés</span>
							<span class="formation">Excel niveau 3</span>
							<span class="formation">World niveau 2</span>
						</div>
						<div class="all">
							<a href="#">Tout voir</a>
						</div>
					</div>
					<div class="side-panel no-padding">
						<div class="event-com">Event / Com</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="main-panel">
						<h1 class="main-title">Tableau de bord</h1>
						<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<i class="fas fa-exclamation-triangle"></i> Warning Message
						</div>
						<div class="panel filter">
							<div class="title">
								<h3>Mes voeux</h3>
								<span>(Total)</span>
							</div>
							<ul class="tabs list-inline">
								<li class="is-active"><span>Toutes</a></li>
								<li><span>Formation</span></li>
								<li><span>Voeux</span></li>
								<li><span>Statut</span></li>
							</ul>
						</div>
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
									<td>Urbanisme du Sl et architectures des systèmes</td>
									<td>Excel niveau 3</td>
									<td><span class="status in-progress"></span> En cours</td>
									<td class="text-right">
										<div class="btn-group">
											<button type="button" class="btn btn-icon delete dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-trash-alt"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a href="#"><i class="fas fa-trash-alt"></i> Supprimer</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Word</td>
									<td>Word niveau 2</td>
									<td><span class="status validated"></span> Validé</td>
									<td class="text-right">
										<div class="btn-group">
											<button type="button" class="btn btn-icon delete dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-trash-alt"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a href="#"><i class="fas fa-trash-alt"></i> Supprimer</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Marketing digital</td>
									<td>Niveau 1</td>
									<td><span class="status validated"></span> Validé</td>
									<td class="text-right">
										<div class="btn-group">
											<button type="button" class="btn btn-icon delete dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-trash-alt"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a href="#"><i class="fas fa-trash-alt"></i> Supprimer</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<tr>
									<td>Word</td>
									<td>Niveau 4</td>
									<td><span class="status completed"></span> Effectué</td>
									<td class="text-right">
										<div class="btn-group">
											<button type="button" class="btn btn-icon delete dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-trash-alt"></i>
											</button>
											<ul class="dropdown-menu">
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