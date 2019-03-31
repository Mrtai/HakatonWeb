<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThiSinh extends Model
{
    protected $table='thisinh';
    protected $fillable= array('name','email','diachi','dienthoai','namsinh');
}
