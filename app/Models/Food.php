<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'barcode',
        'weight',
        'unit',
        'serving',
        'engergy',
        'fat',
        'of_which_saturates',
        'carbohydrates',
        'of_which_sugars',
        'fiber',
        'protein',
        'salt',
    ];
}
