<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Winning;
use App\Models\Lost;
use App\Models\Center_design;
use App\Models\Right_design;
use App\Models\Left_design;
use App\Models\Design_img;
use App\Models\Directing;
use App\Models\Cutin;




class MainController extends Controller
{
    //
    public function show(){

        $wins = Winning::all();
        $losts = Lost::all();

        return view('index')
            ->with(['wins' => $wins,'losts' => $losts]);

    }
}
