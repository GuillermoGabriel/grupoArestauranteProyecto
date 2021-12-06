<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table="cliente";
    protected $primaryKey="id";
    protected $fillable=[
        'nombre','apellido_pat','apellido_mat','dni','direccion','celular'
    ];
    public $timestamps=false;

}
