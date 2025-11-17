<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperPowerPage extends Model
{
     protected $fillable=[
        'title','sub_title','icon_image'
    ];
}
