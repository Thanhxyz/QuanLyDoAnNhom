<!DOCTYPE html>
<html>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<head>
    <title>Quản lý sinh viên</title>
    <style>
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="header">
        <h1>HỌC VIỆN HÀNG KHÔNG VIỆT NAM</h1>
        <button class="toggle-btn" onclick="toggleSidebar()">=</button>
    </div>
    <div id="sidebar" class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="sinhvien.html" target="_blank">Sinh Viên</a></li>
            <li><a href="giangvien.html" target="_blank">Giảng Viên</a></li>
            <li><a href="khoa.html" target="_blank">Khoa</a></li>
            <li><a href="lop.html" target="_blank">Lớp</a></li>
            <li><a href="diemrenluyen.html" target="_blank">Điểm rèn luyện</a></li>
            <li><a href="taikhoan.html" target="_blank">Tài khoản</a></li>
        </ul>
    </div>
    <div id="main" class="main">
        <h2>Chào mừng bạn Admin đã quay trở lại</h2>
        <p>Nội dung chính </p>
    </div>
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            var main = document.getElementById('main');
            sidebar.classList.toggle('closed');
            main.classList.toggle('shifted');
        }
    </script>
</body>
</html>
