<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    public function image()
    {
        return $this->belongsto('App\Models\Image');
    }

    public function product()
    {
        return $this->belongsto('App\Models\Product');
    }
}
