<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['name', 'price', 'desc','short_desc','category_id'];

    public function images() {
        return $this->hasMany('App\Image');
    }

}
