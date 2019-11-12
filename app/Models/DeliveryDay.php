<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryDay extends Model
{
    public function product ()
    {
        return $this->hasMany('App\Models\Product');
    }
}
