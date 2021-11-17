<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Design_img;
use App\Models\Cutin;
use App\Models\Directing;
use App\Models\Left_design;
use App\Models\Right_design;
use App\Models\Center_design;
use App\Models\Winning;
use App\Models\Lost;


class CreateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_example()
    {
        $this->assertTrue(true);


        //写真のセット
        Design_img::factory()->create([
            "img"=>"1.png"
        ]);
        $this->assertDatabaseHas("design_imgs",[
            "img"=>"1.png"
        ]);


        Cutin::factory()->create([
            "body"=>"reeach"
        ]);
        $this->assertDatabaseHas("cutins",[
            "body"=>"reeach"
        ]);

        Directing::factory()->create([
            "movie"=>"2.MOV",
            "time" =>60
        ]);
        $this->assertDatabaseHas("directings",[
            "movie"=>"2.MOV",
            "time" =>60
        ]);

        Left_design::factory()->create([
            "design_img_id"=>1
        ]);

        $this->assertDatabaseHas("left_designs",[
            "design_img_id"=>1
        ]);

        Right_design::factory()->create([
            "design_img_id"=>1
        ]);

        $this->assertDatabaseHas("right_designs",[
            "design_img_id"=>1
        ]);


        Center_design::factory()->create([
            "design_img_id"=>1
        ]);

        $this->assertDatabaseHas("center_designs",[
            "design_img_id"=>1
        ]);

        Winning::factory()->create([
            'left_design_id'=>1,
            'right_design_id'=>1,
            'center_design_id'=>1,
            'round'=>4,
            'cutin_id'=>1,
            'directing_id'=>1,
        ]);

        $this->assertDatabaseHas("winnings",[
            'left_design_id'=>1,
            'right_design_id'=>1,
            'center_design_id'=>1,
            'round'=>4,
            'cutin_id'=>1,
            'directing_id'=>1,
        ]);

        Lost::factory()->create([
            'left_design_id'=>1,
            'right_design_id'=>2,
            'center_design_id'=>1,
            'cutin_id'=>1,
            'directing_id'=>1,
        ]);

        $this->assertDatabaseHas("losts",[
            'left_design_id'=>1,
            'right_design_id'=>2,
            'center_design_id'=>1,
            'cutin_id'=>1,
            'directing_id'=>1,
        ]);
    }
}
