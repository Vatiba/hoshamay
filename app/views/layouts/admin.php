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
				<h1 class="text-center text-white p-4">Админ панель</h1>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="d-flex justify-content-center">
			<div class="bg-green shadow mt-4 d-flex flex-column flex-sm-row justify-content-around align-items-center p-3" style="width: 500px;">
				<a href="<?=PATH;?>" class="text-white h5">На главную страницу</a>
			</div>
		</div>
	</div>

	<?php echo $content ?>

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