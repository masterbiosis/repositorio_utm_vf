<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdirector extends Model
{
    /** @use HasFactory<\Database\Factories\SubdirectorFactory> */
    use HasFactory;

protected $fillable=[
        'nombre',
        'apellidop',
        'apellidom',
        'email',
        'telefono',
        'carrera_id'
    ];
    public function carrera(){
        return $this->belongsTo(Carrera::class);
    }

}
