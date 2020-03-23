<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model
{
    protected $table = 'repuestos';
    protected $fillable = ['nombre', 'cantidad','Unidad'];
  	protected $guarded = ['id'];

}

