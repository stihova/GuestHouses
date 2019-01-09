<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'houseName','locationName','numberOfRooms','numberOfBeds','houseType'
    ];
}
