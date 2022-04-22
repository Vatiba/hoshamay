<div class="container pt-5">
    <div class="d-flex justify-content-center">
        <div class="w-50">
            <form class="form-signin" action="<?=ADMIN;?>/user/contact-edit" method="post">
                <table class='table'>
                    <tbody>
                        <tr>
                            <td>Телефон 1: </td>
                            <td><input type="text" class="form-control" placeholder="tel1" name="tel1" value="<?=$contacts['1']['tel1'];?>"></td>
                        </tr>
                        <tr>
                            <td>Телефон 2: </td>
                            <td><input type="text" class="form-control" placeholder="tel2" name="tel2" value="<?=$contacts['1']['tel2'];?>"></td>
                        </tr>
                        <tr>
                            <td>Mail: </td>
                            <td><input type="text" class="form-control" placeholder="mail" name="mail" value="<?=$contacts['1']['mail'];?>"></td>
                        </tr>
                        <tr>
                            <td>Адрес: </td>
                            <td><textarea name="adress" cols="55" rows="10"><?=$contacts['1']['adress'];?></textarea></td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Изменить</button>
            </form>
        </div>
    </div>
</div>