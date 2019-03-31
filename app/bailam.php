<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bailam extends Model
{
    protected $table='bailam';
    protected $fillable= array('id_pdk','id_dethi','tongdiem');
}
