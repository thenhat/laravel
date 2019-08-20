<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class SanPham extends Model
{
    protected $table = 'sanpham';
    protected $primaryKey = 'MaSp';
    protected $fillable = [
        "TenSp",
        "GiaBan",
        "SoLuong",
        "Anh",
        "GhiChu",
        "created_at",
        "updated_at"
    ];
}
