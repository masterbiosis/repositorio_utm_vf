<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    /** @use HasFactory<\Database\Factories\CarreraFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];


    public function director(){
        //La carrera tiene un director
        return $this->hasOne(Director::class);
    }

    public function programas(){
        //La carrera tiene muchos programas educativos
        return $this->hasMany(Programa::class);
    }

}
