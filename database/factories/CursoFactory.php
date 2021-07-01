<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name=$this->faker->sentence();
        return [
            //definir todos los campos que tiene la tabla.
            'name' => $name,
            'slug'=> Str::slug($name,'-'),
            'descripcion'=>$this->faker->paragraph(),
            'tipo_poke' =>$this->faker->randomElement(['Agua', 'Fuego','Hielo']),
            'region' =>$this->faker->randomElement(['Kanto', 'Johto']),
            'genero' =>$this->faker->randomElement(['Macho', 'Hembra'])
        ];
    }
}
