<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{
    //
    protected $fillable = ['file_path', 'item_id'];

    protected $uploads = '/images/items';

    public function getFilePathAttribute($image){
        return $this->uploads.$image;
    }
}
