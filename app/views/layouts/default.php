<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- favicon.ico -->
	<link rel="icon" href="<?=PATH?>/img/logo_icon.ico">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" type="text/css" href="/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/fontawesome.solid.min.css">

	<!-- Custom style -->
	<link rel="stylesheet" type="text/css" href="/css/style.css">

	<!-- Swiper css -->
	<link rel="stylesheet" type="text/css" href="/css/swiper-bundle.min.css">

	<?=$this->getMeta();?>

</head>
<body>
	
	<header>
		<div class="shadow bg-green">
			<div class="container-lg">
				<div class="row d-flex flex-column flex-md-row align-items-center justify-content-md-between justify-content-center p-2">
					<div class="col-12 col-md-4 order-2 order-md-1 d-flex justify-content-md-start justify-content-center">
						<i class="fas fa-map-marked-alt text-white p-3 align-self-center" style="font-size: 50px"></i>
						<div class="text-white align-self-center" style="max-width: 230px">Адрес: <?=$contacts['1']['adress'];?></div>
					</div>
					<div class="col-12 col-md-4 order-1 order-md-2  d-flex justify-content-center">
						<img src="<?=PATH?>/img/logo.png" alt="Logo" style="height: 125px;">
					</div>

					<div class="col-12 col-md-4 order-3 order-md-3 d-flex flex-row justify-content-md-end justify-content-center">
						<div>
							<div class="d-flex justify-content-end">
								<div class="text-white align-items-center p-2 pr-3 align-self-center"><?=$contacts['1']['tel1'];?> <br> <?=$contacts['1']['tel2'];?></div>
								<i class="fas fa-phone-alt text-white align-self-center" style="font-size: 25px"></i>
							</div>
							<div class="d-flex justify-content-end">
								<div class="text-white align-items-center p-2 pr-3 align-self-center">
									<a class="text-white" href="http://<?=$contacts['1']['mail'];?>"><?=$contacts['1']['mail'];?></a>
								</div>
								<i class="fas fa-envelope text-white align-self-center" style="font-size: 25px"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="d-flex justify-content-center">
			<div class="bg-green shadow mt-4 d-flex flex-column flex-sm-row justify-content-around align-items-center p-3" style="width: 500px;">
				<a href="<?=PATH;?>" class="text-white h5">Главная страница</a>
				<a href="/main/about" class="text-white h5">О продукте</a>
			</div>
		</div>
	</div>

	<?php echo $content ?>

	<footer>
		<div class="shadow-lg">
			<div class="container-lg">
				<div class="row d-flex flex-column flex-md-row align-items-center justify-content-md-between justify-content-center p-2">
					<div class="col-12 col-md-4 order-2 order-md-1 d-flex justify-content-md-start justify-content-center">
						<i class="fas fa-map-marked-alt text-green p-3 align-self-center" style="font-size: 50px"></i>
						<div class="text-green align-self-center" style="max-width: 230px">Адрес: <?=$contacts['1']['adress'];?></div>
					</div>
					<div class="col-12 col-md-4 order-3 order-md-3 d-flex flex-row justify-content-md-end justify-content-center">
						<div>
							<div class="d-flex justify-content-end">
								<div class="text-green align-items-center p-2 pr-3 align-self-center"><?=$contacts['1']['tel1'];?> <br> <?=$contacts['1']['tel2'];?></div>
								<i class="fas fa-phone-alt text-green align-self-center" style="font-size: 25px"></i>
							</div>
							<div class="d-flex justify-content-end">
								<div class="text-green align-items-center p-2 pr-3 align-self-center">
									<a class="text-green" href="http://<?=$contacts['1']['mail'];?>"><?=$contacts['1']['mail'];?></a>
								</div>
								<i class="fas fa-envelope text-green align-self-center" style="font-size: 25px"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="/js/jquery-slim.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="/js/bootstrap.bundle.min.js"></script>
	<!-- Swiper js -->
	<script src="/js/swiper-bundle.min.js"></script>

	<!-- Custom js -->
	<script src="/js/custom.js"></script>

</body>
</html>