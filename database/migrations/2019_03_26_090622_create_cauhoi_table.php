<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCauhoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cauhoi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_de')->unsigned();
            $table->string('noidung');
            $table->string('loaicauhoi');
            $table->string('cau_a');
            $table->string('cau_b');
            $table->string('cau_c');
            $table->string('cau_d');
            $table->string('dapan');
            $table->timestamps();
            $table->foreign('id_de')->references('id')->on('dethi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
