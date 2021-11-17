<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Cutin;

class CutinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cutin::create([
            "body"=>"　"
        ]);

        Cutin::create([
            "body"=>"リーチ！！"
        ]);

    }
}
