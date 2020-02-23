<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challan extends Model
{
    protected $fillable = [
        'id', 'challan_no',
    ];

    public function bilties()
    {
        return $this->hasMany('App\Bilty');
    }
}
