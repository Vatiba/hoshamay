
<div class="container-fluid mt-2 pb-5">
    <div class="container pt-4">
        <div class="row">
            <?php foreach($products as $k => $v): ?>
                <div class="col-md-4 pt-4">
                    <div class="card shadow">
                        <div class="card-img-top d-flex justify-content-center p-3">
                            <img src="<?=PATH?>/uploaded_images/<?=file_exists(WWW . '/uploaded_images/' . $v['img']) ? $v['img'] : 'no_image.png';?>" class="h-150px" alt="$v['img']">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center"><?=$v['title']?></h5>
                            <p class="card-text text-center"><b>Состав:</b> <?=$v['text']?></p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <h5 class="text-green text-center m-0">Вес: <?=$v['weight']?>г</h5>
                            <h5 class="text-green text-center m-0">Цена: <?=$v['price']?> тмт</h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    
</div>