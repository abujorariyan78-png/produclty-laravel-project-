<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    protected $fillable=[
        'header','sub_header','title1','sub_title1','title2','sub_title2','title3','sub_title3','image'
    ];
}
