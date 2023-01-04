<?php

use Illuminate\Database\Seeder;

class MueblesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('muebles')->insert([
            'nombre' => 'Banco alto modelo "Faena"',
            'foto' => 'faena.jpg',
            'descripcion' => 'Banco para bar en madera sólida de Caoba. 
                              Tejido en cordón de algodón.',
            'precio' => '3499',
            'stock' => '500',
            'madera_id' => '3',
        ]);

        DB::table('muebles')->insert([
            'nombre' => 'Silla modelo "Maracas"',
            'foto' => 'maracas.jpg',
            'descripcion' => 'Silla en madera sólida de Haya. 
                              Tejidos disponibles en cordón de piola negra.',
            'precio' => '5999',
            'stock' => '300',
            'madera_id' => '1',
        ]);

        DB::table('muebles')->insert([
            'nombre' => 'Silla modelo "Alebrije"',
            'foto' => 'alebrije2.jpg',
            'descripcion' => 'Silla en madera sólida de Tzalam. 
                              Tejidos disponibles en cordón de algodón.',
            'precio' => '4999',
            'stock' => '200',
            'madera_id' => '5',
        ]);

        DB::table('muebles')->insert([
            'nombre' => 'Silla de comedor "faena chica"',
            'foto' => 'faenac.jpg',
            'descripcion' => 'Silla de comedor chica en madera sólida de Caoba. 
                              Tejido en cordón de papercord.',
            'precio' => '3700',
            'stock' => '150',
            'madera_id' => '3',
        ]);

        DB::table('muebles')->insert([
            'nombre' => 'Banca modelo "Carrusel"',
            'foto' => 'carrusel.jpg',
            'descripcion' => 'Banca de madera sólida de Haya. 
                              Tejidos en cordón de algodón.',
            'precio' => '3499',
            'stock' => '100',
            'madera_id' => '1',
        ]);

        DB::table('muebles')->insert([
            'nombre' => 'Perchero modelo "Maracas"',
            'foto' => 'percherom.jpg',
            'descripcion' => 'Perchero en madera sólida de Caoba. 
                              Tejidos disponibles en piola negra.',
            'precio' => '2499',
            'stock' => '120',
            'madera_id' => '3',
        ]);

        DB::table('muebles')->insert([
            'nombre' => 'Tabla de Corte',
            'foto' => 'tablac.jpg',
            'descripcion' => 'Tabla de quesos en madera sólida de nogal americano. 
                              Curada con cera de abeja y aceite mineral grado alimenticio.',
            'precio' => '799',
            'stock' => '50',
            'madera_id' => '6',
        ]);


        DB::table('muebles')->insert([
            'nombre' => 'Mesa de centro modelo "Alebrije"',
            'foto' => 'mesita.jpg',
            'descripcion' => 'Mesa de centro baja, en madera sólida de Caoba. 
                              Tejido en cordón de papercord.',
            'precio' => '3499',
            'stock' => '130',
            'madera_id' => '3',
        ]);
    }
}

