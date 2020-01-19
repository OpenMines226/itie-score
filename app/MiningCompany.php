<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MiningCompany extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'ifu_number', 'description', 'region_id'
    ];

    public function region()
    {
        return $this->belongsTo('App\Region');
    }
}
