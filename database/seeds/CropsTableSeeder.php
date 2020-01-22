<?php

use Illuminate\Database\Seeder;
use App\Crop;

class CropsTableSeeder extends Seeder
{
    public function run()
    {
        $crop = Crop::create([
            'name_scientific' => 'Solanum lycopersicum',
            'name'            => 'Tomate',
            'description'     => 'Tomate o Jitomate Planta comestible oriunda de América 
            que hoy es consumida en el mundo entero. Exixte una gran cantidad de 
            Variedades de Tomates y se cultiva comercialmente en gran parte del planeta.'
        ]);

        $crop= Crop::create([
            'name_scientific' => 'Cucurbita maxima',
            'name'            => 'Calabazin',
            'description'     => 'Las calabazas de verano y los calabacines, así como
            todas las calabazas de invierno, pertenecen a la misma especie botánica, 
            que no hay que confundir con la calabaza vinatera, del peregrino o porongo
            (del género Lagenaria).'
        ]);
    }
}
