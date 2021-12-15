<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//estamos relacionando el modelo con la tabla de la base de datos

class CategoriaBebida extends Model
{
    
    protected $table ="categoria_bebida";   //nombre de la tabla
    protected $primaryKey="id";             //llave primari key
    protected $fillable=[                   
        'categoria_bebida'                   //campos
    ];
    public $timestamps=false;

}
