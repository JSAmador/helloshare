<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = ['file_path'];

    protected $uploads = '/images/';

    public function getFilePathAttribute($image){
        return $this->uploads.$image;
    }


}
