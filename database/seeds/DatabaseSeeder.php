<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstadosSeeder::class);
        $this->call(CidadesSeeder::class);
        $this->call(FaculdadesSeeder::class);
        $this->call(CursosSeeder::class);
        $this->call(MatriculasSeeder::class);
    }
}
