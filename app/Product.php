<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function productSizes()
    {
        return $this->hasMany('App\ProductSize');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function additives()
    {
        return $this->belongsToMany('App\Additive');
    }
}
