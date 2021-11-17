<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Right_design;

class Right_designTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Right_design::create([
            "design_img_id"=>1
        ]);
        Right_design::create([
            "design_img_id"=>2
        ]);
        Right_design::create([
            "design_img_id"=>3
        ]);
        Right_design::create([
            "design_img_id"=>4
        ]);
        Right_design::create([
            "design_img_id"=>5
        ]);
        Right_design::create([
            "design_img_id"=>6
        ]);
        Right_design::create([
            "design_img_id"=>7
        ]);


    }
}
