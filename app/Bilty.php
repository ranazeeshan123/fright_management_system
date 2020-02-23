<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bilty extends Model
{
    protected $fillable = [
        'id', 'bilty_no', 'customer_id', 'challan_id',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function challan()
    {
        return $this->belongsTo('App\Challan');
    }
}
