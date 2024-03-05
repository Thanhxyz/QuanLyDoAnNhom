<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'taikhoan';
    protected $primaryKey = 'TaiKhoan';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'TaiKhoan',
        'MatKhau',
        'Quyen'
    ];
}
