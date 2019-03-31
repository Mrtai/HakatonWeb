<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBailamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bailam', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pdk')->unsigned();
            $table->integer('id_dethi')->unsigned();
            $table->float('tongdiem');
            $table->timestamps();
            $table->foreign('id_pdk')->references('id')->on('phieu_dk');
            $table->foreign('id_dethi')->references('id')->on('dethi');
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
