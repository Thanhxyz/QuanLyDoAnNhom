<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <title>Login</title>
    <style>
        
    </style>
</head>
<body>
    <div class="login-form">
    <h2>Register</h2>
<form method='post' action='{{ route('register') }}'>
    @csrf
    Username: <input type='text' name='TaiKhoan' /><br />
    Password: <input type='password' name='MatKhau' /><br />
    <input type='submit' value='Register' />
</form>

    </div>
</body>
</html>


