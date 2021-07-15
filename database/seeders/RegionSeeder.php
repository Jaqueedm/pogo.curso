<?php

namespace Database\Seeders;

use App\Models\Pokemone;
use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $region = new Region();

        $region-> nombre_r='Kanto';

        $region->save();

        $region2 = new Region();

        $region2-> nombre_r='Johto';

        $region2->save();

        $region3 = new Region();

        $region3-> nombre_r='Hoenn';

        $region3->save();

    }
}
