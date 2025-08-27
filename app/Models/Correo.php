<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
    protected $fillable = [
        'alumno',
        'password',
        'link_verificacion'
    ];
}
