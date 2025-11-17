<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsPage extends Model
{
     protected $fillable=[
        'header','sub_header','para','title1','title2','title3','manager_image'
    ];
}
