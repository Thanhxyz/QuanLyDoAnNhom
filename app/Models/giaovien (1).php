<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiaoVien extends Model
{
    use HasFactory;

    protected $table = 'giaovien';
    protected $primaryKey = 'MaGiaoVien';
    public $incrementing = false;
    public $timestamps = false;

    // Định nghĩa mối quan hệ với bảng khác (nếu có)
}
