<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'precio', 'modelo'];
    public $timestamps = false; //omite el timestamps
     public function categorias()
     {
         return $this->belongsToMany(Categoria::class);
     }
}
