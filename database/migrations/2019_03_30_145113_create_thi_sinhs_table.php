<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThiSinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thi_sinhs', function (Blueprint $table) {
            $table->increments('id');
            $table->string("email")->unique();
            $table->string("hoten");
            $table->string("diachi");
            $table->string("dienthoai");
            $table->string("ngaysinh");
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
        Schema::dropIfExists('thi_sinhs');
    }
}
