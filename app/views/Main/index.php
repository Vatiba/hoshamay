
<div class="container-xl p-0">
    <img class="w-100" src="<?=PATH?>/img/main_image.png" alt="main-image">
</div>

<div class="container-fluid bg-green">
    <div class="container p-0 pt-4">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach($products as $k => $v):?>
                    <div class="swiper-slide">
                        <div class="card shadow">
                            <div class="card-img-top d-flex justify-content-center p-3">
                                <img src="<?=PATH?>/uploaded_images/<?=file_exists(WWW . '/uploaded_images/' . $v['img']) ? $v['img'] : 'no_image.png';?>" class="h-150px" style="max-width: 100%" alt="$v['img']">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= $v['title'];?></h5>
                                <p class="card-text text-center"><b>Состав:</b> <?=$v['text'];?></p>
                            </div>
                            <div class="card-footer">
                                <h4 class="text-green text-center m-0"><?=$v['price'];?>тмт</h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        
        <div class="d-flex justify-content-center p-4">
            <a href="/main/about" class="btn btn-white btn-lg shadow text-green">Смотреть все</a>
        </div>
    </div>
    <div class="container text-white p-4">
        <h1 class="text-center">О компании</h1>
        <h6 class="text-center p-2">
            Хошомай - украшение столов в естественном вкусе, желание сердец и первое из подношений.
        </h6>
        <div class="d-flex justify-content-center p-4">
            <img src="<?=PATH?>/img/onumler.png" alt="onumler" class="w-75">
        </div>
        <h6 class="text-center p-2">
            Наша компания является одной из ведущих в области поставок продуктов питания, отличающихся своим высоким качеством и привликательными ценами. Предлая широкий ассортимент этих товаров покупателю.
        </h6>
	</div>
</div>