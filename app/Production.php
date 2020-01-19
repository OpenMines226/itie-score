<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{

    public function region()
    {
        return $this->belongsTo('App\MiningCompany');
    }
}
