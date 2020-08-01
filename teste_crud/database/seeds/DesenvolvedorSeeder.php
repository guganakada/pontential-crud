<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesenvolvedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desenvolvedores')->insert([
            'nome' => 'Gustavo Cardoso',
            'sexo' => 'M',
            'idade' => '37',
            'hobby' => 'Jogar beisebol',
            'datanascimento' => '1983-04-11',
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' => 'Albertina Souza',
            'sexo' => 'F',
            'idade' => '20',
            'hobby' => 'Ler',
            'datanascimento' => '2000-02-21',
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' => 'Camilla Figueiredo',
            'sexo' => 'F',
            'idade' => '28',
            'hobby' => 'Viajar',
            'datanascimento' => '1992-05-21',
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' => 'Jackie Rian',
            'sexo' => 'M',
            'idade' => '34',
            'hobby' => 'Pescar',
            'datanascimento' => '1987-12-20',
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' => 'Marcos Caio',
            'sexo' => 'M',
            'idade' => '34',
            'hobby' => 'Aulas de teatro',
            'datanascimento' => '1987-12-20',
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' => 'Jhonny Cash',
            'sexo' => 'M',
            'idade' => '40',
            'hobby' => 'Tocar violao',
            'datanascimento' => '1980-06-04',
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' => 'Caroline Celeste',
            'sexo' => 'F',
            'idade' => '41',
            'hobby' => 'Artes marciais',
            'datanascimento' => '1978-11-10',
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' => 'Emily Clark',
            'sexo' => 'F',
            'idade' => '30',
            'hobby' => 'Fotografar',
            'datanascimento' => '1990-03-03',
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' => 'Fabiola da Silva',
            'sexo' => 'F',
            'idade' => '33',
            'hobby' => 'Patinar',
            'datanascimento' => '1987-05-09',
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' => 'Simone Monteiro',
            'sexo' => 'F',
            'idade' => '29',
            'hobby' => 'Correr',
            'datanascimento' => '1991-04-18',
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' => 'Frank Castro',
            'sexo' => 'M',
            'idade' => '24',
            'hobby' => 'Jogar xadrez',
            'datanascimento' => '1995-09-01',
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' => 'Charlie Lee',
            'sexo' => 'M',
            'idade' => '26',
            'hobby' => 'Praticar yoga',
            'datanascimento' => '1995-11-19',
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' => 'Anne Fouz',
            'sexo' => 'F',
            'idade' => '31',
            'hobby' => 'Pedalar',
            'datanascimento' => '1989-01-31',
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' => 'Antonio Oliveira',
            'sexo' => 'M',
            'idade' => '28',
            'hobby' => 'Pintar',
            'datanascimento' => '1991-10-27',
        ]);
    }
}
