<?php

use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert(['id'=>1,'name'=>'Analise e Desenvolvimento de Sistemas']);
        DB::table('cursos')->insert(['id'=>2,'name'=>'Mecatronica']);
        DB::table('cursos')->insert(['id'=>3,'name'=>'Gestão Empresarial']);
        DB::table('cursos')->insert(['id'=>4,'name'=>'Banco de Dados']);
    }
}
