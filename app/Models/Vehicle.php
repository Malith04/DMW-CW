<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{


    public $timestamps=true;
    protected $table='vehicles';
    protected $fillable=[
        'name',
        'brand',
        'chassis_number',
        'color',
        'passenger_count',
        'model_year',
        'owned_by'
    ];
}
