<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Directortesi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       //$directortesi = Directortesi::first();
       //Alumno::factory(10)->create();
       $alumno = new Alumno();
       $alumno->matricula = 'UTM123456TIM';
       $alumno->nombre = 'Julio César';
       $alumno->apellidop = 'Correa';
       $alumno->apellidom = 'Torres';
       $alumno->email = 'julio.correa.777@gmail.com';
       $alumno->telefono = '4431920548';
       $alumno->save();





       /**
        *
       matricula',
        'nombre',
        'apellidop',
        'apellidom',
        'email',
        'telefono',
        'directortesi_id',
        'estado'
        */
    }
}
