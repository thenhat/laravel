<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class HoaDon extends Model
{
    protected $table = 'hoadon';
    protected $primaryKey = 'MaHD';
    protected $fillable = [
        "MaNV",
        "NgayBan",
        "TongTien",
        "created_at",
        "updated_at"
    ];
}