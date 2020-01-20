<?php

use Illuminate\Database\Seeder;
use App\Epoch;

class EpochTableSeeder extends Seeder
{
    public function run()
    {
        $epoch = Epoch::create(['name_epoch' => 'Primavera']);

        $epoch = Epoch::create(['name_epoch' => 'Verano']);

        $epoch = Epoch::create(['name_epoch' => 'Otoño']);

        $epoch = Epoch::create(['name_epoch' => 'Invierno']);
    }
}
