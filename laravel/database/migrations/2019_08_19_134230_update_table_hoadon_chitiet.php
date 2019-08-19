<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableHoadonChitiet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hoadon_chitiet', function (Blueprint $table) {
            $table->foreign("MaHD")->references("MaHD")->on("hoadon");
            $table->foreign("MaSp")->references("MaSp")->on("sanpham");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hoadon_chitiet', function (Blueprint $table) {
            $table->dropForeign(["MaHD"]);
            $table->dropForeign(["MaSp"]);
        });
    }
}
