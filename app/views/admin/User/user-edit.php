<div class="container pt-5">
    <div class="d-flex justify-content-center">
        <div class="w-50 ">
            <form class="form-signin" action="<?=ADMIN;?>/user/user-edit" method="post">
                <h1 class="h3 mb-3 font-weight-normal text-center">Измените данные</h1>
                <div class="input-group pt-3">
                    <input type="username" class="form-control" placeholder="Login" name="login" value="<?=$user['1']['login'];?>">
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-user text-muted"></i></div>
                    </div>
                </div>
                <div class="input-group pt-3 pb-3">
                    <input type="text" class="form-control" placeholder="Password" name="password" value="<?=$user['1']['password'];?>">
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-lock text-muted"></i></div>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Изменить</button>
            </form>
        </div>
    </div>
</div>