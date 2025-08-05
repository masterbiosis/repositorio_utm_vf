<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Subdirector;

class Carrera extends Model
{
    /** @use HasFactory<\Database\Factories\CarreraFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];


    public function director(){
        //La carrera tiene un director
        return $this->hasOne(Subdirector::class);
    }
/*
    public function programas(){
        //La carrera tiene muchos programas educativos
        return $this->hasMany(Programa::class);
    }
        */

}
