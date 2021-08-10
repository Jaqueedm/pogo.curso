<?php

namespace Tests\Feature;

use App\Models\Pokemone;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PokemonTest extends TestCase
{
    use RefreshDatabase;

    public function testCrearUnPokemon()
    {
        $user = User::factory()->create();
        //creamos un usuario
        $respuesta= $this-> actingAs($user)->get(route('pokemones.create'));
        //a traves de un usuario que nos retorne a la ruta de crear
        $respuesta->assertStatus(200);
        //verifica que se cargo la pagina.
    }

    public function testRegistarUnPokemon()
    {
        Storage::fake('local');

        $file=UploadedFile::fake()->image('pokemon.jpg');

        $user = User::factory()->create();
        //se crea un pokemon en la base de datos

        $region = Region::factory()->create();

        $this->actingAs($user)->post(route('pokemones.store'), [
             'name'=>'prueba',
             'file' => $file,
             'descripcion'=>'prueba1',
             'tipo_poke' => 'agua',
             'genero' => 'hombre',
             'region' => $region->id
        ])
        ->assertStatus(302)
        ->assertSessionDoesntHaveErrors();

        Storage::assertExists("/public/imagenes/{$file->hashName()}");

        $this->assertDatabaseHas('pokemones', [
             'name'=>'prueba',
             'descripcion'=>'prueba1',
             'tipo_poke' => 'agua',
             'genero' => 'hombre',
             'region' => $region->id
        ]);
    }

    public function testVerSoloUnPokemon()
    {
        $pokemon=Pokemone::factory()->create();

        //accedemos a la ruta donde se visualiza un pokemon.
        $respuesta = $this->get(route('pokemones.show', $pokemon))-> assertStatus(200); //se verifica q la pagina carga correctamente

        $respuesta->assertViewIs('pokemones.show', $pokemon);
        $respuesta->assertViewHas('pokemon', $pokemon);
    }

    public function testEditarUnPokemon()
    {
        Storage::fake('local');

        $file=UploadedFile::fake()->image('pokemon.jpg');

        $user = User::factory()->create();
        //creamos un usuario para poder acceder.
        $region = Region::factory()->create(); // creamos una region ficticia

        $pokemon= Pokemone::factory()->create(); //se crea un pokemon ficticio.
        //Se verifica que nos nuestre la pagina del pokemon correctamente
        $this-> actingAs($user)->get(route('pokemones.edit', $pokemon))
        ->assertStatus(200);

        $respuesta=$this->put(route('pokemones.update', $pokemon), [
            'name' => 'chikorita',
            'file' => $file,
            'descripcion' => 'pokemon tipo planta',
            'tipo_poke' => 'planta',
            'genero' => 'Hembra',
            'region' => $region->id
        ])
        ->assertStatus(302)->assertSessionDoesntHaveErrors();
        $this->assertCount(1, Pokemone::all());

        $pokemon = $pokemon->fresh();

        Storage::assertExists("/public/imagenes/{$file->hashName()}");
        //se verfifica que lo  que se modifico existe en la base de datos
        $this->assertDatabaseHas('pokemones', [
            'name' => 'chikorita',
            'descripcion' => 'pokemon tipo planta',
            'tipo_poke' => 'planta',
            'genero' => 'Hembra',
            'region' => $region->id
       ]);

        $respuesta->assertRedirect(route('pokemones.show', $pokemon));
    }
    
    public function testDestruirUnPokemon()
    {
        $user = User::factory()->create();
        
        $pokemon = Pokemone::factory()->create(); //se crea un pokemon

        $respuesta=$this-> actingAs($user)->delete(route('pokemones.destroy', $pokemon))
        ->assertStatus(302);

        $this->assertDatabaseMissing('pokemones', [
         'id'=>$pokemon->id
     ]);
     
        $respuesta->assertRedirect(route('pokemones.index'));
    }
}
