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
						<!-- Breadcrumb -->
						<ul class="breadcrumb">
							<li><a href="#">Groupes</a></li>
							<li class="is-active">Les groupes de mon service</li>
						</ul>
						<div class="panel">
							<div class="title">
								<h3>Les groupes de mon service</h3>
							</div>
						</div>
						<!-- Table -->
						<table class="table">
							<thead>
								<tr>
									<th>
										<div class="input-group-label">
											<span>Groupe</span>
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fas fa-search"></i>
													<span class="separator"></span>
												</span>
												<input type="text" class="form-control border" name="search-group">
											</div><!-- /input-group -->
										</div>
									</th>
									<th>
										<div class="input-group-label">
											<span>Salarié</span>
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fas fa-search"></i>
													<span class="separator"></span>
												</span>
												<input type="text" class="form-control border" name="search-user">
											</div><!-- /input-group -->
										</div>
									</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<form action="">
									<tr>
										<td><input type="text" class="input background" name="edit-input" value="Comptable"></td>
										<td>M. Dupont Jean, M Geay Grégory etc.</td>
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
						<!-- Pagination -->
						<nav class="text-center">
							<ul class="pagination">
								<li>
									<a href="#" aria-label="First">
										<i class="fas fa-angle-double-left"></i>
									</a>
								</li>
								<!-- Previous 1 page -->
								<!-- <li>
									<a href="#" aria-label="Previous">
										<i class="fas fa-angle-left"></i>
									</a>
								</li> -->
								<li class="is-active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="Next">
										<i class="fas fa-angle-right green"></i>
									</a>
								</li>
								<li>
									<a href="#" aria-label="Last">
										<i class="fas fa-angle-double-right green"></i>
									</a>
								</li>
							</ul>
						</nav>
						<div class="search-results text-center">4 Total</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'assets/includes/foot.php'; ?>
</body>
</html>