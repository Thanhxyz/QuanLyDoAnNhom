<!DOCTYPE html>
<html>
    <head>
        <title>Trang Quản Lý Sinh Viên</title>
        <meta charset="utf-8">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/accounts.css') }}" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            <!-- Nội dung chính của trang web sẽ được đặt ở đây -->
            
            <div class="main2">
            <form action="{{ route('accounts.index') }}" method="GET">
    <input type="text" name="search" placeholder="Tìm kiếm theo tên" style="width: 200px;">
    <input type="submit" value="Tìm kiếm" style="width: 100px;">
    <table>
        <thead>
            <tr>
                <th>Tài Khoản</th>
                <th>Mật Khẩu</th>
                <th>Quyền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($accounts as $account)
                <tr>
                    <td>{{ $account->TaiKhoan }}</td>
                    <td>{{ $account->MatKhau }}</td>
                    <td>{{ $account->Quyen }}</td>
                    <td>
                        <form action="{{ route('accounts.destroy', $account->TaiKhoan) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addAccountModal">
                Thêm tài khoản mới
            </button>
    {{ $accounts->links('custom_pagination') }}
  </div>
   <!-- Modal -->
   <div class="modal fade" id="addAccountModal" tabindex="-1" role="dialog" aria-labelledby="addAccountModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAccountModalLabel">Thêm tài khoản mới</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('accounts.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="TaiKhoan">Tài Khoản</label>
                                <input type="text" class="form-control" id="TaiKhoan" name="TaiKhoan" required>
                            </div>
                            <div class="form-group">
                                <label for="MatKhau">Mật Khẩu</label>
                                <input type="password" class="form-control" id="MatKhau" name="MatKhau" required>
                            </div>
                            <div class="form-group">
                                <label for="Quyen">Quyền</label>
                                <input type="text" class="form-control" id="Quyen" name="Quyen" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
 
</div>
</body>
</html>