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
    
	<div class="container">
		<?php if(isset($_SESSION['error'])): ?>

		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<?php echo $_SESSION['error']; unset($_SESSION['error']);?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<?php endif; ?>
		<div class="d-flex justify-content-center">
			<div class="bg-white shadow mt-4 d-flex flex-column flex-sm-row justify-content-around align-items-center p-3" style="width: 500px;">
				<?=$content;?>
			</div>
		</div>
	</div>

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