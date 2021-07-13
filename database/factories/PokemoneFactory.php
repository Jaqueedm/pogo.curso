<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Pokemone;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Region;

class PokemoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pokemone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name=$this->faker->name();
        return [
            //definir todos los campos que tiene la tabla.
            'name' => $name,
            'slug'=> Str::slug($name, '-'),
            //'url'=>$name,
            'descripcion'=>$this->faker->paragraph(),
            'tipo_poke' =>$this->faker->randomElement(['Agua', 'Fuego','Hielo']),
            'genero' =>$this->faker->randomElement(['Macho', 'Hembra']),
            'region' => Region::factory()
        ];
    }
}
