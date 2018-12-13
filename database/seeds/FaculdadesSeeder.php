<?php

use Illuminate\Database\Seeder;

class FaculdadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculdades')->insert([
            'id'=>1,
            'name'=>'Fatec de Bauru',
            'endereco'=>'R. Manoel Bento da Cruz',
            'numero'=>30,
            'cep'=>'17015-171',
            'contato'=>'(14) 3471-4723',
            'email'=>'jonathan.arenas@fatec.sp.gob.br',
            'cidade_id'=>3506003
        ]);
        DB::table('faculdades')->insert([
            'id'=>2,
            'name'=>'Fatec de Garça',
            'endereco'=>'Av. Presidente Vargas',
            'numero'=>2331,
            'cep'=>'17400-000',
            'contato'=>'(14) 3471-4723',
            'email'=>'jonathan.arenas@fatec.sp.gob.br',
            'cidade_id'=>3529005
        ]);
    }
}
