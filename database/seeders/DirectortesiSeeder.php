<?php

namespace Database\Seeders;

use App\Models\Directortesi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectortesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $directortesi = new Directortesi();
        $directortesi->nombre = 'Sin asignar';
        $directortesi->apellidop = 'na';
        $directortesi->apellidom = 'na';
        $directortesi->telefono = '0000000000';
        $directortesi->email = 'noasignado@correo.com';
        $directortesi->save();


        /*
            'nombre',
            'apellidop',
            'apellidom',
            'telefono',
            'email'
        */
    }
}
