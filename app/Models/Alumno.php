<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    /** @use HasFactory<\Database\Factories\AlumnoFactory> */
    use HasFactory;

    protected $fillable=[
        'matricula',
        'nombre',
        'apellidop',
        'apellidom',
        'email',
        'telefono',
        'password'
    ];
    
    /**public function documentos(){
        return $this->hasMany(Documento::class);
    }*/
}
