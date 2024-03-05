<!DOCTYPE html>
<html>
    <head>
        <title>Trang Quản Lý Sinh Viên</title>
        <meta charset="utf-8">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <style>
        h2 {
        margin-left: 50px;
    }
    p {
        margin-left: 50px;
    }
    ul {
        margin-left: 50px;
    }
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
        @extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/danhsach.css') }}">
@endsection
@section('content')
<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" id="createClassButton" data-target="#createClassModal">
            <ion-icon name="add-circle-outline"></ion-icon><strong>Thêm lớp mới</strong>
        </button>
        <div class="filter-form">
        <!-- Form lọc -->
        <form action="/lops/filter" method="get" style="display: flex; align-items: center;">
        <select name="MaLop">
                <option value="">Chọn mã lớp</option>
                @foreach ($lops as $lop)
                    <option value="{{ $lop->MaLop }}">{{ $lop->MaLop }}</option>
                @endforeach
            </select>
            <select name="TenLop">
                <option value="">Chọn tên lớp</option>
                @foreach ($lops as $lop)
                    <option value="{{ $lop->TenLop }}">{{ $lop->TenLop }}</option>
                @endforeach
            </select>
            <select name="MaKhoa">
                <option value="">Chọn mã khoa</option>
                @foreach ($khoas as $khoa)
                    <option value="{{ $khoa->MaKhoa }}">{{ $khoa->MaKhoa }}</option>
                @endforeach
            </select>
            <select name="MaGiaoVien">
                <option value="">Chọn mã giáo viên</option>
                @foreach ($giaoviens as $giaovien)
                    <option value="{{ $giaovien->MaGiaoVien }}">{{ $giaovien->MaGiaoVien }}</option>
                @endforeach
            </select>
            <button type="submit" class="filter-button">Lọc lớp học</button>
        </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã Lớp</th>
                <th scope="col">Tên Lớp</th>
                <th scope="col">Mã Khoa</th>
                <th scope="col">Mã Giáo Viên</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lops as $lop)
            <tr>
                <td>{{ $lop->MaLop }}</td>
                <td>{{ $lop->TenLop }}</td>
                <td>{{ $lop->MaKhoa }}</td>
                <td>{{ $lop->MaGiaoVien }}</td>
                <td>
                    <form action="/lops/{{ $lop->MaLop }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><ion-icon name="trash-outline"></ion-icon></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- Modal -->

<div class="modal fade" id="createClassModal" tabindex="-1" role="dialog" aria-labelledby="createClassModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createClassModalLabel">Thêm lớp mới</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('lops.store') }}" method="post" class="create-class-form">
        @csrf
        <div class="modal-body">
          <!-- Your form goes here -->
          <div class="form-group">
              <label for="MaLop">Mã lớp:</label>
              <input type="text" id="MaLop" name="MaLop">
          </div>
          <div class="form-group">
              <label for="TenLop">Tên lớp:</label>
              <input type="text" id="TenLop" name="TenLop">
          </div>
          <div class="form-group">
              <label for="MaKhoa">Mã khoa:</label>
              <input type="text" id="MaKhoa" name="MaKhoa">
          </div>
          <div class="form-group">
              <label for="MaGiaoVien">Mã giáo viên:</label>
              <input type="text" id="MaGiaoVien" name="MaGiaoVien">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{ $lops->links('custom_pagination') }}
@endsection
@section('scripts')
<script>
$(document).ready(function(){
  $("#createClassButton").click(function(){
    $("#createClassModal").modal();
  });
});
</script>
@endsection
        </div>
    </body>
</html>
