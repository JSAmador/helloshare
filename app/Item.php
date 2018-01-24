<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];


    protected $fillable = ['name', 'description', 'image_id', 'category_id', 'location_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public static function scopeLatest($query) {
        return $query->orderBy('id', 'desc')->get();
    }

    public function image(){
        return $this->belongsTo('App\Image');
    }

    public function categories() {
        return $this->hasMany('App\Category');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function images(){
        return $this->hasMany('App\ItemImage');
    }


}

