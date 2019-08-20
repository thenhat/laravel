<?php

namespace App\Http\Controllers;

use App\NhanVien;
use App\SanPham;
use App\HoaDon;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DSNhanVien(){
        // Lay tat ca
        //$books = Book::all();
        // Co phan trang
        $nhanviens = NhanVien::paginate(20);
        return view("canteen_ms.listNV",compact("nhanviens"));
    }
    public function DSSanPham(){
        // Lay tat ca
        //$books = Book::all();
        // Co phan trang
        $sanphams = SanPham::paginate(20);
        return view("canteen_ms.listSP",compact("sanphams"));
    } public function DSHoaDon(){
        // Lay tat ca
        //$books = Book::all();
        // Co phan trang
        $hoadons = HoaDon::paginate(20);
        return view("canteen_ms.listHD",compact("hoadons"));
    }
}
