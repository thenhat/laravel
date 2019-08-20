<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class NhanVien extends Model
{
    protected $table = 'nhanvien';
    protected $primaryKey = 'MaNV';
    protected $fillable = [
        "TenNV",
        "diachi",
        "sdt",
        "namsinh",
        "created_at",
        "updated_at"
    ];
}
