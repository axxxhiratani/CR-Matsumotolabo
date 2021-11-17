<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Design_img;

class Design_imgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Design_img::create([
            "img" => "1.png"
        ]);
        Design_img::create([
            "img" => "2.png"
        ]);
        Design_img::create([
            "img" => "3.png"
        ]);
        Design_img::create([
            "img" => "4.png"
        ]);
        Design_img::create([
            "img" => "5.png"
        ]);
        Design_img::create([
            "img" => "6.png"
        ]);
        Design_img::create([
            "img" => "7.png"
        ]);



    }
}
