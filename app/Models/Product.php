<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'photo',
        'video',
        'category_id',
        'shop_id',
        'location',
        'price_som',
        'price_usd',
        'area',
        'date',
        'room_id',
        'repair_id',
        'documents',
        'description',
        'material_id',
        'region_id',
        'city_id',
        'street_id',
        'house_id',
        'floor_id',
        'flat_id',
    ];
}
