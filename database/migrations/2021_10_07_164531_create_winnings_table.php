<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winnings', function (Blueprint $table) {
            $table->id();
            $table->integer('left_design_id');
            $table->integer('right_design_id');
            $table->integer('center_design_id');
            $table->integer('round');
            $table->integer('cutin_id');
            $table->integer('directing_id');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('winnings');
    }
}
