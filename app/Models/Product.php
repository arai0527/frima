<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsto('App\Models\Category');
    }

    public function brand()
    {
        return $this->belongsto('App\Models\Brand');
    }

    public function image()
    {
        return $this->belongsToMany('App\Models\Image');
    }

    public function user()
    {
        return $this->belongsto('App\Models\User');
    }

    public function deliveryDay()
    {
        return $this->belongsto('App\Models\DeliveryDay');
    }

    public function deliveryPayment()
    {
        return $this->belongsto('App\Models\DeliveryPayment');
    }
    
    public function deliveryMethod()
    {
        return $this->belongsto('App\Models\DeliveryMethod');
    }

    public function area()
    {
        return $this->belongsto('App\Models\Area');
    }

    public function condition()
    {
        return $this->belongsto('App\Models\Condition');
    }
}
