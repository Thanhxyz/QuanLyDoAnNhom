<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .login-form {
            width: 300px;
            padding: 30px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px #000;
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            color: #fff;
            background-color: #007BFF;
        }
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
