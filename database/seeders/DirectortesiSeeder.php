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
        $directortesi->nombre = 'No asignado';
        $directortesi->apellidop = 'na';
        $directortesi->apellidom = 'na';
        $directortesi->telefono = '0000000000';
        $directortesi->email = 'noasignado@correo.com';
        $directortesi->save();

        $directortesi = new Directortesi();
        $directortesi->nombre = 'MGTI. María Elena';
        $directortesi->apellidop = 'Benítez';
        $directortesi->apellidom = 'Ramírez';
        $directortesi->telefono = '443 190 4795';
        $directortesi->email = 'elena.benitez@ut-morelia.edu.mx';
        $directortesi->save();


        $directortesi = new Directortesi();
        $directortesi->nombre = 'MGTI. María del Carmen';
        $directortesi->apellidop = 'Solorio';
        $directortesi->apellidom = 'Raya';
        $directortesi->telefono = '443 131 8030';
        $directortesi->email = 'carmen.solorio@ut-morelia.edu.mx';
        $directortesi->save();


        $directortesi = new Directortesi();
        $directortesi->nombre = 'DRA. Leticia Rubicela';
        $directortesi->apellidop = 'Rodríguez';
        $directortesi->apellidom = 'Ruíz';
        $directortesi->telefono = '443 101 4611';
        $directortesi->email = 'rubicela.rodriguez@ut-morelia.edu.mx';
        $directortesi->save();

        $directortesi = new Directortesi();
        $directortesi->nombre = 'DhP José Luis';
        $directortesi->apellidop = 'Cendejas';
        $directortesi->apellidom = 'Valdez';
        $directortesi->telefono = '443 949 9999';
        $directortesi->email = 'luis.cendejas@ut-morelia.edu.mx';
        $directortesi->save();


        $directortesi = new Directortesi();
        $directortesi->nombre = 'MTI. Marcela';
        $directortesi->apellidop = 'Álvarez';
        $directortesi->apellidom = 'Vivanco';
        $directortesi->telefono = '443 186 4815';
        $directortesi->email = 'marcela.alvarez@ut-morelia.edu.mx';
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
