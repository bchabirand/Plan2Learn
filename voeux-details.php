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
							<li class="is-active">Voeux : Word niveau 2</li>
						</ul>
						<div class="panel edit">
							<div class="title">
								<h1>John DOE - Word niveau 2</h1>
							</div>
							<a href="#">
								<img src="assets/images/icons/edit-white-icon.svg" alt="Editer">
							</a>
						</div>
						<ul class="panel details">
							<li>Ma formation</li>
							<li>Word</li>
							<li>Word niveau 2</li>
							<li><span class="status validated"></span> Validé</li>
						</ul>
						<div class="panel">
							<!-- Priority value is generated with javascript -->
							<div class="priority" data-priority-value="4">Priorité : </div>
							<!-- No JS version -->
							<!-- <div class="priority">
								Priorité : 
								<span class="circle is-active"></span>
								<span class="circle"></span>
								<span class="circle"></span>
								<span class="circle"></span>
								<span class="circle"></span>
							</div> -->
							<div class="description">
								<h3>Mon niveau actuel :</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem, provident! Iure nostrum nobis numquam maxime, nemo veritatis, excepturi hic ea iusto, officiis tempore commodi ad earum doloremque dolor recusandae amet accusamus! Hic repudiandae tempore enim explicabo molestias officia totam quisquam, sed temporibus! Saepe quod atque tempora inventore cupiditate assumenda.</p>
							</div>
							<div class="goal">
								<h3>Mon objectif(s) :</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum voluptate itaque deserunt laborum quod minima reiciendis nemo quis asperiores cum tenetur non est, eius voluptatibus officiis sint praesentium, quos quas!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'assets/includes/foot.php'; ?>
</body>
</html>