<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cauhoi extends Model
{
    protected $table='cauhoi';
    protected $fillable= array('id_de','loaicauhoi','noidung','cau_a','cau_b','cau_c','cau_d','dapan');
}
