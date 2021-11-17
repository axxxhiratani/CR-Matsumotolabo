<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Directing;

class DirectingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Directing::create([
            'movie'=>"1.MOV",
            'time'=>50
        ]);
        Directing::create([
            'movie'=>"2.MOV",
            'time'=>100
        ]);
        Directing::create([
            'movie'=>"3.MOV",
            'time'=>120
        ]);
        Directing::create([
            'movie'=>"4.MOV",
            'time'=>120
        ]);
        Directing::create([
            'movie'=>"5.MOV",
            'time'=>120
        ]);
        Directing::create([
            'movie'=>"6.MOV",
            'time'=>120
        ]);

    }
}
