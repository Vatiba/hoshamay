

<form class="form-signin" action="<?=ADMIN;?>/user/login-admin" method="post">
    <h1 class="h3 mb-3 font-weight-normal text-center">Please login</h1>
    <div class="input-group pt-3">
        <input type="username" class="form-control" placeholder="Login" name="login">
        <div class="input-group-append">
            <div class="input-group-text"><i class="fas fa-user text-muted"></i></div>
        </div>
    </div>
    <div class="input-group pt-3 pb-3">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <div class="input-group-append">
            <div class="input-group-text"><i class="fas fa-lock text-muted"></i></div>
        </div>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
</form>