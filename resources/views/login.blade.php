<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Login</title>
    <style>
       
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Học Viện Hàng Không Việt Nam</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="TaiKhoan" placeholder="Username" required>
            <input type="password" name="MatKhau" placeholder="Password" required>
            <button type="submit">Login</button>
            <a href="{{ route('register') }}" class="button">Register</a>
        </form>
    </div>
</body>

</html>
