<?php

use Illuminate\Database\Seeder;

class KyuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Kyu::class)->create(['nombre' => 'Primer',]);
        factory(App\Kyu::class)->create(['nombre' => 'Segundo',]);
        factory(App\Kyu::class)->create(['nombre' => 'Tercer',]);
        factory(App\Kyu::class)->create(['nombre' => 'Cuarto',]);
        factory(App\Kyu::class)->create(['nombre' => 'Quinto',]);
        factory(App\Kyu::class)->create(['nombre' => 'Sexto',]);
        factory(App\Kyu::class)->create(['nombre' => 'Septimo',]);
        factory(App\Kyu::class)->create(['nombre' => 'Octavo',]);
        factory(App\Kyu::class)->create(['nombre' => 'Noveno',]);
        factory(App\Kyu::class)->create(['nombre' => 'Decimo',]);
        factory(App\Kyu::class)->create(['nombre' => 'Onceavo',]);
    }
}
