<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->string('slug');
            $table->string('ma_sp');
            $table->string('gia')->default(0);
            $table->string('gia_giam')->default(0);
            $table->string('anh_dai_dien');
            $table->integer('danh_muc_id');
            $table->integer('sp_moi')->nullable();
            $table->integer('so_luong_sp')->default(0);
            $table->string('tinh_trang')->nullable();
            $table->longText('mo_ta_ngan')->nullable();
            $table->longText('chi_tiet')->nullable();
            $table->longText('video')->nullable();
            $table->text('luot_mua')->nullable();
            $table->text('luot_xem')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('san_phams');
    }
};
