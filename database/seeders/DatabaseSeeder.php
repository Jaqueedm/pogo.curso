<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\
        User::factory(10)->create();
        //$this->call(CursoSeeder::class);
        Curso::factory(30)->create(); //se puede mandar a llamar factory esando esto 

        //los puedo mandar a llamar a traves del nombre de la clase. 


    }
}
