<!DOCTYPE html>
<html>
    <head>
        <title>Trang Quản Lý Sinh Viên</title>
        <meta charset="utf-8">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <style>
       
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
            <!-- Nội dung chính của trang web sẽ được đặt ở đây -->
            
        </div>
    </body>
</html>
