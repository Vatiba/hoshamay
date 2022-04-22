<div class="container pt-5">
    <div class="d-flex justify-content-center">
        <form class="form-signin" action="<?=ADMIN;?>/product/edit" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tbody>
                    <tr>
                        <td>Картина: </td>
                        <td class='d-flex justify-content-center'><img src="<?=PATH?>/uploaded_images/<?=file_exists(WWW . '/uploaded_images/' . $product[$id]['img']) ? $product[$id]['img'] : 'no_image.png';?>" class="card-img" style="height: 130px; width: 120px;" alt="<?=$v['img'];?>"></td>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <div class="input-group input-file" name="file">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-choose" type="button">Выбрать картинку</button>
                                </span>
                                <input type="text" class="form-control" placeholder='Выберите картину' value=""/>
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <td>Имя: </td>
                        <td><input type="text" class="form-control" placeholder="title" name="title" value="<?=$product[$id]['title'];?>"></td>
                    </tr>
                    <tr>
                        <td>Вес: </td>
                        <td><input type="text" class="form-control" placeholder="weight" name="weight" value="<?=$product[$id]['weight'];?>"></td>
                        <td><h4><label for="weight">г</label></h4></td>
                    </tr>
                    <tr>
                        <td>Цена: </td>
                        <td><input type="text" class="form-control" placeholder="price" name="price" value="<?=$product[$id]['price'];?>"></td>
                        <td><h4><label for="weight">тмт</label></h4></td>
                    </tr>
                    <tr>
                        <td>Состав: </td>
                        <td><textarea name="text" cols="55" rows="10"><?=$product[$id]['text'];?></textarea></td>
                    </tr>
                </tbody>
            </table>
            <input name="id" class='d-none' type="text" value="<?=$id?>">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Изменить</button>
        </form>
    </div>
</div>