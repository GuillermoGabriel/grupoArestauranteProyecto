<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    // use HasFactory;
    protected $table="platos";
    protected $primaryKey="id";
    protected $fillable=[
        'id_categoria','plato','descripcion','precio'
    ];
    public $timestamps=false;
}
