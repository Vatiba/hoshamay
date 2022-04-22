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
				<h1 class="text-center text-white p-4">Панель действие</h1>
			</div>
		</div>
	</header>


	<?php echo $content ?>

	<!-- jQuery -->
	<script src="/js/jquery-slim.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="/js/bootstrap.bundle.min.js"></script>
	<!-- Swiper js -->
	<script src="/js/swiper-bundle.min.js"></script>

	<!-- Custom js -->
	<script src="/js/custom.js"></script>
	<script>
		function bs_input_file() {
			$(".input-file").before(
				function() {
					if ( ! $(this).prev().hasClass('input-ghost') ) {
						var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
						element.attr("name",$(this).attr("name"));
						element.change(function(){
							element.next(element).find('input').val((element.val()).split('\\').pop());
						});
						$(this).find("button.btn-choose").click(function(){
							element.click();
						});
						$(this).find("button.btn-reset").click(function(){
							element.val(null);
							$(this).parents(".input-file").find('input').val('');
						});
						$(this).find('input').css("cursor","pointer");
						$(this).find('input').mousedown(function() {
							$(this).parents('.input-file').prev().click();
							return false;
						});
						return element;
					}
				}
			);
		}
		$(function() {
			bs_input_file();
		});
	</script>
</body>
</html>