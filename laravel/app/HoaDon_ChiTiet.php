<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class HoaDon_ChiTiet extends Model
{
    protected $table = 'hoadon_chitiet';
    protected $fillable = [
        "MaHD",
        "MaSp",
        "SoLuong",
        "DonGia",
        "ThanhTien",
        "created_at",
        "updated_at"
    ];
}
