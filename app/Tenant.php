<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable=['name','phone','division','district','location','budget','home','washroom','comment','tenant_type','balcony'];
}
