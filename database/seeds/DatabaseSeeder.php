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
         $this->call(SeederDeCategorias::class);
         $this->call(SeederDePreguntas::class);
         $this->call(SeederDeRespuestas::class);
    }
}
