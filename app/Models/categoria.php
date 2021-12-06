<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
