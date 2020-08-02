<?php

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();
        $this->call(DesenvolvedorSeeder::class);
        $this->command->info('Desenvolvedores incluidos com sucesso na tabela desenvolvedores');
        Model::reguard();
    }
}
