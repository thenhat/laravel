<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableHoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hoadon', function (Blueprint $table) {
            $table->foreign("MaNV")->references("MaNV")->on("nhanvien");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hoadon', function (Blueprint $table) {
            $table->dropForeign(["MaNV"]);
        });
    }
}
