<?php

use Illuminate\Database\Seeder;

class ModalidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Modalidad::class)->create([

            'nombre' => 'Kata',

        ]);

        factory(App\Modalidad::class)->create([

            'nombre' => 'Kumite',

        ]);

        factory(App\Modalidad::class)->create([

            'nombre' => 'Ambas',

        ]);
    }
}
