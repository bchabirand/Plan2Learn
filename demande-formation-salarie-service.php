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
							<li><a href="#">Les salariés de mon service</a></li>
							<li class="is-active">Demander une formation</li>
						</ul>
						<div class="panel">
							<div class="title">
								<h1>Word niveau 2</h1>
							</div>
						</div>
						<form class="request-formation edit" action="">
							<ul class="panel clearfix">
								<li>
									<h2>Formation demandée :</h2>
									<input class="input border" type="text" name="requested-formation" value="Excel">
								</li>
								<li>
									<h2>Priorité :</h2>
									<div class="priority" data-priority-value="0">
										<input type="text" class="hidden" name="priority" value="0">
									</div>
								</li>
								<li>
									<h2>Mon niveau actuel :</h2>
									<textarea name="skill" id="skill" cols="30" rows="2"></textarea>
								</li>
								<li>
									<h2>Mon objectif(s) :</h2>
									<textarea name="goal" id="goal" cols="30" rows="2"></textarea>
								</li>
								<li class="pull-right">
									<input type="submit" class="btn btn-primary" value="Je me lance !">
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'assets/includes/foot.php'; ?>
</body>
</html>