<div class="container pt-5">

    <div class="card p-3 shadow border-0 mb-5">
        <h3 class="text-center">Администратор</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Логин</th>
                    <th scope="col">Пароль</th>
                    <th scope="col">Изменить</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th width="170"><?=$admin_user['1']['login'];?></th>
                    <th width="170"><?=$admin_user['1']['password'];?></th>
                    <th><a href="<?=ADMIN?>/user/user-edit?id=<?=$admin_user['1']['id'];?>"><i class="fas fa-pen" style="font-size: 25px;"></i></a></th>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="card p-3 shadow border-0 mb-5">
        <h3 class="text-center">Контакты</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Телефон 1</th>
                    <th scope="col">Телефон 2</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Адрес</th>
                    <th scope="col">Изменить</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th width="170"><?=$contacts['1']['tel1'];?></th>
                    <th width="170"><?=$contacts['1']['tel2'];?></th>
                    <th><?=$contacts['1']['mail'];?></th>
                    <th><?=$contacts['1']['adress'];?></th>
                    <th><a href="<?=ADMIN?>/user/contact-edit?id=<?=$contacts['1']['id'];?>"><i class="fas fa-pen" style="font-size: 25px;"></i></a></th>
                </tr>
            </tbody>
        </table>
    </div>



    <div class="card p-3 shadow border-0 mb-5">
        <h3 class="text-center">Все товары</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Картина</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Состав</th>
                    <th scope="col">Вес</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Изменить</th>
                    <th scope="col">Удалить</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $k => $v):?>
                    <tr>
                        <th scope="row"><?=$v['id']?></th>
                        <th><img src="/uploaded_images/<?=file_exists(WWW . '/uploaded_images/' . $v['img']) ? $v['img'] : 'no_image.png';?>" class="card-img" style="height: 90px; width: 80px;" alt="<?=$v['img'];?>"></th>
                        <th><?=$v['title'];?></th>
                        <th><?=$v['text'];?></th>
                        <th><?=$v['weight'];?>г</th>
                        <th><?=$v['price'];?>тмт</th>
                        <th><a href="<?=ADMIN?>/product/edit?id=<?=$v['id'];?>"><i class="fas fa-pen" style="font-size: 25px;"></i></a></th>
                        <th><a href="<?=ADMIN?>/product/delete?id=<?=$v['id'];?>"><i class="fas fa-trash-alt" style="color: red; font-size: 25px;"></i></a></th>
                    </tr>
                <?php endforeach; ?>
        </table>
    <div class="d-flex justify-content-center">
        <a href="<?=ADMIN?>/product/add"><h3>Добавить продукт</h3></a>
    </div>
    </div>
</div>