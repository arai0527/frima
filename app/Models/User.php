<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $table = 'users';
    protected $dates = ['deleted_at'];

    public function image()
    {
        return $this->belongstoMany('App\Models\Image');
    }

    public function product()
    {
        return $this->hasMany('App\Models\product');
    }
}
