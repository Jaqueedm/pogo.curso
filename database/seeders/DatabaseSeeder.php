<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pokemone;
use App\Models\Region;
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
        //Pokemone::factory(5)->create(); //se puede mandar a llamar factory esando esto
        $this->call(RegionSeeder::class);
        $this->call(PokemonSeeder::class);

        //Region::factory(3)->create();


        //los puedo mandar a llamar a traves del nombre de la clase.
    }
}
