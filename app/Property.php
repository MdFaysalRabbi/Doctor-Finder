<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable=['name','phone','division','district','location','lift','rent','room_quantity','washroom_quantity','balcony_quantity','floor','image','comment','tenant_type'];
}
