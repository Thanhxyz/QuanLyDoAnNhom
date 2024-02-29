<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = 'taikhoan';
    public $timestamps = false;
    protected $fillable = ['id', 'TaiKhoan', 'MatKhau', 'Quyen'];
    protected $primaryKey = 'id';
}
