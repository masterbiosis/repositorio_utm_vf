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
       Alumno::factory(10)->create();
    }
}
