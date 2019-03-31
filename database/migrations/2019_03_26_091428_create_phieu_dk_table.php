<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieuDkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieu_dk', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_thisinh')->unsigned();
            $table->integer('id_mon')->unsigned();
            $table->string('mucdo');
            $table->timestamps();
            $table->foreign('id_thisinh')->references('id')->on('thisinh');
            $table->foreign('id_mon')->references('id')->on('monhoc');
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
