<!DOCTYPE html>
<html>
    <head>
        <title>Trang Quản Lý Sinh Viên</title>
        <meta charset="utf-8">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/giaovien.css') }}" rel="stylesheet">
    </head>
    <style>
       
    </style>
 <body>
        <div class="header">
            Học Viện Hàng Không Việt Nam
        </div>


        <div class="sidebar">
            <ul>
            <li><a href="{{ url('student-management') }}">TRANG CHỦ</a></li>
                <li><a href="{{ url('lops') }}">QUẢN LÝ LỚP HỌC</a></li>
                <li><a href="{{ url('giaovien') }}">QUẢN LÝ GIẢNG VIÊN</a></li>
                <li><a href="{{ url('quanlykhoa') }}">QUẢN LÝ KHOA</a></li>
                <li><a href="{{ url('quanlysinhvien') }}">QUẢN LÝ SINH VIÊN</a></li>
                <li><a href="{{ url('quanlydiem') }}">QUẢN LÝ ĐIỂM RÈN LUYỆN</a></li>
                <li><a href="{{ url('accounts') }}">QUẢN LÝ TÀI KHOẢN</a></li>
                <li><a href="{{ route('logout') }}" class="logout-button">Đăng xuất</a></li>
            </ul>
        </div>
        <div class="main">
             
        <div class="main2">
            <form action="{{ route('giaovien.index') }}" method="GET">
    <input type="text" name="search" placeholder="Tìm kiếm theo tên" style="width: 200px;">
    <input type="submit" value="Tìm kiếm" style="width: 100px;">
    <table>
        <tr>
            <th>Mã giáo viên</th>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Tài khoản</th>
            <th>Mật khẩu</th>
        </tr>
        @foreach ($giaovien as $gv)
            <tr>
                <td>{{ $gv->MaGiaoVien }}</td>
                <td>{{ $gv->Hoten }}</td>
                <td>{{ $gv->NgaySinh }}</td>
                <td>{{ $gv->GioiTinh }}</td>
                <td>{{ $gv->Phone }}</td>
                <td>{{ $gv->DiaChi }}</td>
                <td>{{ $gv->TaiKhoan }}</td>
                <td>{{ $gv->MatKhau }}</td>
                <td>
            <form action="{{ route('giaovien.destroy', $gv->MaGiaoVien) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Xóa">
            </form>
        </td>
            </tr>
        @endforeach
    </table>
    <button id="btnThemGiaoVien">Thêm giáo viên</button>
    {{ $giaovien->links('custom_pagination') }}
    <div id="formGiaoVien">
    <span class="close">&times;</span>
    <div class="form-content"> <!-- New div to apply scrolling -->
        <form action="{{ route('giaovien.store') }}" method="POST">
            @csrf
            <h1 class="modal-title" id="addAccountModalLabel">Thêm giáo viên mới</h1>
            <label for="MaGiaoVien">Mã giáo viên:</label><br>
            <input type="text" id="MaGiaoVien" name="MaGiaoVien"><br>
            <label for="Hoten">Họ tên:</label><br>
            <input type="text" id="Hoten" name="Hoten"><br>
            <label for="NgaySinh">Ngày sinh:</label><br>
            <input type="date" id="NgaySinh" name="NgaySinh"><br>
            <label for="GioiTinh">Giới tính:</label><br>
            <input type="text" id="GioiTinh" name="GioiTinh"><br>
            <label for="Phone">Số điện thoại:</label><br>
            <input type="text" id="Phone" name="Phone"><br>
            <label for="DiaChi">Địa chỉ:</label><br>
            <input type="text" id="DiaChi" name="DiaChi"><br>
            <label for="TaiKhoan">Tài khoản:</label><br>
            <input type="text" id="TaiKhoan" name="TaiKhoan"><br>
            <label for="MatKhau">Mật khẩu:</label><br>
            <input type="password" id="MatKhau" name="MatKhau"><br>
            <input type="submit" value="Submit">
        </form> 
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </div>
</div>
    <script>
 document.getElementById('btnThemGiaoVien').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('formGiaoVien').style.display = 'block';
});

document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('formGiaoVien').style.display = 'none';
});
    </script>
     </div>
</body>
</html>





  