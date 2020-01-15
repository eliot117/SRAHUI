<?php

use Illuminate\Database\Seeder;
use App\Epoch;

class EpochTableSeeder extends Seeder
{
    public function run()
    {
        $epoch = create([
            'name_epoch' => 'Primavera'
        ]);

        $epoch = create([
            'name_epoch' => 'Verano'
        ]);

        $epoch = create([
            'name_epoch' => 'Otoño'
        ]);

        $epoch = create([
            'name_epoch' => 'Invierno'
        ]);
    }
}
