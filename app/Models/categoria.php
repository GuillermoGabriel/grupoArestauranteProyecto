<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//modelo que hara relacion a la tabla categorias de la base de datos
class categoria extends Model
{
    //use HasFactory;
    protected $table ="categorias";
    protected $primaryKey="id";
    protected $fillable=[
        'nombre','descripcion','estado'
    ];
    public $timestamps=false;


    // public function estado(){
    //     return $this->belongsTo(estado::class,'estado');
    // }
    
}
