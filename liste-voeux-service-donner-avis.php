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
							<li><a href="#">Les voeux de mon service</a></li>
							<li class="is-active">Donner son avis</li>
						</ul>
						<div class="panel">
							<div class="title">
								<h1>Comptable - M Dupont Jean / Safe Finance</h1>
							</div>
						</div>
						<form class="give-opinion" action="">
							<ul class="panel clearfix">
								<li>
									<h2>Délais acceptable (max) :</h2>
									<div class="input-spinner number">
										<div class="controls">
											<button class="btn" type="button"><i class="fas fa-angle-up"></i></button>
											<button class="btn" type="button"><i class="fas fa-angle-down"></i></button>
										</div>
										<input type="text" class="border text-center" name="delay" value="1">
										<span> Jours</span>
									</div>
								</li>
								<li>
									<h2>Localisation acceptable (max) :</h2>
									<select name="localisation">
										<option value="All" selected="">Départemental</option> 
										<option value="Option2">Option2</option>
										<option value="Option3">Option3</option>
										<option value="Option4">Option4</option>
										<option value="Option5">Option5</option>
										<option value="Option6">Option6</option>
									</select>
								</li>
								<li>
									<h2>Remarques :</h2>
									<textarea name="opinion" cols="30" rows="3"></textarea>
								</li>
								<li class="pull-right">
									<input type="submit" class="btn btn-primary" value="Défavorable">
									<input type="submit" class="btn btn-primary" value="Favorable">
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