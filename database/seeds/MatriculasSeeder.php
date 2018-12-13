<?php

use Illuminate\Database\Seeder;

class MatriculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matriculas')->insert(['id'=>1,'faculdade_id'=>1,'curso_id'=>1]);
        DB::table('matriculas')->insert(['id'=>2,'faculdade_id'=>1,'curso_id'=>2]);
        DB::table('matriculas')->insert(['id'=>3,'faculdade_id'=>1,'curso_id'=>3]);
        DB::table('matriculas')->insert(['id'=>4,'faculdade_id'=>2,'curso_id'=>4]);
    }
}
