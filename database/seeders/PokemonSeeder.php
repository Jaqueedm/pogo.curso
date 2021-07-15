<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pokemone;
use App\Models\Region;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $pokemon = new Pokemone();

        $pokemon-> name='Bulbasaur';
        $pokemon->url='/storage/imagenes/bulbasaur.jpg';
        $pokemon->slug='bulbasaur';
        $pokemon->descripcion='Es facil verle hechandose una siesta al sol.';
        $pokemon->tipo_poke='Planta';
    
        $pokemon->genero='hembra';

        $pokemon->region='1';

        $pokemon->save();

        $pokemon2 = new Pokemone();

        $pokemon2-> name='Charmander';
        $pokemon2->url='/storage/imagenes/charmander.png';
        $pokemon2->slug='charmander';
        $pokemon2->descripcion='La llama que tiene en la punta de la cola arde según sus sentimientos.';
        $pokemon2->tipo_poke='fuego';
    
        $pokemon2->genero='Macho';

        $pokemon2->region='1';

        $pokemon2->save();

        $pokemon3 = new Pokemone();

        $pokemon3-> name='squirtle';
        $pokemon3->url='/storage/imagenes/squirtle.png';
        $pokemon3->slug='squirtle';
        $pokemon3->descripcion='su forma redondeada y las hendiduras que tiene le ayudan a deslizarse en el agua y le permiten nadar a gran velocidadd.';
        $pokemon3->tipo_poke='Agua';
    
        $pokemon3->genero='hembra';

        $pokemon3->region='1';

        $pokemon3->save();

        $pokemon4 = new Pokemone();

        $pokemon4-> name='Chikorita';
        $pokemon4->url='/storage/imagenes/Chikorita.png';
        $pokemon4->slug='chikorita';
        $pokemon4->descripcion='Este dócil Pokémon hoja, de color verde claro, se alimenta con rayos solares mediante la fotosíntesis que ocurre cuando éstos impactan en su cuerpo o en su hoja.';
        $pokemon4->tipo_poke='Planta';
    
        $pokemon4->genero='Macho';

        $pokemon4->region='2';

        $pokemon4->save();

        $pokemon5 = new Pokemone();

        $pokemon5-> name='Pidgey';
        $pokemon5->url='/storage/imagenes/Pidgey.png';
        $pokemon5->slug='pidgey';
        $pokemon5->descripcion='Son de naturaleza amistosa y bastante valientes.';
        $pokemon5->tipo_poke='volador';
    
        $pokemon5->genero='Macho';

        $pokemon5->region='2';

        $pokemon5->save();

        $pokemon6 = new Pokemone();

        $pokemon6-> name='Totodile';
        $pokemon6->url='/storage/imagenes/Totodile.png';
        $pokemon6->slug='totodile';
        $pokemon6->descripcion='Totodile es un Pokémon extremadamente arriesgado y un poco alocado. Pero a pesar de ser tan agitado y muy curioso, este Pokémon es muy fuerte, y llega a hacer ataques de gran daño, aun asi puede llegar a ser muy cariñoso.';
        $pokemon6->tipo_poke='Agua';
    
        $pokemon6->genero='Macho';

        $pokemon6->region='2';

        $pokemon6->save();

        $pokemon7 =new Pokemone();

        $pokemon7-> name='Treecko';
        $pokemon7->url='/storage/imagenes/Treecko.png';
        $pokemon7->slug='treecko';
        $pokemon7->descripcion=' Es carismático, tranquilo y con gran capacidad de autocontrol.';
        $pokemon7->tipo_poke='Planta';
    
        $pokemon7->genero='hembra';

        $pokemon7->region='3';

        $pokemon7->save();

        $pokemon8 = new Pokemone();

        $pokemon8-> name='Torchic';
        $pokemon8->url='/storage/imagenes/Torchic.png';
        $pokemon8->slug='torchic';
        $pokemon8->descripcion='Este Pokémon está basado en un pequeño pollito. Torchic está cubierto por una suave capa de plumas con tonos anaranjados.';
        $pokemon8->tipo_poke='fuego';
    
        $pokemon8->genero='Macho';

        $pokemon8->region='3';

        $pokemon8->save();

        $pokemon9 = new Pokemone();

        $pokemon9-> name='Poochyena';
        $pokemon9->url='/storage/imagenes/Poochyena.png';
        $pokemon9->slug='poochyena';
        $pokemon9->descripcion='Es omnívoro, por lo que no tiene problemas de alimento, en caso de ser atacado no dudará a la hora de pelear, es agresivo.';
        $pokemon9->tipo_poke='Siniestro';
    
        $pokemon9->genero='Macho';

        $pokemon9->region='3';

        $pokemon9->save();
    }
}
