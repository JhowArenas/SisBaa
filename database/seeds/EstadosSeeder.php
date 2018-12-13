<?php

use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            'id' => 1,
            'name' => 'Acre',
            'sigla' => 'AC']);
        DB::table('estados')->insert([
            'id' => 2,
            'name' => 'Alagoas',
            'sigla' => 'AL']);
        DB::table('estados')->insert([
            'id' => 3,
            'name' => 'Amapá',
            'sigla' => 'AP']);
        DB::table('estados')->insert([
            'id' => 4,
            'name' => 'Amazonas',
            'sigla' => 'AM']);
        DB::table('estados')->insert([
            'id' => 5,
            'name' => 'Bahia',
            'sigla' => 'BA']);
        DB::table('estados')->insert([
            'id' => 6,
            'name' => 'Ceará',
            'sigla' => 'CE']);
        DB::table('estados')->insert([
            'id' => 7,
            'name' => 'Distrito Federal',
            'sigla' => 'DF']);
        DB::table('estados')->insert([
            'id' => 8,
            'name' => 'Espírito Santo',
            'sigla' => 'ES']);
        DB::table('estados')->insert([
            'id' => 9,
            'name' => 'Goiás',
            'sigla' => 'GO']);
        DB::table('estados')->insert([
            'id' => 10,
            'name' => 'Maranhão',
            'sigla' => 'MA']);
        DB::table('estados')->insert([
            'id' => 11,
            'name' => 'Mato Grosso',
            'sigla' => 'MT']);
        DB::table('estados')->insert([
            'id' => 12,
            'name' => 'Mato Grosso do Sul',
            'sigla' => 'MS']);
        DB::table('estados')->insert([
            'id' => 13,
            'name' => 'Minas Gerais',
            'sigla' => 'MG']);
        DB::table('estados')->insert([
            'id' => 14,
            'name' => 'Pará',
            'sigla' => 'PA']);
        DB::table('estados')->insert([
            'id' => 15,
            'name' => 'Paraíba',
            'sigla' => 'PB']);
        DB::table('estados')->insert([
            'id' => 16,
            'name' => 'Paraná',
            'sigla' => 'PR']);
        DB::table('estados')->insert([
            'id' => 17,
            'name' => 'Pernambuco',
            'sigla' => 'PE']);
        DB::table('estados')->insert([
            'id' => 18,
            'name' => 'Piauí',
            'sigla' => 'PI']);
        DB::table('estados')->insert([
            'id' => 19,
            'name' => 'Rio de Janeiro',
            'sigla' => 'RJ']);
        DB::table('estados')->insert([
            'id' => 20,
            'name' => 'Rio Grande do Norte',
            'sigla' => 'RN']);
        DB::table('estados')->insert([
            'id' => 21,
            'name' => 'Rio Grande do Sul',
            'sigla' => 'RS']);
        DB::table('estados')->insert([
            'id' => 22,
            'name' => 'Rondônia',
            'sigla' => 'RO']);
        DB::table('estados')->insert([
            'id' => 23,
            'name' => 'Roraima',
            'sigla' => 'RR']);
        DB::table('estados')->insert([
            'id' => 24,
            'name' => 'Santa Catarina',
            'sigla' => 'SC']);
        DB::table('estados')->insert([
            'id' => 25,
            'name' => 'São Paulo',
            'sigla' => 'SP']);
        DB::table('estados')->insert([
            'id' => 26,
            'name' => 'Sergipe',
            'sigla' => 'SE']);
        DB::table('estados')->insert([
            'id' => 27,
            'name' => 'Tocantins',
            'sigla' => 'TO']);
    }
}
