<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    /** @use HasFactory<\Database\Factories\EmpresaFactory> */
    use HasFactory;

    
    protected $fillable=[
        'nombre',
        'direccion',
        'telefono',
        'email'
    ];
/*
    public function asesors(){
        return $this->hasMany('Asesor');
    }
        */
    /*public function asesores(){
        //Una empresa tiene muchas asesores
        return $this->hasMany(Asesor::class, 'empresa_id');
    }*/
}
