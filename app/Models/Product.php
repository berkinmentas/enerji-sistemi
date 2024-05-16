<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'product_category_id',
        'name',
        'description',
        'hot_water_capacity',
        'cold_water_capacity',
        'internal_boiler_thickness',
        'outer_boiler_thickness',
        'tube_length',
        'outer_tube_diameter',
        'inner_tube_diameter',
        'glass_thickness',
        'tube_reflectance_ratio',
        'empty_tube_temperature',
        'tube_material',
        'vacuum',
        'heat_loss_coefficient',
        'light_absorption',
        'surface_coating',
    ];
}
