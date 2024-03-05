<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $table = 'taikhoan'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'TaiKhoan'; // Khóa chính của bảng

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = ['TaiKhoan', 'MatKhau', 'Quyen'];

    // Các thuộc tính sẽ bị ẩn khi mô hình được chuyển đổi thành mảng hoặc JSON
    protected $hidden = ['MatKhau'];

    // Các thuộc tính sẽ được ép kiểu khi truy cập
    protected $casts = ['TaiKhoan' => 'string'];

    public function validateCredentials($username, $password)
    {
        $user = $this->where('TaiKhoan', $username)->first();

        if (!$user) {
            return false;
        }

        return Hash::check($password, $user->MatKhau);
    }
    public $timestamps = false;

}