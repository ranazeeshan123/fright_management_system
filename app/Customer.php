<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'id', 'name', 'email',
    ];

    public function bilties()
    {
        return $this->hasMany('App\Bilty');
    }
}
