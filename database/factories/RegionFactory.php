<?php

namespace Database\Factories;

use App\Models\Region;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Region::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre_r=$this->faker->name();
        return [
            'nombre_r'=>$this->faker->name(),
            'slug'=> Str::slug($nombre_r, '-'),
            'des_r'=>$this->faker->text()
        ];
    }
}
