<!DOCTYPE html>
<html>
    <head>
        <title>Trang Quản Lý Sinh Viên</title>
        <meta charset="utf-8">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="baotrum">
            <div class="tieude">
                <h1 class="ten" style="margin-top: 20px;">Học Viện Hàng Không Việt Nam</h1>
            </div>
            <div class="danhmuc">        
                <div class="menu">
                    <h1 class="dm">TRANG CHỦ</h1>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ url('quanlylophoc') }}">QUẢN LÝ LỚP HỌC</a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ url('quanlygiangvien') }}">QUẢN LÝ GIẢNG VIÊN</a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ url('quanlykhoa') }}">QUẢN LÝ KHOA</a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ url('quanlysinhvien') }}">QUẢN LÝ SINH VIÊN</a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ url('quanlydiem') }}">QUẢN LÝ ĐIỂM RÈN LUYỆN</a>
                    </div>
                </div>
            </div>
            <div class="data">
                <!-- Nội dung chính của trang web sẽ được đặt ở đây -->
            </div>
        </div>
    </body>
</html>
