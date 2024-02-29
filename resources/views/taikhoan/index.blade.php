
<!DOCTYPE html>
<html>
    <head>
        <title>Trang Quản Lý Tài Khoản</title>
        <meta charset="utf-8">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

h1, h2 {
    color: #333;
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button[type="submit"] {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #5a6268;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: left;
}
.pagination {
    /* Đặt kích thước tổng thể của thanh phân trang */
    font-size: 0.8em;
}

.pagination a, .pagination span {
    /* Đặt kích thước của từng nút trong thanh phân trang */
    padding: 5px 10px;
}
.logout-button {
    display: inline-block;
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.logout-button:hover {
    background-color: #5a6268;
}


    </style>
    <body>
        <div class="header">
            Học Viện Hàng Không Việt Nam
        </div>
        <div class="sidebar">
            <ul>
                <li><a href="{{ url('quanlylophoc') }}">QUẢN LÝ LỚP HỌC</a></li>
                <li><a href="{{ url('quanlygiangvien') }}">QUẢN LÝ GIẢNG VIÊN</a></li>
                <li><a href="{{ url('quanlykhoa') }}">QUẢN LÝ KHOA</a></li>
                <li><a href="{{ url('quanlysinhvien') }}">QUẢN LÝ SINH VIÊN</a></li>
                <li><a href="{{ url('quanlydiem') }}">QUẢN LÝ ĐIỂM RÈN LUYỆN</a></li>
                <li><a href="{{ route('taikhoan.index') }}">QUẢN LÝ TÀI KHOẢN</a></li>
                <li><a href="{{ route('logout') }}" class="logout-button">Đăng xuất</a></li>
            </ul>
        </div>
        <div class="main">
        <br> <!-- Add a line break here -->
        <h2>Thêm tài khoản</h2>
        <form method="POST" action="{{ route('taikhoan.store') }}">
        @csrf
        <label for="TaiKhoan">Tài khoản:</label>
        <input type="text" id="TaiKhoan" name="TaiKhoan">
        <label for="MatKhau">Mật khẩu:</label>
        <input type="password" id="MatKhau" name="MatKhau">
        <label for="Quyen">Quyền:</label>
        <input type="text" id="Quyen" name="Quyen">
        <button type="submit">Thêm</button>
    </form>

    <h2>Danh sách tài khoản</h2>
    <table>
        <tr>
            <th>Tài khoản</th>
            <th>Mật khẩu</th>
            <th>Quyền</th>
            <th>Thao tác</th>
        </tr>
        @foreach ($taikhoans as $taikhoan)
        <tr>
            <td>{{ $taikhoan->TaiKhoan }}</td>
            <td>{{ $taikhoan->MatKhau }}</td>
            <td>{{ $taikhoan->Quyen }}</td>
            <td>
                <form method="POST" action="{{ route('taikhoan.destroy', $taikhoan->TaiKhoan) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $taikhoans->links() }}
</div>
    </body>
</html>