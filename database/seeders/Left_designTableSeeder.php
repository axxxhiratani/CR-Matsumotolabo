<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Left_design;

class Left_designTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Left_design::create([
            "design_img_id"=>1
        ]);
        Left_design::create([
            "design_img_id"=>2
        ]);
        Left_design::create([
            "design_img_id"=>3
        ]);
        Left_design::create([
            "design_img_id"=>4
        ]);
        Left_design::create([
            "design_img_id"=>5
        ]);
        Left_design::create([
            "design_img_id"=>6
        ]);
        Left_design::create([
            "design_img_id"=>7
        ]);

    }
}
