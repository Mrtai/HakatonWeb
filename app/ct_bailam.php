<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ct_bailam extends Model
{
    protected $table='ct_bailam';
    protected $fillable= array('id_bailam','id_cauhoi','traloi','diem');
}
