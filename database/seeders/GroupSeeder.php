<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'id_parent'=>0,
            'name'=>"Телевизоры",
        ]);
        Group::create([
            'id_parent'=>0,
            'name'=>"Мультимедиа",
        ]);
        Group::create([
            'id_parent'=>1,
            'name'=>"ЖК телевизоры",
        ]);
        Group::create([
            'id_parent'=>1,
            'name'=>"Плазменные телевизоры",
        ]);
        Group::create([
            'id_parent'=>3,
            'name'=>"Диагональю до 45 дюймов",
        ]);
        Group::create([
            'id_parent'=>3,
            'name'=>"Диагональю более 40 дюймов",
        ]);
        Group::create([
            'id_parent'=>4,
            'name'=>"Диагональю до 45 дюймов",
        ]);
        Group::create([
            'id_parent'=>4,
            'name'=>"Диагональю более 40 дюймов",
        ]);
        Group::create([
            'id_parent'=>2,
            'name'=>"DVD-плееры",
        ]);
        Group::create([
            'id_parent'=>2,
            'name'=>"Blu-Ray плееры",
        ]);
    }
}
