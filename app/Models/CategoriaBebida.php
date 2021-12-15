<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaBebida extends Model
{
    
    protected $table ="categoria_bebida";
    protected $primaryKey="id";
    protected $fillable=[
        'categoria_bebida'
    ];
    public $timestamps=false;

}
