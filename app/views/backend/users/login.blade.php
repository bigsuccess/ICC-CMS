<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Andy Pham">
    <meta name="keyword" content="Login">
    <title>Đăng nhập</title>
    {{ Basset::show('backend.css') }}
</head>

<body class="login-body">
    <div class="container">
        {{ Form::open(['route' => 'nevergiveup.users.login', 'class' => 'form-signin']) }}
        <h2 class="form-signin-heading">Đăng nhập</h2>
        <div class="login-wrap">
            {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Tên tài khoản']) }}
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mật khẩu']) }}
            <label class="checkbox">
                {{ Form::checkbox('remember', 1, false) }} Lưu thông tin
                <span class="pull-right"> <a href="#"> Bạn quên mật khẩu?</a></span>
            </label>
            {{ Form::submit('Đăng nhập', ['class' => 'btn btn-lg btn-login btn-block']) }}
        </div>
        {{ Form::close() }}
    </div>
    {{ Basset::show('backend.js') }}
</body>
</html>
