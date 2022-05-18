<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'id_group'=>9,
            'name'=>"DVD-плеер BBK DVP 753HD",
        ]);
        Product::create([
            'id_group'=>9,
            'name'=>"DVD-плеер BBK DVP 953HD",
        ]);
        Product::create([
            'id_group'=>9,
            'name'=>"DVD-плеер BBK DMP1024HD (+ 3 DVD диска)",
        ]);
        Product::create([
            'id_group'=>2,
            'name'=>"Магнитола HYUNDAI H-1404",
        ]);
        Product::create([
            'id_group'=>10,
            'name'=>"Blu-ray плеер PHILIPS DVP3700 (51)",
        ]);
        Product::create([
            'id_group'=>8,
            'name'=>"Плазменный телевизор LG 50PZ250 (3D)",
        ]);
        Product::create([
        'id_group'=>8,
        'name'=>"Плазменный телевизор Samsung PS51D450",
         ]);
        Product::create([
            'id_group'=>7,
            'name'=>"Плазменный телевизор LG 42PT250",
        ]);
        Product::create([
            'id_group'=>7,
            'name'=>"Плазменный телевизор LG 42PW451 (3D)",
        ]);
        Product::create([
            'id_group'=>4,
            'name'=>"Плазменный телевизор LG 50PZ551 (3D)",
        ]);
        Product::create([
            'id_group'=>5,
            'name'=>"Телевизор-ЖК LG 26LK330",
        ]);
        Product::create([
        'id_group'=>5,
        'name'=>"Телевизор-ЖК Fusion FLTV-16W7",
         ]);
        Product::create([
            'id_group'=>6,
            'name'=>"Телевизор-ЖК LG 42LK530",
        ]);
        Product::create([
            'id_group'=>6,
            'name'=>"Телевизор-ЖК LG 42LK551",
        ]);
        Product::create([
            'id_group'=>6,
            'name'=>"Телевизор-ЖК LG 47LK530",
        ]);
        Product::create([
            'id_group'=>3,
            'name'=>"Телевизор-ЖК Samsung LE32D403",
        ]);
        Product::create([
            'id_group'=>1,
            'name'=>"Телевизор Erisson 1435",
        ]);

    }
}
