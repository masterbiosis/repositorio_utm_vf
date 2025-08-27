<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Directortesi;

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
        'password',
        'directortesi_id',
        'estado'
    ];

    /**public function documentos(){
        return $this->hasMany(Documento::class);
    }*/

    public function directortesi(){
        return $this->belongsTo(Directortesi::class);
    }



}
