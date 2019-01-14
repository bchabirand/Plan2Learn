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
						<h1 class="main-title">Les voeux de la société</h1>
						<div class="panel filter">
							<div class="title">
								<h3>Tous les voeux</h3>
							</div>
							<ul class="tabs list-inline">
								<li class="is-active"><span>Tous</span></li>
								<li><span>En attente</span></li>
								<li><span>À réserver</span></li>
								<li><span>Devis en cours</span></li>
								<li><span>Devis validé</span></li>
								<li><span>Form. effectuée</span></li>
								<li><span>Statut</span></li>
							</ul>
						</div>
						<table class="table">
							<thead>
								<tr>
									<th>Service</th>
									<th>Salarié</th>
									<th>Formation</th>
									<th>Voeux</th>
									<th>Priorité</th>
									<th>Statut</th>
									<th>Avis</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<form action="">
									<tr class="edit">
										<td>
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fas fa-search"></i>
													<span class="separator"></span>
												</span>
												<input type="text" class="form-control border" name="service">
											</div><!-- /input-group -->
										</td>
										<td><div class="input-group">
											<span class="input-group-addon">
												<i class="fas fa-search"></i>
												<span class="separator"></span>
											</span>
											<input type="text" class="form-control border" name="salaried">
										</div><!-- /input-group -->
									</td>
									<td>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fas fa-search"></i>
												<span class="separator"></span>
											</span>
											<input type="text" class="form-control border" name="formation">
										</div><!-- /input-group -->
									</td>
									<td>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fas fa-search"></i>
												<span class="separator"></span>
											</span>
											<input type="text" class="form-control border" name="wishes">
										</div><!-- /input-group -->
									</td>
									<td>
										<select name="priority">
											<option value="All" selected>All</option> 
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</td>
									<td>
										<select name="status">
											<option value="All" selected>All</option> 
											<option value="En attente">En attente</option>
											<option value="Validé">Validé</option>
											<option value="Effectué">Effectué</option>
										</select>
									</td>
									<td>
										<select name="opinion">
											<option value="All" selected>All</option> 
											<option value="En attente">En attente</option>
											<option value="Favorable">Favorable</option>
											<option value="Défavorable">Défavorable</option>
											<option value="Effectué">Effectué</option>
										</select>
									</td>
									<td class="text-right">
										<div class="btn-group">
											<button type="button" class="btn btn-icon abort">
												<i class="fas fa-times"></i>
											</button>
											<button type="submit" class="btn btn-icon validate">
												<i class="fas fa-check"></i>
											</button>
										</div>
									</td>
								</tr>
							</form>
							<tr>
								<td>Urbanisme</td>
								<td>Geay Grégory</td>
								<td>Urbanisme du Sl et architectures des systèmes téléconseiller</td>
								<td>Niveau 1</td>
								<td>4</td>
								<td><span class="status in-progress"></span> En attente</td>
								<td>En attente</td>
								<td class="text-center"><a class="btn btn-primary auto" data-toggle="modal" data-target="#myModal">Statuer</a></td>
							</tr>
							<tr>
								<td>Téléconseiller</td>
								<td>Geay Grégory</td>
								<td>Sage</td>
								<td>Sage finance</td>
								<td>3</td>
								<td><span class="status in-progress"></span> En attente</td>
								<td><span class="red">Défavorable</span></td>
								<td class="text-center"><a class="btn btn-primary auto" data-toggle="modal" data-target="#myModal">Statuer</a></td>
							</tr>
							<tr>
								<td>Informaticien</td>
								<td>Geay Grégory</td>
								<td>Sage</td>
								<td>Sage finance</td>
								<td>1</td>
								<td><span class="status validated"></span> Validé</td>
								<td><span class="green">Favorable</span></td>
								<td class="text-center"><a class="btn btn-primary auto" data-toggle="modal" data-target="#myModal">Statuer</a></td>
							</tr>
							<tr>
								<td>Secrétaire</td>
								<td>Geay Grégory</td>
								<td>Sage</td>
								<td>Sage finance</td>
								<td>2</td>
								<td><span class="status completed"></span> Effectué</td>
								<td>Effectué</td>
								<td class="text-center"><a class="btn btn-primary auto" data-toggle="modal" data-target="#myModal">Statuer</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Statuer sur la demande</h4>
			</div>
			<form action="">
				<div class="modal-body">
					<span>Remarque(s) :</span> <textarea name="observation" id="observation" cols="30" rows="4"></textarea>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Reporté</button>
					<button type="submit" class="btn btn-primary">Refusé</button>
					<button type="submit" class="btn btn-primary">Valider</button>
				</div>
			</form>
		</div>

	</div>
</div>

<?php include 'assets/includes/foot.php'; ?>
</body>
</html>