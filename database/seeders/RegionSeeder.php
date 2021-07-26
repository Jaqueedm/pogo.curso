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

        $region->slug='kanto';

        $region-> des_r='Habitad para los pokemones de esta region';

        $region->save();

        $region2 = new Region();

        $region2-> nombre_r='Johto';

        $region2->slug='johto';

        $region2-> des_r='Habitad para los pokemones de esta region';

        $region2->save();

        $region3 = new Region();

        $region3-> nombre_r='Hoenn';

        $region3->slug='hoenn';

        $region3-> des_r='Habitad para los pokemones de esta region';

        $region3->save();

    }
}
