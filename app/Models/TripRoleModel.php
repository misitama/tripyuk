<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TripRoleModel extends Model
{
    protected $table = 'trip_role';

    public function TripUserModels()
    {
        return $this->hasMany('App\Models\TripUserModel');
    }
}