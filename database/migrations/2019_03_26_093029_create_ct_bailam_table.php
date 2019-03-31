<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtBailamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_bailam', function (Blueprint $table) {
            $table->integer('id_bailam')->unsigned();
            $table->integer('id_cauhoi')->unsigned();
            $table->string('traloi');
            $table->float('diem');
            $table->timestamps();
            $table->foreign('id_bailam')->references('id')->on('bailam');
            $table->foreign('id_cauhoi')->references('id')->on('cauhoi');
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
