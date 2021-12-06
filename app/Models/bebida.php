<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bebida extends Model
{
    protected $table ="bebidas";
    protected $primaryKey="id";
    protected $fillable=[
        'categoria_bebida','bebida','descripcion','precio'
    ];
    public $timestamps=false;
}
