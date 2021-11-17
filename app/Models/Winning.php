<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Left_design;
use App\Models\Right_design;
use App\Models\Center_design;
use App\Models\Cutin;
use App\Models\Directing;




class Winning extends Model
{
    use HasFactory;

    protected $fillable = [
        'left_design_id',
        'right_design_id',
        'center_design_id',
        'round',
        'cutin_id',
        'directing_id',
    ];

    // $win->left_design
    public function left_design(){
        return $this->belongsTo(Left_design::class);
    }

    // $win->right_design
    public function right_design(){
        return $this->belongsTo(Right_design::class);
    }

    // $win->center_design
    public function center_design(){
        return $this->belongsTo(Center_design::class);
    }

    //$win->cutin
    public function cutin(){
        return $this->belongsTo(Cutin::class);
    }

    //$win->directing
    public function directing(){
        return $this->belongsTo(Directing::class);
    }

}
