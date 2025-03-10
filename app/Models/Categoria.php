<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['categoria'];
    public $timestamps = false; //omite el timestamps
    use HasFactory;

    public function dispositivos()
    {
        return $this->belongsToMany(Dispositivo::class);
    }
}
