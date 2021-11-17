<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Design_img;

class Center_design extends Model
{
    use HasFactory;

    protected $fillable = [
        'design_img_id',
    ];

    // $center->desing_img
    public function design_img(){
        return $this->belongsTo(Design_img::class);
    }

}
