<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiaoVien extends Model
{
    use HasFactory;

    protected $table = 'giaovien';
    protected $primaryKey = 'MaGiaoVien';

    protected $fillable = ['MaGiaoVien', 'Hoten', 'NgaySinh', 'GioiTinh', 'Phone', 'DiaChi', 'TaiKhoan', 'MatKhau'];

public $timestamps = false;

}