<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->string('ma_hoa_don')->nullable();
            $table->string('ten_nguoi_nhan');
            $table->string('ten_nguoi_mua');
            $table->string('email_nguoi_mua');
            $table->string('so_dien_thoai_nhan');
            $table->string('dia_chi_nhan');
            $table->integer('thanh_toan')->default(0);
            $table->integer('tong_tien')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_dons');
    }
};
