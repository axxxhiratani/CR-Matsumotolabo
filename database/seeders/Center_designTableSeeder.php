<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Center_design;

class Center_designTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Center_design::create([
            "design_img_id"=>1
        ]);
        Center_design::create([
            "design_img_id"=>2
        ]);
        Center_design::create([
            "design_img_id"=>3
        ]);
        Center_design::create([
            "design_img_id"=>4
        ]);
        Center_design::create([
            "design_img_id"=>5
        ]);
        Center_design::create([
            "design_img_id"=>6
        ]);
        Center_design::create([
            "design_img_id"=>7
        ]);
    }
}
