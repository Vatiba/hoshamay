<div class="container pt-5">
    <div class="d-flex justify-content-center">
        <form class="form-signin" action="<?=ADMIN;?>/product/add" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tbody>
                    <tr>
                        <div class="form-group">
                            <div class="input-group input-file" name="file">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-choose" type="button">Выбрать картинку</button>
                                </span>
                                <input type="text" class="form-control" placeholder='Выберите картину'/>
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <td>Имя: </td>
                        <td><input type="text" class="form-control" placeholder="title" name="title"></td>
                    </tr>
                    <tr>
                        <td>Вес: </td>
                        <td><input type="text" class="form-control" placeholder="weight" name="weight"></td>
                        <td><h4><label for="weight">г</label></h4></td>
                    </tr>
                    <tr>
                        <td>Цена: </td>
                        <td><input type="text" class="form-control" placeholder="price" name="price"></td>
                        <td><h4><label for="weight">тмт</label></h4></td>
                    </tr>
                    <tr>
                        <td>Состав: </td>
                        <td><textarea name="text" cols="55" rows="10"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <input name="id" class='d-none' type="text" value="<?=$id?>">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Добавить</button>
        </form>
    </div>
</div>