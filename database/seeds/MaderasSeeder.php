<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaderasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maderas')->insert([
            'tipo' => 'Haya',
        ]);

        DB::table('maderas')->insert([
            'tipo' => 'Parota',
        ]);

        DB::table('maderas')->insert([
            'tipo' => 'Caoba',
        ]);

        DB::table('maderas')->insert([
            'tipo' => 'Cedro',
        ]);

        DB::table('maderas')->insert([
            'tipo' => 'Tzalam',
        ]);

        DB::table('maderas')->insert([
            'tipo' => 'Nogal',
        ]);
    }
}
