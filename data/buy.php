<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Easyterm / Заказать</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="shortcut icon" href="../img/icon.png" type="image/png">
</head>
<body>
	<!--MENU-->
	<a id="main"></a>
	<header class="header fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="javascript://0" onclick="scrolling('#main')">
							<img src="http://www.gentherm.com/sites/all/themes/gentherm2016/images/footer-logo-gentherm.png" alt="Easytherm" class="logo-img">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav">
								<!--MENU ITEMS-->
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>	
	</header>
<!-- GOODS INFO ------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------->
	<section>
		<div class="container">
			<div class="row">
				<?php
					include('data.php');
					$id = $_REQUEST['id'];
					foreach ($goodsList as $good) {
						if ($good['id'] === $id) {
							?>
								<div class="col-lg-12 goodInfo">
									<h3><?=$good['name']?></h3>
								</div>
								<div class="col-lg-4 text-center goods-block goodInfoBlock" style="display: visible;">
									<img src="../img/<?=$good['image']?>" alt="Терморегуляторы" class="img-fluid"/>
									<h5><?=$good['name']?></h5>
									<p>от <?=$good['info']?> грн</p>
								</div>
							<?php
						}
					}
				?>
			</div>
		</div>
	</section>

<!-- FOOTER ----------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-6 footer__left">
					<p>65039, Украина, г. Одесса</p>
					<p>ул. Слепнева, 2</p>

					<p>Тел. +38 (050) 333-59-03</p>
				</div>
				<div class="col-6 col-lg-6 footer__right">
					<p> </p>
					<p>Все права защищены</p>
					<p>© 2018 "Extherm" </p>
				</div>
			</div>
		</div>
	</footer>
<!-- LIBS ------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="../scripts/bootstrap.min.js"></script>
	<script src="../scripts/jquery.magnific-popup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDemFqOQza7lf831yjabpABczJ3NOlGzaI&callback=initMap"></script>
	<script src="../scripts/main.js"></script>
</body>
</html>