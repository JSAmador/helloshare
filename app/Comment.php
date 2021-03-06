<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $fillable = ['item_id', 'body', 'user_id', 'is_active'];


    public function replies(){
        return $this->hasMany('App\CommentReply');
    }


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function item(){
        return $this->belongsTo('App\Item');
    }
}
